<?php

class Donatur extends CI_Controller 
{

    public function __construct() 
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'session'));
        $this->load->model('Modeldonatur', 'donatur');
    }


     public function index()
    {
        if($this->session->userdata('masuk')==true )
        {
            $querydatadonatur = $this->donatur->datadonatur();
            $data = array(
                'tampildata' => $querydatadonatur
            );
            $template = array(
                'menu' => $this->load->view('template/menu', '', TRUE),
                'judul' => 'Data donatur',
                'konten' => $this->load->view('donatur/viewdata', $data, TRUE),
            );
            $this->parser->parse('template/template', $template);
        }
        else
        {
            $msg = '<div class="alert alert-success alert-dismissible">'
                        . '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'
                        . 'Anda Harus Login Terlebih Dahulu'
                        . '</div>';
                $this->session->set_flashdata('msg', $msg);
                redirect('log');
        }
    }
	
    public function tambah() 
    {
        $template = array(
             $data['kd_donatur']=$this->kodedonatur(),
            'menu' => $this->load->view('template/menu', '', TRUE),
            'judul' => 'Tambah donatur',
            'konten' => $this->load->view('donatur/formtambah', $data, TRUE),
        );
        $this->parser->parse('template/template', $template);
    }

    public function kodedonatur()	{
		$this->db->select('RIGHT(kd_donatur,2) as kd_donatur', FALSE); 
        $this->db->order_by('kd_donatur','DESC'); 
        $this->db->limit(1); 
        $query = $this->db->get('donatur');  
        if($query->num_rows() <> 0){ 
            $dt = $query->row(); 
            $kd_donatur = intval($dt->kd_donatur) + 1; 
        }else{ 
            $kd_donatur = 1; 
        } 
        $kodemax  = str_pad($kd_donatur, 3, "0", STR_PAD_LEFT); 
        $kodejadi = "DNR-".$kodemax;  
        return $kodejadi;
		}

    public function simpan() 
    {
        $querysimpandata = $this->donatur->simpandata();
        if($querysimpandata == FALSE) 
        {
            $this->tambah();
        } else 
        {
            $pesan = '<div class="alert alert-success alert-dismissible">'
                    . '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'
                    . 'Data Berhasil di Simpan'
                    . '</div>';
            $this->session->set_flashdata('pesan', $pesan);
            redirect('donatur/tambah');
        }
    }

    public function edit() 
    {
        $kd_donatur = $this->uri->segment(3);
        $queryambildata = $this->donatur->ambildata($kd_donatur);
        if ($queryambildata->num_rows() > 0) 
        {
            $baris = $queryambildata->row_array();
            $data = array(
                'kd_donatur' => $baris['kd_donatur'],
                'nama_donatur' => $baris['nama_donatur'],
                'jeniskelamin' => $baris['jeniskelamin'],
                'alamat' => $baris['alamat'],
                'nohp' => $baris['nohp'],
               
            );
        } else 
        {
            exit('Data tidak DiTemukan');
        }
        $template = array(
            'menu' => $this->load->view('template/menu', '', TRUE),
            'judul' => 'Edit donatur',
            'konten' => $this->load->view('donatur/formedit', $data, TRUE),
        );
        $this->parser->parse('template/template', $template);
    }

    public function update() 
    {
        $kd_donatur = $this->input->post('kd_donatur', TRUE);
        $queryupdatedata = $this->donatur->updatedata();
        $pesan = '<div class="alert alert-success alert-dismissible">'
                . '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'
                . 'Data Berhasil di Update'
                . '</div>';
        $this->session->set_flashdata('pesan', $pesan);
        redirect('donatur/edit/' . $kd_donatur);
    }

    public function hapus() 
    {
        $kd_donatur = $this->uri->segment(3);
        $queryhapus = $this->donatur->hapusdata($kd_donatur);
        if ($queryhapus) 
        {
            $pesan = '<div class="alert alert-success alert-dismissible">'
                    . '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'
                    . 'Data Berhasil di Hapus'
                    . '</div>';
            $this->session->set_flashdata('pesan', $pesan);
            redirect('donatur/index');
        }
    }

}
