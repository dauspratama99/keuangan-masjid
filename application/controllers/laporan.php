<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Laporan extends CI_controller
{ 
	function __Construct() 
	{ 
		parent :: __Construct(); 
		$this->load->model('modellaporan'); 
		$this->load->model('modeljeniskas'); 
		$this->load->helper(array('form','url')); 
	} 

	function keuangan()
	{
		$data['jeniskas']=$this->modeljeniskas->datajeniskas();
		$a['judul']="Cetak Per Periode";
		$a['menu']=$this->load->view('template/menu','',TRUE);
		$a['konten']=$this->load->view('laporan/menutanggal5',$data,TRUE);
		$this->parser->parse('template/template',$a);
	}

	function lap_keuangan()
	{
		$tgl1 =$this->input->post('tglawal');
		$tgl2 = $this->input->post('tglakhir');
		$tglawal= date("Y-m-d",strtotime($tgl1));
		$tglakhir= date("Y-m-d",strtotime($tgl2));
		$data['awal'] =$this->input->post('tglawal');
		$data['akhir'] =$this->input->post('tglakhir');
		$data['judul']='Laporan Keuangan Periode';
		$data['data']=$this->modellaporan->lap_keuangan_periode($tglawal,$tglakhir);
		$data['judul']="Cetak Per Periode";
		$this->load->view('laporan/laporankeuangan',$data);
	}

	function lap_keuanganjenis()
	{
		$jenis=$this->input->post('jeniskas');
		$tgl1 =$this->input->post('tglawal1');
		$tgl2 = $this->input->post('tglakhir1');
		$tglawal1= date("Y-m-d",strtotime($tgl1));
		$tglakhir1= date("Y-m-d",strtotime($tgl2));
		$data['awal'] =$this->input->post('tglawal1');
		$data['akhir'] =$this->input->post('tglakhir1');
		$data['jeniskas'] =$this->input->post('jeniskas');
		$data['judul']='Laporan Keuangan Berdasarkan jenis Kas';
		$data['data']=$this->modellaporan->lap_keuanganjenis_periode($tglawal1,$tglakhir1,$jenis);
		$data['judul']="Cetak Per Periode";
		$this->load->view('laporan/laporankeuanganjenis',$data);
	}
	
	function uangmasuk()
	{
		$data['jeniskas']=$this->modeljeniskas->datajeniskas();
		$a['judul']="Cetak Per Periode";
		$a['menu']=$this->load->view('template/menu','',TRUE);
		$a['konten']=$this->load->view('laporan/menutanggal1',$data,TRUE);
		$this->parser->parse('template/template',$a);
	}

	function lap_uangmasuk()
	{
		$tgl1 =$this->input->post('tglawal');
		$tgl2 = $this->input->post('tglakhir');
		$tglawal= date("Y-m-d",strtotime($tgl1));
		$tglakhir= date("Y-m-d",strtotime($tgl2));
		$data['awal'] =$this->input->post('tglawal');
		$data['akhir'] =$this->input->post('tglakhir');
		$data['judul']='Laporan Uang Masuk Periode';
		$data['data']=$this->modellaporan->lap_uangmasuk_periode($tglawal,$tglakhir);
		$this->load->view('laporan/laporanuangmasuk',$data);
	}

	function lap_uangmasukjenis()
	{
		$jenis=$this->input->post('jeniskas');
		$tgl1 =$this->input->post('tglawal1');
		$tgl2 = $this->input->post('tglakhir1');
		$tglawal1= date("Y-m-d",strtotime($tgl1));
		$tglakhir1= date("Y-m-d",strtotime($tgl2));
		$data['awal'] =$this->input->post('tglawal1');
		$data['akhir'] =$this->input->post('tglakhir1');
		$data['jeniskas'] =$this->modeljeniskas->datajeniskas();
		$data['judul']='Laporan Uang Masuk Periode';
		$data['data']=$this->modellaporan->lap_uangmasukjenis_periode($tglawal1,$tglakhir1,$jenis);
		$this->load->view('laporan/laporanuangmasukjenis',$data);
	}

	function uangkeluar()
	{
		$data['jeniskas']=$this->modeljeniskas->datajeniskas();
		$a['judul']="Cetak Per Periode";
		$a['menu']=$this->load->view('template/menu','',TRUE);
		$a['konten']=$this->load->view('laporan/menutanggal2',$data,TRUE);
		$this->parser->parse('template/template',$a);
	}

	function lap_uangkeluarjenis()
	{
		$jenis=$this->input->post('jeniskas');
		$tgl1 =$this->input->post('tglawal1');
		$tgl2 = $this->input->post('tglakhir1');
		$tglawal1= date("Y-m-d",strtotime($tgl1));
		$tglakhir1= date("Y-m-d",strtotime($tgl2));
		$data['awal'] =$this->input->post('tglawal1');
		$data['akhir'] =$this->input->post('tglakhir1');
		$data['jeniskas'] =$this->input->post('jeniskas');
		$data['judul']='Laporan Uang Keluar Periode';
		$data['data']=$this->modellaporan->lap_uangkeluarjenis_periode($tglawal1,$tglakhir1,$jenis);
		$this->load->view('laporan/laporanuangkeluarjenis',$data);
	}

	function lap_uangkeluar()
	{
		$tgl1 =$this->input->post('tglawal');
		$tgl2 = $this->input->post('tglakhir');
		$tglawal= date("Y-m-d",strtotime($tgl1));
		$tglakhir= date("Y-m-d",strtotime($tgl2));
		$data['awal'] =$this->input->post('tglawal');
		$data['akhir'] =$this->input->post('tglakhir');
		$data['judul']='Laporan Uang Keluar Periode';
		$data['data']=$this->modellaporan->lap_uangkeluar_periode($tglawal,$tglakhir);
		$this->load->view('laporan/laporanuangkeluar',$data);
	}

	function jadwalceramah()
	{
		$a['judul']="Cetak Per Periode";
		$a['menu']=$this->load->view('template/menu','',TRUE);
		$a['konten']=$this->load->view('laporan/menutanggal3','',TRUE);
		$this->parser->parse('template/template',$a);
	}

	function lap_jadwalceramah()
	{
		$data['judul']='Laporan Jadwal Ceramah Periode';
		$data['data']=$this->modellaporan->lap_jadwalceramah_periode();
		$this->load->view('laporan/laporanjadwalceramah',$data);
	}

	function lap_jadwalceramahbulan()
	{
		$bulan =$this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$data['bulan'] =$this->input->post('bulan');
		$data['tahun'] =$this->input->post('tahun');
		$data['judul']='Laporan Jadwal Ceramah Perbulan';
		$data['data']=$this->modellaporan->lap_jadwalceramahbulan($bulan,$tahun);
		$this->load->view('laporan/laporanjadwalceramahbulan',$data);
	}

	function lap_jadwalceramahtahun()
	{
		
		$tahun = $this->input->post('tahun');
		$data['tahun'] =$this->input->post('tahun');
		$data['judul']='Laporan Jadwal Ceramah Pertahun';
		$data['data']=$this->modellaporan->lap_jadwalceramahtahun($tahun);
		$this->load->view('laporan/laporanjadwalceramahtahun',$data);
	}

	function lap_jadwalceramahminggu()
	{
		$bulan =$this->input->post('bulan');
		$minggu =$this->input->post('minggu');
		$tahun = $this->input->post('tahun');
		$data['minggu'] =$this->input->post('minggu');
		$data['bulan'] =$this->input->post('bulan');
		$data['tahun'] =$this->input->post('tahun');
		$data['judul']='Laporan Jadwal Ceramah Perminggu';
		$data['data']=$this->modellaporan->lap_jadwalceramahminggu($minggu,$bulan,$tahun);
		$this->load->view('laporan/laporanjadwalceramahminggu',$data);
	}


	function kegiatan()
	{
		$a['judul']="Cetak Per Periode";
		$a['menu']=$this->load->view('template/menu','',TRUE);
		$a['konten']=$this->load->view('laporan/menutanggal4','',TRUE);
		$this->parser->parse('template/template',$a);
	}

	function lap_kegiatan()
	{
		$tgl1 =$this->input->post('tglawal');
		$tgl2 = $this->input->post('tglakhir');
		$tglawal= date("Y-m-d",strtotime($tgl1));
		$tglakhir= date("Y-m-d",strtotime($tgl2));
		$data['awal'] =$this->input->post('tglawal');
		$data['akhir'] =$this->input->post('tglakhir');
		$data['judul']='Laporan Kegiatan Periode';
		$data['data']=$this->modellaporan->lap_kegiatan_periode($tglawal,$tglakhir);
		$this->load->view('laporan/laporankegiatan',$data);
	}

	function lap_donatur()
	{
		
		$data['judul']='Laporan Donatur';
		$data['data']=$this->modellaporan->lap_donatur();
		$this->load->view('laporan/laporandonatur',$data);
	}

	function lap_penceramah()
	{
		
		$data['judul']='Laporan Penceramah';
		$data['data']=$this->modellaporan->lap_penceramah();
		$this->load->view('laporan/laporanpenceramah',$data);
	}

	function lap_pengurus()
	{
		
		$data['judul']='Laporan Pengurus';
		$data['data']=$this->modellaporan->lap_pengurus();
		$this->load->view('laporan/laporanpengurus',$data);
	}

}