<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modeluangmasuk extends CI_Model{

	function datajeniskas()
	{
		return $this->db->query("SELECT kd_jeniskas,jeniskas from jeniskas where kd_jeniskas NOT IN(select idkasmasuk from tempmasuk)");
	}

	function datatemp()
	{
		return $this->db->query("SELECT idkasmasuk,jeniskas,uraian,jumlahmasuk from tempmasuk join jeniskas on tempmasuk.idkasmasuk=jeniskas.kd_jeniskas");
	}

	function hapustmp($idkas)  
	{   
		return $this->db->query("DELETE from tempmasuk where idkasmasuk='$idkas'"); 
	} 
 
 
function smptemp($id,$uraian,$jml)  
{   
	return $this->db->query("INSERT into tempmasuk values('$id','$uraian','$jml')");  
}

	function simpan($jeniskas,$tglmasuk,$donatur,$jumlahmasuk,$uraian)  
	{   
		$a = $this->db->query("INSERT INTO uangmasuk (kasmasuk,tgl_uangmasuk,donatur,jumlahmasuk,uraian) VALUES('$jeniskas','$tglmasuk','$donatur','$jumlahmasuk','$uraian')");   
		$b =$this->db->query("INSERT INTO tempmasuk values('$jeniskas','$uraian','$jumlahmasuk')");
		$c = $this->db->query("INSERT INTO keuangan (tanggal,idkas,uraian,uangmasuk,uangkeluar,jumlahh) SELECT '$tglmasuk',idkasmasuk,uraian,jumlahmasuk,'0',jumlah+jumlahmasuk FROM tempmasuk JOIN jeniskas ON tempmasuk.idkasmasuk=jeniskas.kd_jeniskas");    
		$e = $this->db->query("UPDATE jeniskas, tempmasuk SET jeniskas.jumlah=jeniskas.jumlah+tempmasuk.jumlahmasuk WHERE jeniskas.kd_jeniskas=tempmasuk.idkasmasuk");   
		$d= $this->db->query("DELETE from tempmasuk where idkasmasuk='$jeniskas'"); 
		return $a ;return $b ;return $c ; return$e ; return $d;     
	  
	} 

	function ambildata($kode)
	{
		return $this->db->query("SELECT idmasuk,donatur,nama_donatur,DATE_FORMAT(tgl_uangmasuk,'%d %M %Y') AS masuktgl,idjeniskas,jeniskas,uraian,jmluang,totsemua FROM uangmasuk JOIN detailmasuk JOIN jeniskas JOIN donatur ON no_faktur=idmasuk AND idjeniskas=kd_jeniskas AND kd_donatur=donatur WHERE no_faktur='$kode'");
	}

	function tampil()
	{
		return $this->db->query("SELECT kasmasuk,jeniskas,DATE_FORMAT(tgl_uangmasuk,'%d %M %Y') AS masuktgl,donatur,nama_donatur,jumlahmasuk,uraian FROM uangmasuk JOIN jeniskas ON kasmasuk=kd_jeniskas join donatur on donatur=kd_donatur GROUP BY tgl_uangmasuk ORDER BY tgl_uangmasuk ASC");

	}
}
?>