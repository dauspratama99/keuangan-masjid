<?php

class Modeldonatur extends CI_Model 
{

    public function datadonatur()
    {
        return $this->db->query("select * from donatur");
    }

    function simpandata() 
    {
        $kd_donatur = $this->input->post('kd_donatur', TRUE);
        $nama_donatur = $this->input->post('nama_donatur', TRUE);
        $jeniskelamin = $this->input->post('jeniskelamin', TRUE);
        $alamat = $this->input->post('alamat', TRUE);
        $nohp = $this->input->post('nohp', TRUE);
       
        $this->form_validation->set_rules('kd_donatur', 'ID donatur', 'required', array('required' => '%s tidak boleh kosong'));
        $this->form_validation->set_rules('nama_donatur', 'Nama donatur', 'required', array('required' => '%s tidak boleh kosong'));
        $this->form_validation->set_rules('jeniskelamin', 'Jenis Kelamin', 'required', array('required' => '%s tidak boleh kosong'));
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', array('required' => '%s tidak boleh kosong'));
        $this->form_validation->set_rules('nohp', 'No Hp', 'required', array('required' => '%s tidak boleh kosong'));
       
        if ($this->form_validation->run() == FALSE) 
        {
            return FALSE;
        } else 
        {
            return $this->db->query("INSERT INTO donatur VALUES('$kd_donatur','$nama_donatur','$jeniskelamin','$alamat','$nohp')");
        }
    }

    function ambildata($kd_donatur) 
    {
        return $this->db->query("select * from donatur where kd_donatur = '$kd_donatur'");
    }

    function updatedata() 
    {
        $kd_donatur = $this->input->post('kd_donatur', TRUE);
        $nama_donatur = $this->input->post('nama_donatur', TRUE);
        $jeniskelamin = $this->input->post('jeniskelamin', TRUE);
        $alamat = $this->input->post('alamat', TRUE);
        $nohp = $this->input->post('nohp', TRUE);
       
        return $this->db->query("UPDATE donatur SET nama_donatur='$nama_donatur',jeniskelamin='$jeniskelamin',alamat='$alamat',nohp='$nohp' WHERE kd_donatur='$kd_donatur'");
    }
    
    function hapusdata($kd_donatur)
    {
        return $this->db->query("DELETE FROM donatur WHERE kd_donatur='$kd_donatur'");
    }

}
