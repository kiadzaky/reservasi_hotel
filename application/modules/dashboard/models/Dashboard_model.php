<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Dashboard
 * @author IMAM SYAIFULLOH
 */
class Dashboard_model extends CI_Model
{
    public function __construct()
    {
     parent::__construct();
    }

    function riwayat_reservasi($nik)
    {
         return $this->db->get_where('reservasi', array('member_nik' => $nik));

    }
    function riwayat_konfirmasi($nik)
    {
    	
    	return $this->db->query("SELECT * FROM `konfirmasi` 
			JOIN reservasi ON konfirmasi.reservasi_kd = reservasi.reservasi_kd
            WHERE konfirmasi_status = '2' AND member_nik = '$nik'");
    }
    function riwayat_reservasi_admin()
    {
         return $this->db->query("SELECT * FROM `konfirmasi` 
			JOIN reservasi ON konfirmasi.reservasi_kd = reservasi.reservasi_kd
            WHERE konfirmasi_status = '1'");

    }
    function riwayat_konfirmasi_admin()
    {
    	return $this->db->query("SELECT * FROM `konfirmasi` 
			JOIN reservasi ON konfirmasi.reservasi_kd = reservasi.reservasi_kd
            WHERE konfirmasi_status = '2'");
    }
}
?>