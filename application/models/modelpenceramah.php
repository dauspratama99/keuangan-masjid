<?php

class Modelpenceramah extends CI_Model 
{

    public function datapenceramah()
    {
		return $this->db->query("select * from penceramah");
        
    }

    function caripenceramah($cari)
    {

        return $this->db->query("select * from penceramah where kd_penceramah='$cari' or nama like '%$cari%' ");
    } 
  
    function simpandata() 
    {
        $kd_penceramah = $this->input->post('kd_penceramah', TRUE);
        $nama_penceramah = $this->input->post('nama_penceramah', TRUE);
        $alamat = $this->input->post('alamat', TRUE);
        $nohp = $this->input->post('nohp', TRUE);
       
        $this->form_validation->set_rules('kd_penceramah', 'Kode Penceramah', 'required', array('required' => '%s tidak boleh kosong'));
        $this->form_validation->set_rules('nama_penceramah', 'Nama Penceramah', 'required', array('required' => '%s tidak boleh kosong'));
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', array('required' => '%s tidak boleh kosong'));
        $this->form_validation->set_rules('nohp', 'No Hp', 'required', array('required' => '%s tidak boleh kosong'));
        if ($this->form_validation->run() == FALSE) 
        {
            return FALSE;
        } else 
        {
            return $this->db->query("INSERT INTO penceramah VALUES('$kd_penceramah','$nama_penceramah','$alamat','$nohp')");
        
        }
    }

    function ambildata($kd_penceramah) 
    {
        return $this->db->query("select * from penceramah where kd_penceramah= '$kd_penceramah'");
    }

    function updatedata()
    {
        $kd_penceramah = $this->input->post('kd_penceramah', TRUE);
        $nama_penceramah = $this->input->post('nama_penceramah', TRUE);
        $alamat = $this->input->post('alamat', TRUE);
        $nohp = $this->input->post('nohp', TRUE);
        return $this->db->query("UPDATE penceramah SET nama_penceramah='$nama_penceramah',alamat='$alamat',nohp='$nohp' WHERE kd_penceramah='$kd_penceramah'");
    }
    
    function hapusdata($kd_penceramah)
    {
        return $this->db->query("DELETE FROM penceramah WHERE kd_penceramah='$kd_penceramah'");
    }

}
