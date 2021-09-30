<?php
class Jeniskas extends CI_Controller 
{
    public function __construct() 
	{
        parent::__construct();
        $this->load->library(array('form_validation', 'session'));
        $this->load->model('Modeljeniskas', 'jeniskas');
    }

     public function index()
	{	
		if($this->session->userdata('masuk')==true)
		{
			$querydatajeniskas = $this->jeniskas->datajeniskas();
			$data = array(
            'tampildata' => $querydatajeniskas);
			$template = array(
            'menu' => $this->load->view('template/menu', '', TRUE),
            'judul' => 'Data jeniskas',
            'konten' => $this->load->view('jeniskas/viewdata', $data, TRUE),
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
            $data['kd_jeniskas']=$this->kodejeniskas(),
            'menu' => $this->load->view('template/menu', '', TRUE),
            'judul' => 'Tambah jeniskas',
            'konten' => $this->load->view('jeniskas/formtambah', $data, TRUE),
        );
        $this->parser->parse('template/template', $template);
    }

    public function kodejeniskas()	
    {
		$this->db->select('RIGHT(kd_jeniskas,2) as kd_jeniskas', FALSE); 
        $this->db->order_by('kd_jeniskas','DESC'); 
        $this->db->limit(1); 
        $query = $this->db->get('jeniskas');  
        if($query->num_rows() <> 0){ 
            $dt = $query->row(); 
            $kd_jeniskas = intval($dt->kd_jeniskas) + 1; 
        }else{ 
            $kd_jeniskas = 1; 
        } 
        $kodemax  = str_pad($kd_jeniskas, 3, "0", STR_PAD_LEFT); 
        $kodejadi = "JKS-".$kodemax;  
        return $kodejadi;
	}

    public function simpan() 
	{
        $querysimpandata = $this->jeniskas->simpandata();
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
            redirect('jeniskas/tambah');
        }
    }

    public function edit() 
	{
        $idkas = $this->uri->segment(3);
        $queryambildata = $this->jeniskas->ambildata($idkas);
        if ($queryambildata->num_rows() > 0) 
		{
            $baris = $queryambildata->row_array();
            $data = array(
                'kd_jeniskas' => $baris['kd_jeniskas'],
                'jeniskas' => $baris['jeniskas'],
                'jumlah' => $baris['jumlah'],);
        } 
		else 
		{
            exit('Data tidak DiTemukan');
        }
        $template = array(
            'menu' => $this->load->view('template/menu', '', TRUE),
            'judul' => 'Edit jeniskas',
            'konten' => $this->load->view('jeniskas/formedit', $data, TRUE),
        );
        $this->parser->parse('template/template', $template);
    }

    public function update() 
	{
        $kd_jeniskas = $this->input->post('kd_jeniskas', TRUE);
        $queryupdatedata = $this->jeniskas->updatedata();
        $pesan = '<div class="alert alert-success alert-dismissible">'
                . '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'
                . 'Data Berhasil di Update'
                . '</div>';
        $this->session->set_flashdata('pesan', $pesan);
        redirect('jeniskas/edit/' . $kd_jeniskas);
    }

    public function hapus() 
	{
        $kd_jeniskas = $this->uri->segment(3);
        $queryhapus = $this->jeniskas->hapusdata($kd_jeniskas);
        if ($queryhapus) 
		{
            $pesan = '<div class="alert alert-success alert-dismissible">'
                    . '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'
                    . 'Data Berhasil di Hapus'
                    . '</div>';
            $this->session->set_flashdata('pesan', $pesan);
            redirect('jeniskas/index');
        }
    }

}
