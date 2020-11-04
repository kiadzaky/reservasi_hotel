<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Dashboard
 * @author IMAM SYAIFULLOH
 */
class Dashboard extends MX_Controller
{
    public function __construct()
    {
     parent::__construct();
     $this->load->model('Dashboard_model', 'dm');
    }

    function index($data=NULL,$page = NULL)
    {
     
        $data['module'] = 'dashboard';
        $data['view_file'] = 'v_dashboard';
        
        echo Modules::run('template/index',$data);

    }
    function riwayat_reservasi() // user
    {
        if ($this->session->userdata('member_status') == '1') {
            $data['module'] = 'dashboard';
            $data['view_file'] = 'v_riwayat_reservasi';
            $data['riwayat_reservasi'] = $this->dm->riwayat_reservasi($this->session->userdata('member_nik'))->result();
            echo Modules::run('template/index',$data);
        }else{
            redirect('admin','refresh');
        }
    }
    function hapus_riwayat_reservasi($id)
    {
        $this->db->delete('reservasi', array('reservasi_kd' => $id));
        redirect('dashboard/riwayat_reservasi','refresh');
    }
    function konfirmasi()
    {
        if ($this->session->userdata('member_status') == '1') {
            if (isset($_POST['submit'])) {
                $reservasi_kd = $this->input->post('reservasi_kd');
                $konfirmasi_jml_pembayaran = $this->input->post('konfirmasi_jml_pembayaran');
                $konfirmasi_bank = $this->input->post('konfirmasi_bank');
                //gambar
                $config['upload_path'] = './assets/img/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']  = '100';
                $config['file_name'] = $reservasi_kd;
                $config['max_width']  = '1024';
                $config['max_height']  = '768';
                $this->upload->initialize($config);
                $this->load->library('upload', $config);
                
                if ( ! $this->upload->do_upload('konfirmasi_foto_bukti')){
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error); 
                }
                else{
                    $data = array('upload_data' => $this->upload->data());
                    $konfirmasi_foto_bukti = $this->upload->data('file_name');
                    $data = [
                        'reservasi_kd'=>$reservasi_kd,
                        'konfirmasi_jml_pembayaran' => $konfirmasi_jml_pembayaran,
                        'konfirmasi_bank' => $konfirmasi_bank,
                        'konfirmasi_foto_bukti' => $konfirmasi_foto_bukti,
                        'konfirmasi_status' => '1',

                    ];
                    $this->db->insert('konfirmasi', $data);
                    $this->db->update('reservasi', array('reservasi_status'=>'1'), array('reservasi_kd' => $reservasi_kd ));
                    $this->session->set_flashdata('message', 'Berhasil Melakukan Pembayaran Tunggu Konfirmasi Dari Pihak Hotel');
                    redirect('dashboard/riwayat_reservasi','refresh');
                }
                    
            }
               
        }else{
            redirect('admin','refresh');
        }
    }

    function reservasi_konfirmasi()
    {
       if ($this->session->userdata('member_status') == '1') {
            $data['module'] = 'dashboard';
            $data['view_file'] = 'v_riwayat_konfirmasi';
            $data['riwayat_konfirmasi'] = $this->dm->riwayat_konfirmasi($this->session->userdata('member_nik'))->result();
            echo Modules::run('template/index',$data);
        }else{
            redirect('admin','refresh');
        }
    }
    function cetak_bukti($id)
    {
       if ($this->session->userdata('member_status') == '1') {
            $data['bukti_pembayaran'] = $this->dm->cetak_bukti($id, $this->session->userdata('member_nik'))->row_array();
            // var_dump($data);
           $this->load->view('v_bukti_pembayaran',$data , FALSE);
        }else{
            redirect('admin','refresh');
        }
    }
}
?>