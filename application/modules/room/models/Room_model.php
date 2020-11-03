<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Dashboard
 * @author IMAM SYAIFULLOH
 */
class Room_model extends CI_Model
{
    public function __construct()
    {
     parent::__construct();
    }

    function ketersediaan_kamar()
    {
        return $this->db->query("SELECT * FROM `kamar` 
		JOIN kategori_kamar ON kamar.kategori_id = kategori_kamar.kategori_id
		WHERE kamar_status = '0'
        GROUP BY kamar.kategori_id");

    }
    function jumlah_kamar_kosong($id)
    {
    	return $this->db->query("SELECT COUNT(kamar.kategori_id) as jml_kamar FROM `kamar` 
		JOIN kategori_kamar ON kamar.kategori_id = kategori_kamar.kategori_id
		WHERE kamar_status = '0' AND kamar.kategori_id =  '$id'");	
    }
    function pesan_kamar($id)
    {
    	return $this->db->query("SELECT * FROM `kamar` 
		JOIN kategori_kamar ON kamar.kategori_id = kategori_kamar.kategori_id
		WHERE kamar_status = '0' AND kamar.kategori_id =  '$id'
        LIMIT 1");
    }
}
?>