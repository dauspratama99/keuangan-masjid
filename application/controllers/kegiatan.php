<?php

class Kegiatan extends CI_Controller 
{

    public function __construct() 
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'session'));
        $this->load->model('Modelkegiatan', 'kegiatan');
    }

     public function index()
    {
        if($this->session->userdata('masuk')==true)
        {
            $querydatakegiatan = $this->kegiatan->datakegiatan();
            $data = array(
                'tampildata' => $querydatakegiatan
            );
            $template = array(
                'menu' => $this->load->view('template/menu', '', TRUE),
                'judul' => 'Data Kegiatan',
                'konten' => $this->load->view('kegiatan/viewdata', $data, TRUE),
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

    function tampildata()
    {
        $a['judul']='Data Kegiatan';
        $data['tampil']=$this->kegiatan->datakegiatan();
        
        $a['konten']=$this->load->view('public/datakegiatan',$data,TRUE);
        $this->parser->parse('template/template1',$a);
    }
	
    public function tambah()
    {
        $template = array(
            $data['kd_kegiatan']=$this->kodekegiatan(),
            'menu' => $this->load->view('template/menu', '', TRUE),
            'judul' => 'Tambah kegiatan',
            'konten' => $this->load->view('kegiatan/formtambah', $data, TRUE),
        );
        $this->parser->parse('template/template', $template);
    }

    public function simpan() 
    {
        $querysimpandata = $this->kegiatan->simpandata();
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
            redirect('kegiatan');
        }
    }

    public function kodekegiatan()	
    {
		$this->db->select('RIGHT(kd_kegiatan,2) as kd_kegiatan', FALSE); 
        $this->db->order_by('kd_kegiatan','DESC'); 
        $this->db->limit(1); 
        $query = $this->db->get('kegiatan');  
        if($query->num_rows() <> 0){ 
            $dt = $query->row(); 
            $kd_kegiatan = intval($dt->kd_kegiatan) + 1; 
        }else{ 
            $kd_kegiatan = 1; 
        } 
        $kodemax  = str_pad($kd_kegiatan, 3, "0", STR_PAD_LEFT); 
        $kodejadi = "KG-".$kodemax;  
        return $kodejadi;
		}

    public function edit() 
    {
        $kd_kegiatan = $this->uri->segment(3);
        $queryambildata = $this->kegiatan->ambildata($kd_kegiatan);
        if ($queryambildata->num_rows() > 0) 
        {
            $baris = $queryambildata->row_array();
            $data = array(
                'kd_kegiatan' => $baris['kd_kegiatan'],
                'nama' => $baris['nama'],
                'ketua' => $baris['ketua'],
                'tanggal' => $baris['tanggal'],
                'keterangan' => $baris['keterangan'],
               
            );
        } else 
        {
            exit('Data tidak DiTemukan');
        }
        $template = array(
            'menu' => $this->load->view('template/menu', '', TRUE),
            'judul' => 'Edit Kegiatan',
            'konten' => $this->load->view('kegiatan/formedit', $data, TRUE),
        );
        $this->parser->parse('template/template', $template);
    }

    public function update() 
    {
        $kd_kegiatan = $this->input->post('kd_kegiatan', TRUE);
        $queryupdatedata = $this->kegiatan->updatedata();
        $pesan = '<div class="alert alert-success alert-dismissible">'
                . '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'
                . 'Data Berhasil di Update'
                . '</div>';
        $this->session->set_flashdata('pesan', $pesan);
        redirect('kegiatan/edit/' . $kd_kegiatan);
    }

    public function hapus() 
    {
        $kd_kegiatan= $this->uri->segment(3);
        $queryhapus = $this->kegiatan->hapusdata($kd_kegiatan);
        if ($queryhapus) 
        {
            $pesan = '<div class="alert alert-success alert-dismissible">'
                    . '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'
                    . 'Data Berhasil di Hapus'
                    . '</div>';
            $this->session->set_flashdata('pesan', $pesan);
            redirect('kegiatan/index');
        }
    }

}
