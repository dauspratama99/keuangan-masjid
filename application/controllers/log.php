<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller
{

	public function __construct()
	{
        parent::__construct();
		$this->load->library(array('form_validation','session'));

		$this->load->model('Login');
	}
	
	function index()
	{
		$this->load->view('login/vlogin');

	}

	function masuk()
	{
		$nama = strip_tags(str_replace("'","",$this->input->post('un',true)));
		$pass = strip_tags(str_replace("'","",$this->input->post('ps',true)));
		$cekakun = $this->Login->in($nama,$pass);
		if(strlen($nama)==''||strlen($pass)=='')
		{
			$this->session->set_flashdata('msg','Username atau Password anda tidak boleh kosong');
			$url=base_url();redirect($url);
		}
		else
		{
			if($cekakun->num_rows()> 0)
			{
				$rcekuser=$cekakun->row_array();
				$this->session->set_userdata('masuk',TRUE);
				$this->session->set_userdata('status_login','oke');
				$this->session->set_userdata('iduser',$rcekuser['iduser']);
				$this->session->set_userdata('nama',$rcekuser['nama']);
				$this->session->set_userdata('pass',$rcekuser['pass']);
				$this->session->set_userdata('hakakses',$rcekuser['hakakses']);

			}
			else
			{
				$this->session->set_userdata('masuk',FALSE);
			}
		}
		if($this->session->userdata('masuk')==TRUE)
		{
			$nama=$this->session->userdata('nama');
			redirect('template');
		}
		else
		{
			$this->session->set_flashdata('msg','Periksa kembali username dan password anda');
			$url=base_url();
			redirect($url);
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		$url=base_url();
		redirect($url);
	}
}








