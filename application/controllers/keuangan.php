  <?php
defined('BASEPATH') OR exit ('no directnscript access allowed');

class keuangan extends CI_Controller 
{

    function __construct()
     {

        parent:: __Construct();

        $this->load->model('modelkeuangan');
      
    }

    public function index()
    {
   

        $a['judul']      = 'Data Keuangan';
        $data['tampil']=$this->modelkeuangan->tampil();
        
        $a['konten']=$this->load->view('public/datakeuangan',$data,true);
        $this->parser->parse('template/template1',$a);
   
    }
    
}
?>
       