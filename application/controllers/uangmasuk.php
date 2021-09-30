<?php
defined('BASEPATH') OR exit ('no directnscript access allowed');

class Uangmasuk extends CI_Controller 
{

    function __construct()
     {

        parent:: __Construct();

        $this->load->model('modeluangmasuk');
         $this->load->model('modeldonatur');
        
      
    }

    function detail()
    {
        $kode=$this->uri->segment(3);
        $x['ambildata']=$this->modeluangmasuk->ambildata($kode);
        $a['judul']= 'Detail Uang Masuk';
        $a['menu']=$this->load->view('template/menu','',TRUE);
        $a['konten']=$this->load->view('uangmasuk/viewdetail',$x,true);
        $this->parser->parse('template/template',$a);
    }

    public function index()
    {
        $a['judul']      = 'Input uang Masuk';
        $d['jeniskas'] =$this->modeluangmasuk->datajeniskas();
        $d['datadonatur'] =$this->modeldonatur->datadonatur();
        $a['menu']=$this->load->view('template/menu','',TRUE);
        $a['konten']=$this->load->view('uangmasuk/formtambah',$d,true);
        $this->parser->parse('template/template',$a);
    }

   
    function data()
    {
        $a['judul']='Uang Masuk';
        $data['tampil']=$this->modeluangmasuk->tampil();
        $a['menu']=$this->load->view('template/menu','',TRUE);
        $a['konten']=$this->load->view('uangmasuk/viewdata',$data,TRUE);
        $this->parser->parse('template/template',$a);
    }
        public function edit() 
        {
        $kd_masuk = $this->uri->segment(3);
        $queryambildata = $this->uangmasuk->ambildata($kd_masuk);
        if ($queryambildata->num_rows() > 0) 
        {
            $baris = $queryambildata->row_array();
            $data = array(
                'kd_masuk' => $baris['kd_masuk'],
                'kasmasuk' => $baris['kasmasuk'],
                'tgl_uangmasuk' => $baris['tgluangmasuk'],
                'donatur' => $baris['donatur'],
                'donatur' => $baris['nama_donatur'],
                'jumlahmasuk' => $baris['jumlahmasuk'],
                'uraian' => $baris['uraian'],
               
            );
        } else 
        {
            exit('Data tidak DiTemukan');
        }
        $template = array(
            'menu' => $this->load->view('template/menu', '', TRUE),
            'judul' => 'Edit Uang Masuk',
            'konten' => $this->load->view('uangmasuk/formedit', $data, TRUE),
        );
        $this->parser->parse('template/template', $template);
    }
    function simpantransaksi()
    {
        $jeniskas=$this->input->post('jeniskas');
        $date=$this->input->post('tgluangmasuk');
        $tglmasuk=date("Y-m-d",strtotime($date));
        $donatur=$this->input->post('kd_donatur');
        $jumlahmasuk=$this->input->post('jumlahmasuk');
        $uraian=$this->input->post('uraian');     
        $this->modeluangmasuk->simpan($jeniskas,$tglmasuk,$donatur,$jumlahmasuk,$uraian);
        redirect('uangmasuk');
    }

    

    function hapus($kd_masuk)
    {   
        $this->modeluangmasuk->hapustmp($kode);   
        redirect('uangmasuk');  
    } 
 
}
?>
       