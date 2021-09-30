<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modeluangkeluar extends CI_Model
{

    function datajeniskas()
    {
        return $this->db->query("SELECT kd_jeniskas,jeniskas from jeniskas where kd_jeniskas NOT IN(select idkaskeluar from tempkeluar)");
    }

    function datatemp()
    {
        return $this->db->query("SELECT idkaskeluar,jeniskas,uraian,jumlahkeluar from tempkeluar join jeniskas on tempkeluar.idkaskeluar=jeniskas.kd_jeniskas");
    }

    function hapustmp($kode)  
    {   
        return $this->db->query("DELETE from tempkeluar where idkaskeluar='$kode'"); 
    } 
 
 
    function smptemp($id,$uraian,$jml)  
    {   
        return $this->db->query("INSERT into tempkeluar values('$id','$uraian','$jml')");  
    }

    function simpan($kaskeluar,$tanggal,$jumlah,$uraian)  
    {   
       $a = $this->db->query("INSERT INTO uangkeluar (kaskeluar,tanggal,jumlah,uraian) VALUES ('$kaskeluar','$tanggal','$jumlah','$uraian')");   
		$b =$this->db->query("INSERT INTO tempkeluar values('$kaskeluar','$uraian','$jumlah')");
		$c = $this->db->query("INSERT INTO keuangan (tanggal,idkas,uraian,uangmasuk,uangkeluar,jumlahh) SELECT '$tanggal',idkaskeluar,uraian,'0',tempkeluar.jumlahkeluar,jumlah-tempkeluar.jumlahkeluar FROM tempkeluar JOIN jeniskas ON tempkeluar.idkaskeluar=jeniskas.kd_jeniskas");    
		$e = $this->db->query("UPDATE jeniskas, tempkeluar SET jeniskas.jumlah=jeniskas.jumlah-tempkeluar.jumlahkeluar WHERE jeniskas.kd_jeniskas=tempkeluar.idkaskeluar");   
		$d= $this->db->query("DELETE from tempkeluar where idkaskeluar='$kaskeluar'"); 
		return $a ;return $b ;return $c ; return$e ; return $d;  
    } 

    function ambildata($kode)
    {
        return $this->db->query("SELECT kd_ukeluar,DATE_FORMAT(tanggal,'%d %M %Y') AS keluartgl,jeniskas,uraian,uangkeluar.jumlah FROM uangkeluar JOIN jeniskas  ON kaskeluar=kd_jeniskas WHERE kd_ukeluar='$kode'");
    }

    function tampil()
    {
        return $this->db->query("SELECT kd_ukeluar,kaskeluar,DATE_FORMAT(tanggal,'%d-%m-%Y')AS keluartgl,uangkeluar.jumlah,uraian FROM uangkeluar join jeniskas on kaskeluar=kd_jeniskas GROUP BY kd_ukeluar ORDER BY keluartgl DESC");

    }
}
?>