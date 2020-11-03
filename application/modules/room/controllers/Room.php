<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Dashboard
 * @author IMAM SYAIFULLOH
 */
class Room extends MX_Controller
{
    public function __construct()
    {
     parent::__construct();
        $this->load->model('Room_model','rm');
    }

    function index($data=NULL,$page = NULL)
    {
     
        // $data['module'] = 'dashboard';
        // $data['view_file'] = 'v_dashboard';
        
        // echo Modules::run('template/index',$data);
        $data['title'] = 'PKL Hotel';
        $data['kamar'] = $this->rm->ketersediaan_kamar()->result();
        foreach ($data['kamar'] as $k) {
            $kategori_id = $k->kategori_id;
        }
        $data['jml_kamar'] = $this->rm->jumlah_kamar_kosong($kategori_id)->row_array();
        $this->load->view('v_room', $data, FALSE);

    }
    function pesan($id)
    {
        $data['title'] = 'PKL Hotel';
        $jml_kamar = $this->rm->jumlah_kamar_kosong($id)->row_array();
        $data['detail_kamar'] = $this->rm->pesan_kamar($id)->result();
        if(count($jml_kamar) > 0){
            //cek session
            if($this->session->userdata('member_nik') != null){
                // /lanjut transaksi
                $this->load->view('v_room_pesan', $data, FALSE);
                if (isset($_POST['submit'])) {
                    $kamar_nomor = $this->input->post('kamar_nomor');
                    $reservasi_waktu = $this->input->post('reservasi_waktu');
                    $reservasi_cek_in = $this->input->post('reservasi_cek_in');
                    $reservasi_lama_menginap = $this->input->post('reservasi_lama_menginap');
                    $reservasi_cek_out = $this->input->post('reservasi_cek_out');
                    $reservasi_total_bayar = $this->input->post('reservasi_total_bayar');
                    $reservasi_kd = substr($this->session->userdata('member_nik'), 0,3).date('mds');
                    $data = [
                        'reservasi_kd' => $reservasi_kd ,
                        'member_nik' => $this->session->userdata('member_nik'),
                        'kamar_nomor' => $kamar_nomor,
                        'reservasi_waktu'=>$reservasi_waktu,
                        'reservasi_cek_in' => $reservasi_cek_in,
                        'reservasi_cek_out' => $reservasi_cek_out,
                        'reservasi_lama_menginap' => $reservasi_lama_menginap,
                        'reservasi_total_bayar'=>$reservasi_total_bayar,
                    ];
                    $this->db->insert('reservasi', $data);
                    redirect('dashboard','refresh');
                }
            }else{ //login dolo
                redirect('auth','refresh');
            }
            
        }else{
            redirect('room','refresh');
        }
    }
}
?>