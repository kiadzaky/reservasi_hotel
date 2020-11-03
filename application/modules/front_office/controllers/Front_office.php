<?php
class Front_office extends MX_Controller
{
    public function __construct()
    {
     parent::__construct();
     // $this->load->model('reservasi/Reservasi_model', 'rm');
    }

    function reservasi()
    {
     
        $data['module'] = 'front_office';
        $data['view_file'] = 'v_reservasi';
        $data['title'] = 'Reservasi Data';
        echo Modules::run('template/index',$data);
    }
    function konfirmasi()
    {
        $data['module'] = 'front_office';
        $data['view_file'] = 'v_konfirmasi';
        $data['title'] = 'Konfirmasi Data';
        echo Modules::run('template/index',$data);
    }
}

?>