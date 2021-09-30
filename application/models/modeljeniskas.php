<?php

class Modeljeniskas extends CI_Model 
{

    public function datajeniskas()
	{
        return $this->db->get('jeniskas');
    }

    function simpandata() 
	{
        $kd_jeniskas = $this->input->post('kd_jeniskas', TRUE);
        $jeniskas = $this->input->post('jeniskas', TRUE);
        $jumlah = $this->input->post('jumlah', TRUE);
        
       
        $this->form_validation->set_rules('kd_jeniskas', 'ID Kas', 'required', array('required' => '%s tidak boleh kosong'));
        $this->form_validation->set_rules('jeniskas', 'Jenis Kas', 'required', array('required' => '%s tidak boleh kosong'));
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required', array('required' => '%s tidak boleh kosong'));
        
        if ($this->form_validation->run() == FALSE)
		{
            return FALSE;
        } else 
		{
            return $this->db->query("INSERT INTO jeniskas VALUES('$kd_jeniskas','$jeniskas','$jumlah')");
        }
    }

    function ambildata($kd_jeniskas) 
	{
        return $this->db->query("select * from jeniskas where kd_jeniskas = '$kd_jeniskas'");
    }

    function updatedata() 
	{
        $kd_jeniskas = $this->input->post('kd_jeniskas', TRUE);
        $jeniskas = $this->input->post('jeniskas', TRUE);
        $jumlah = $this->input->post('jumlah', TRUE);
        return $this->db->query("UPDATE jeniskas SET jeniskas='$jeniskas',jumlah='$jumlah' WHERE kd_jeniskas='$kd_jeniskas'");
    }
    
    function hapusdata($kd_jeniskas)
	{
        return $this->db->query("DELETE FROM jeniskas WHERE kd_jeniskas='$kd_jeniskas'");
    }

}
