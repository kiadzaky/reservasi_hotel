<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Dashboard
 * @author IMAM SYAIFULLOH
 */
class Auth extends MX_Controller
{
    public function __construct()
    {
     parent::__construct();
     $this->load->model('auth/Auth_model', 'am');
    }

    function index()
    {
        $this->load->view('v_auth');
        if ($this->session->userdata('member_nik') == null) {
          if (isset($_POST['submit'])) {
              $member_email = $this->input->post('member_email');
              $member_password = $this->input->post('member_password');
              $get_data = $this->am->login($member_email)->row_array();
              if (password_verify($member_password, $get_data['member_password'])) {
                  $data = [
                    'member_nik' => $get_data['member_nik'],
                    'member_nama' => $get_data['member_nama'],
                    'member_status' => $get_data['member_status'],
                  ];
                  $this->session->set_userdata($data);
                  redirect('dashboard/index','refresh');
              }
          }
        }else{
            redirect('dashboard','refresh');
        }
    }
    function daftar()
    {
        $this->load->view('v_daftar', FALSE);
        
        
        if (isset($_POST['submit'])) {
           $member_nik = $this->input->post('member_nik');
           $member_nama = $this->input->post('member_nama');
           $member_ttl = $this->input->post('member_tempat'). ', ' . $this->input->post('member_tanggal');
           $member_jkel = $this->input->post('member_jkel');
           $member_alamat = $this->input->post('member_alamat');
           $member_agama = $this->input->post('member_agama');
           $member_status_perkawinan = $this->input->post('member_status_perkawinan');
           $member_pekerjaan = $this->input->post('member_pekerjaan');
           $member_email = $this->input->post('member_email');
           $member_password = $this->input->post('member_password');
           $member_telepon = $this->input->post('member_telepon');
           $get_data = $this->am->login($member_email)->row_array();
            if ($get_data['member_email'] === $member_email) {
              $this->session->set_flashdata('message', 'Email Sudah Pernah Terdaftar');
              redirect('auth/daftar','refresh');
            } else {
              $data = [
                  'member_nik' => $member_nik,
                  'member_nama' => $member_nama,
                  'member_ttl' => $member_ttl,
                  'member_jkel' => $member_jkel,
                  'member_alamat' => $member_alamat,
                  'member_agama' => $member_agama,
                  'member_status_perkawinan' => $member_status_perkawinan,
                  'member_pekerjaan' => $member_pekerjaan,
                  'member_email' => $member_email,
                  'member_password' => password_hash($member_password, PASSWORD_DEFAULT),
                  'member_telepon' => $member_telepon,
                  'member_status' => '1',
             ];
             $this->db->insert('member', $data);
             $this->session->set_flashdata('message', 'Berhasil daftar, silahkan Login');
             redirect('auth');          
            }
             
        }
    }

    function logout()
    {
      session_destroy();
      redirect('room','refresh');
    }
        
}
?>