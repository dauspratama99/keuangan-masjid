<?php

class Modelkeuangan extends CI_Model 
{

    public function tampil()
    {
        return $this->db->query("SELECT DATE_FORMAT(tanggal,'%d %M %Y') AS tgl,jeniskas,uraian,uangmasuk,uangkeluar,jumlahh FROM keuangan join jeniskas on idkas=kd_jeniskas order by tanggal asc");
    }
    
}
?>
