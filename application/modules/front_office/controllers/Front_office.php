<?php
class Front_office extends MX_Controller
{
    public function __construct()
    {
     parent::__construct();
     $this->load->model('dashboard/Dashboard_model', 'dm');
    }

    function reservasi()
    {
     
        $data['module'] = 'front_office';
        $data['view_file'] = 'v_reservasi';
        $data['title'] = 'Reservasi Data';
        $data['riwayat_reservasi'] = $this->dm->riwayat_reservasi_admin()->result();
        echo Modules::run('template/index',$data);
    }
    function konfirmasi()
    {
        $data['module'] = 'front_office';
        $data['view_file'] = 'v_konfirmasi';
        $data['title'] = 'Konfirmasi Data';
        $data['riwayat_konfirmasi'] = $this->dm->riwayat_konfirmasi_admin()->result();
        echo Modules::run('template/index',$data);
    }
    function konfirmasi_reservasi($id)
    {
        $this->db->update('konfirmasi', array('konfirmasi_status' => '2'), array('reservasi_kd' => $id));
        $this->session->set_flashdata('message', 'Terkonfirmasi');
        redirect('front_office/reservasi','refresh');
    }
}

?>