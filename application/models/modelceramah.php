<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelceramah extends CI_Model
{

	function datapenceramah()
	{
		return $this->db->query("SELECT kd_penceramah,nama_penceramah from penceramah ");
	}

	function simpan($kd_jadwal,$bulan,$tahun,$tanggal,$hari,$penceramah,$judul,$ket)  
	{   
		$a = $this->db->query("INSERT INTO jadwalceramah VALUES('$kd_jadwal','$bulan','$tahun','$tanggal','$hari','$penceramah','$judul','$ket')");     
		return $a; 
	} 

	function ambildata($kode)
	{
		return $this->db->query("SELECT kd_jadwal,bulan,tahun,tanggal,hari,penceramah,nama_penceramah,DATE_FORMAT(tanggal,'%d %M %Y') AS masuktgl,judul,ket FROM jadwalceramah JOIN penceramah ON penceramah=kd_penceramah WHERE kd_jadwal='$kode'");
	}
	
    function updatedata() 
	{
        $kd_jadwal = $this->input->post('kd_jadwal', TRUE);
		$bulan = $this->input->post('bulan', TRUE);
		$tahun = $this->input->post('tahun', TRUE);
        $tanggal = $this->input->post('tanggal', TRUE);
		$hari = $this->input->post('hari', TRUE);
        $penceramah = $this->input->post('penceramah', TRUE);
        $judul = $this->input->post('judul', TRUE);
		$ket = $this->input->post('ket', TRUE);   
        return $this->db->query("UPDATE jadwalceramah SET bulan='$bulan',tahun='$tahun',tanggal='$tanggal',hari='$hari',penceramah='$penceramah',judul='$judul',ket='$ket' WHERE kd_jadwal='$kd_jadwal'");
    }

	function tampil()
	{
		return $this->db->query("SELECT kd_jadwal,bulan,tahun,tanggal,hari,kd_penceramah,nama_penceramah,judul,ket FROM jadwalceramah JOIN penceramah ON penceramah=kd_penceramah GROUP BY kd_jadwal ORDER BY kd_jadwal ASC");
	}

    function hapusdata($kode)
	{
        return $this->db->query("DELETE FROM jadwalceramah WHERE kd_jadwal='$kode'");
    }

}
?>