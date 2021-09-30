  <?php
defined('BASEPATH') OR exit ('no directnscript access allowed');

class template extends CI_Controller 
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
        $a['menu']=$this->load->view('template/menu','',TRUE);
        $a['konten']=$this->load->view('template/beranda',$data,true);
        $this->parser->parse('template/template',$a);  
    }
   
}
?>
       