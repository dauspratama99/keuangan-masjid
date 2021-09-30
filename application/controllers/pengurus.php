<?php

class Pengurus extends CI_Controller
{

    public function __construct() 
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'session'));
        $this->load->model('Modelpengurus', 'pengurus');
    }

     public function index()
    {
        if($this->session->userdata('masuk')==true)
        {
        $querydatapengurus = $this->pengurus->datapengurus();
            $data = array(
                'tampildata' => $querydatapengurus
            );

                

            $template = array(
                'menu' => $this->load->view('template/menu', '', TRUE),
                'judul' => 'Data pengurus',
                'konten' => $this->load->view('pengurus/viewdata', $data, TRUE),
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
            $data['kd_pengurus']=$this->kodepengurus(),
            'menu' => $this->load->view('template/menu', '', TRUE),
            'judul' => 'Tambah pengurus',
            'konten' => $this->load->view('pengurus/formtambah', $data , TRUE),
        );
        $this->parser->parse('template/template', $template);
    }

    public function kodepengurus()	
    {
		$this->db->select('RIGHT(kd_pengurus,2) as kd_pengurus', FALSE); 
        $this->db->order_by('kd_pengurus','DESC'); 
        $this->db->limit(1); 
        $query = $this->db->get('pengurus');  
        if($query->num_rows() <> 0){ 
            $dt = $query->row(); 
            $kd_pengurus = intval($dt->kd_pengurus) + 1; 
        }else{ 
            $kd_kegiatan = 1; 
        } 
        $kodemax  = str_pad($kd_pengurus, 3, "0", STR_PAD_LEFT); 
        $kodejadi = "PR-".$kodemax;  
        return $kodejadi;
		}
    public function simpan() 
    {
        $querysimpandata = $this->pengurus->simpandata();
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
            redirect('pengurus/tambah');
        }
    }

    public function edit() 
    {
        $kd_pengurus = $this->uri->segment(3);
        $queryambildata = $this->pengurus->ambildata($kd_pengurus);
        if ($queryambildata->num_rows() > 0) 
        {
            $baris = $queryambildata->row_array();
            $data = array(
                'kd_pengurus' => $baris['kd_pengurus'],
                'nama' => $baris['nama'],
                'jabatan' => $baris['jabatan'],
                'alamat' => $baris['alamat'],
                'nohp' => $baris['nohp'],
               
            );
        } else 
        {
            exit('Data tidak DiTemukan');
        }
        $template = array(
            
            'menu' => $this->load->view('template/menu', '', TRUE),
            'judul' => 'Edit pengurus',
            'konten' => $this->load->view('pengurus/formedit', $data, TRUE),
        );
        $this->parser->parse('template/template', $template);
    }

    public function update() 
    {
        $kd_pengurus = $this->input->post('kd_pengurus', TRUE);
        $queryupdatedata = $this->pengurus->updatedata();
        $pesan = '<div class="alert alert-success alert-dismissible">'
                . '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'
                . 'Data Berhasil di Update'
                . '</div>';
        $this->session->set_flashdata('pesan', $pesan);
        redirect('pengurus/edit/' . $kd_pengurus);
    }

    public function hapus() 
    {
        $kd_pengurus = $this->uri->segment(3);
        $queryhapus = $this->pengurus->hapusdata($kd_pengurus);
        if ($queryhapus) 
        {
            $pesan = '<div class="alert alert-success alert-dismissible">'
                    . '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'
                    . 'Data Berhasil di Hapus'
                    . '</div>';
            $this->session->set_flashdata('pesan', $pesan);
            redirect('pengurus/index');
        }
    }

}
