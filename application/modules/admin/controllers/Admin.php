<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Dashboard
 * @author IMAM SYAIFULLOH
 */
class Admin extends MX_Controller
{
    public function __construct()
    {
     parent::__construct();
    }

    function index($data=NULL,$page = NULL)
    {
     
        $data['module'] = 'dashboard';
        $data['view_file'] = 'v_dashboard';
        
        echo Modules::run('template/index',$data);

    }
}
?>