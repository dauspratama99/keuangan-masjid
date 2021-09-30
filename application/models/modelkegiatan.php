<?php

class Modelkegiatan extends CI_Model 
{

    public function datakegiatan()
    {
        return $this->db->query("select * from kegiatan");
    }

    function simpandata() 
    {
        $kd_kegiatan = $this->input->post('kd_kegiatan', TRUE);
        $nama= $this->input->post('nama', TRUE);
        $ketua = $this->input->post('ketua', TRUE);
        $tanggal = $this->input->post('tanggal', TRUE);
        $keterangan = $this->input->post('keterangan', TRUE);
       
        $this->form_validation->set_rules('kd_kegiatan', 'ID kegiatan', 'required', array('required' => '%s tidak boleh kosong'));
        $this->form_validation->set_rules('nama', 'Nama kegiatan', 'required', array('required' => '%s tidak boleh kosong'));
        $this->form_validation->set_rules('ketua', 'Ketua', 'required', array('required' => '%s tidak boleh kosong'));
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required', array('required' => '%s tidak boleh kosong'));
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required', array('required' => '%s tidak boleh kosong'));
      
        if ($this->form_validation->run() == FALSE) 
        {
            return FALSE;
        } else 
        {
            return $this->db->query("INSERT INTO kegiatan VALUES('$kd_kegiatan','$nama','$ketua','$tanggal','$keterangan')");
        }
    }

    function ambildata($kd_kegiatan) 
    {
        return $this->db->query("select * from kegiatan where kd_kegiatan = '$kd_kegiatan'");
    }

    function updatedata() 
    {
        $kd_kegiatan = $this->input->post('kd_kegiatan', TRUE);
        $nama= $this->input->post('nama', TRUE);
        $ketua = $this->input->post('ketua', TRUE);
        $tanggal = $this->input->post('tanggal', TRUE);
        $keterangan = $this->input->post('keterangan', TRUE);
       
        return $this->db->query("UPDATE kegiatan SET nama='$nama',ketua='$ketua',tanggal='$tanggal',keterangan='$keterangan' WHERE kd_kegiatan='$kd_kegiatan'");
    }
    
    function hapusdata($kd_kegiatan)
    {
        return $this->db->query("DELETE FROM kegiatan WHERE kd_kegiatan='$kd_kegiatan'");
    }

}
