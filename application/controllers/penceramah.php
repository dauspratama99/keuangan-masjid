<?php

class Penceramah extends CI_Controller 
{

    public function __construct() 
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'session'));
        $this->load->model('Modelpenceramah', 'penceramah');
    }

     public function index()
    {
        if($this->session->userdata('masuk')==true)
        {
        $querydatapenceramah = $this->penceramah->datapenceramah();
            $data = array(
                'tampildata' => $querydatapenceramah
            );

                

            $template = array(
                'menu' => $this->load->view('template/menu', '', TRUE),
                'judul' => 'Data Penceramah',
                'konten' => $this->load->view('penceramah/viewdata', $data, TRUE),
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
            $data['kd_penceramah']=$this->kodepenceramah(),
            'menu' => $this->load->view('template/menu', '', TRUE),
            'judul' => 'Tambah Penceramah',
            'konten' => $this->load->view('penceramah/formtambah', $data, TRUE),
        );
        $this->parser->parse('template/template', $template);
    }

    public function kodepenceramah()	
    {
		$this->db->select('RIGHT(kd_penceramah,2) as kd_penceramah', FALSE); 
        $this->db->order_by('kd_penceramah','DESC'); 
        $this->db->limit(1); 
        $query = $this->db->get('penceramah');  
        if($query->num_rows() <> 0){ 
            $dt = $query->row(); 
            $kd_penceramah = intval($dt->kd_penceramah) + 1; 
        }else{ 
            $kd_kegiatan = 1; 
        } 
        $kodemax  = str_pad($kd_penceramah, 3, "0", STR_PAD_LEFT); 
        $kodejadi = "PC-".$kodemax;  
        return $kodejadi;
		}

    public function simpan() 
    {
        $querysimpandata = $this->penceramah->simpandata();
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
            redirect('penceramah/tambah');
        }
    }

    public function edit()
    {
        $kd_penceramah = $this->uri->segment(3);
        $queryambildata = $this->penceramah->ambildata($kd_penceramah);
        if ($queryambildata->num_rows() > 0) 
        {
            $baris = $queryambildata->row_array();
            $data = array(
                'kd_penceramah' => $baris['kd_penceramah'],
                'nama_penceramah' => $baris['nama_penceramah'],
                'alamat' => $baris['alamat'],
                'nohp' => $baris['nohp'],
               
            );
        } else 
        {
            exit('Data tidak DiTemukan');
        }
        $template = array(
            'menu' => $this->load->view('template/menu', '', TRUE),
            'judul' => 'Edit Penceramah',
            'konten' => $this->load->view('penceramah/formedit', $data, TRUE),
        );
        $this->parser->parse('template/template', $template);
    }

    public function update() 
    {
        $kd_penceramah = $this->input->post('kd_penceramah', TRUE);
        $queryupdatedata = $this->penceramah->updatedata();
        $pesan = '<div class="alert alert-success alert-dismissible">'
                . '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'
                . 'Data Berhasil di Update'
                . '</div>';
        $this->session->set_flashdata('pesan', $pesan);
        redirect('penceramah/edit/' . $kd_penceramah);
    }

    public function hapus()
    {
        $kd_penceramah = $this->uri->segment(3);
        $queryhapus = $this->penceramah->hapusdata($kd_penceramah);
        if ($queryhapus) 
        {
            $pesan = '<div class="alert alert-success alert-dismissible">'
                    . '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'
                    . 'Data Berhasil di Hapus'
                    . '</div>';
            $this->session->set_flashdata('pesan', $pesan);
            redirect('penceramah/index');
        }
    }

}
