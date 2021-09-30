<?php
defined('BASEPATH') OR exit ('no directnscript access allowed');

class uangkeluar extends CI_Controller 
{

    function __construct()
     {

        parent:: __Construct();

        $this->load->model('modeluangkeluar');
        
      
    }

    function detail()
    {
        $kode=$this->uri->segment(3);
        $x['ambildata']=$this->modeluangkeluar->ambildata($kode);
        $a['judul']= 'Detail uangkeluar Barang';
        $a['menu']=$this->load->view('template/menu','',TRUE);
        $a['konten']=$this->load->view('uangkeluar/viewdetail',$x,true);
        $this->parser->parse('template/template',$a);
    }

    public function index()
    {
        $a['judul']      = 'Input uang keluar';
        $d['datajeniskas'] =$this->modeluangkeluar->datajeniskas();
        $d['datatemp']   =$this->modeluangkeluar->datatemp();
   
        $a['menu']=$this->load->view('template/menu','',TRUE);
        $a['konten']=$this->load->view('uangkeluar/formtambah',$d,true);
        $this->parser->parse('template/template',$a);
    }

   
    function data()
    {
        $a['judul']='uangkeluar';
        $data['tampil']=$this->modeluangkeluar->tampil();
        $a['menu']=$this->load->view('template/menu','',TRUE);
        $a['konten']=$this->load->view('uangkeluar/data',$data,TRUE);
        $this->parser->parse('template/template',$a);
    }

    function simpantransaksi()
    {
        $kaskeluar=$this->input->post('kaskeluar');
        $date=$this->input->post('tanggal');
        $tanggal=date("Y-m-d",strtotime($date));
        $jumlah=$this->input->post('jumlah');
        $uraian=$this->input->post('uraian');
        $this->modeluangkeluar->simpan($kaskeluar,$tanggal,$jumlah,$uraian);
        redirect('uangkeluar');
    }

    function simpantemp()  
    {   
        $id  = $this->input->post('idkas',true);   
        $uraian  = $this->input->post('uraian',true);   
        $jml  = $this->input->post('jumlah',true);   
          
        $this->modeluangkeluar->smptemp($id,$uraian,$jml);     
    } 

    function hapusitem($kode)
    {   
        $this->modeluangkeluar->hapustmp($kode);   
        redirect('uangkeluar');  
    } 
 
}
?>
       