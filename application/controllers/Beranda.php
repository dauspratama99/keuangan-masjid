<?php
defined('BASEPATH') OR exit ('no directnscript access allowed');

class Beranda extends CI_Controller 
{

    function __construct()
    {

        parent:: __Construct();

        $this->load->model('modelkeuangan');
      
    }

    public function index()
    {
        $a['judul']      = 'Selamat Datang';
        $data['tampil']=$this->modelkeuangan->tampil();
        
        $a['konten']=$this->load->view('template/beranda1',$data,true);
        $this->parser->parse('template/template1',$a);  
    }
   
}
?>