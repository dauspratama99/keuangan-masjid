<?php

class Modelpengurus extends CI_Model
{

    public function datapengurus()
    {
		return $this->db->query("select * from pengurus");
        
    }

    function caripengurus($cari)
    {

        return $this->db->query("select * from pengurus where kd_pengurus='$cari' or nama like '%$cari%' ");
    } 
  
    function simpandata() 
    {
        $kd_pengurus = $this->input->post('kd_pengurus', TRUE);
        $nama = $this->input->post('nama', TRUE);
	    $jabatan = $this->input->post('jabatan', TRUE);
        $alamat = $this->input->post('alamat', TRUE);
        $nohp = $this->input->post('nohp', TRUE);
       
        $this->form_validation->set_rules('kd_pengurus', 'Kode pengurus', 'required', array('required' => '%s tidak boleh kosong'));
        $this->form_validation->set_rules('nama', 'Nama pengurus', 'required', array('required' => '%s tidak boleh kosong'));
		$this->form_validation->set_rules('jabatan', 'jabatan', 'required', array('required' => '%s tidak boleh kosong'));
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', array('required' => '%s tidak boleh kosong'));
        $this->form_validation->set_rules('nohp', 'No Hp', 'required', array('required' => '%s tidak boleh kosong'));
        
        if ($this->form_validation->run() == FALSE)
        {
            return FALSE;
        } else 
        {
            return $this->db->query("INSERT INTO pengurus VALUES('$kd_pengurus','$nama','$jabatan','$alamat','$nohp')");
        }
    }

    function ambildata($kd_pengurus) 
    {
        return $this->db->query("select * from pengurus where kd_pengurus= '$kd_pengurus'");
    }

    function updatedata() 
    {
        $kd_pengurus = $this->input->post('kd_pengurus', TRUE);
        $nama = $this->input->post('nama', TRUE);
		$jabatan = $this->input->post('jabatan', TRUE);
        $alamat = $this->input->post('alamat', TRUE);
        $nohp = $this->input->post('nohp', TRUE);
        return $this->db->query("UPDATE pengurus SET nama='$nama',jabatan='$jabatan',alamat='$alamat',nohp='$nohp' WHERE kd_pengurus='$kd_pengurus'");
    }
    
    function hapusdata($kd_pengurus)
    {
        return $this->db->query("DELETE FROM pengurus WHERE kd_pengurus='$kd_pengurus'");
    }

}
