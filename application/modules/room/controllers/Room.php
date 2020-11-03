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
        $jml_kamar = $this->rm->jumlah_kamar_kosong($id)->row_array();
        if($jml_kamar > 0){
            //cek session
            if($this->session->userdata('member_nik') != null){
                // /lanjut transaksi

            }else{ //login dolo
                redirect('auth','refresh');
            }
            
        }else{
            redirect('room','refresh');
        }
    }
}
?>