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
                    $image_name_qrcode = $this->qrcode($this->session->userdata('member_nik'));
                    $data = [
                        'reservasi_kd'=>$reservasi_kd,
                        'konfirmasi_jml_pembayaran' => $konfirmasi_jml_pembayaran,
                        'konfirmasi_bank' => $konfirmasi_bank,
                        'konfirmasi_foto_bukti' => $konfirmasi_foto_bukti,
                        'konfirmasi_foto_qrcode' => $image_name_qrcode,
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
    function qrcode($nik)
    {
        $this->load->library('ciqrcode'); //pemanggilan library QR CODE
 
        $config['cacheable']    = true; //boolean, the default is true
        // $config['cachedir']     = './assets/'; //string, the default is application/cache/
        // $config['errorlog']     = './assets/'; //string, the default is application/logs/
        $config['imagedir']     = './assets/img/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        $config['white']        = array(70,130,180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
 
        $image_name='qr'.$nik.'.png'; //buat name dari qr code sesuai dengan nim
 
        $params['data'] = $nik; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE
        return $image_name;
    }
}
?>