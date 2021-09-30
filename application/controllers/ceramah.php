  <?php
defined('BASEPATH') OR exit ('no directnscript access allowed');

class ceramah extends CI_Controller 
{

    function __construct()
     {

        parent:: __Construct();
         $this->load->library(array('form_validation', 'session'));
        $this->load->model('modelceramah');
        $this->load->model('Modelpenceramah');
      
    }


    public function index()
    {
        if($this->session->userdata('masuk')==true)
        {
            $querydataceramah = $this->modelceramah->tampil();
            $data = array(
                'tampil' => $querydataceramah
            );
            $template = array(
                'menu' => $this->load->view('template/menu', '', TRUE),
                'judul' => 'Data Jadwal Ceramah',
                'konten' => $this->load->view('ceramah/viewdata', $data, TRUE),
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
        $a['judul']='Data Jadwal Ceramah';
        $data['tampil']=$this->modelceramah->tampil();
       
        $a['konten']=$this->load->view('public/datajadwalceramah',$data,TRUE);
        $this->parser->parse('template/template1',$a);
    }

    function data()
    {
        $d['kd_jadwal']=$this->kodeceramah();
        $a['judul']='Input Jadwal Ceramah';
        $d['datapenceramah'] =$this->modelceramah->datapenceramah();
        $a['menu']=$this->load->view('template/menu','',TRUE);
        $a['konten']=$this->load->view('ceramah/formtambah',$d,TRUE);
        $this->parser->parse('template/template',$a);
    }

    public function kodeceramah()	{
		$this->db->select('RIGHT(kd_jadwal,2) as kd_jadwal', FALSE); 
        $this->db->order_by('kd_jadwal','DESC'); 
        $this->db->limit(1); 
        $query = $this->db->get('jadwalceramah');  
        if($query->num_rows() <> 0){ 
            $dt = $query->row(); 
            $kd_jadwal = intval($dt->kd_jadwal) + 1; 
        }else{ 
            $kd_donatur = 1; 
        } 
        $kodemax  = str_pad($kd_jadwal, 3, "0", STR_PAD_LEFT); 
        $kodejadi = "CRM-".$kodemax;  
        return $kodejadi;
		}

    function simpantransaksi()
    {
        $kd_jadwal=$this->input->post('kd_jadwal'); 
        $bulan=$this->input->post('bulan');
         $tahun=$this->input->post('tahun');
        $tanggal=$this->input->post('tanggal');
        $hari=$this->input->post('hari');
        $judul=$this->input->post('judul');
        $penceramah=$this->input->post('kd_penceramah');
        $ket=$this->input->post('ket');
       
        $this->modelceramah->simpan($kd_jadwal,$bulan,$tahun,$tanggal,$hari,$judul,$penceramah,$ket);
        redirect('ceramah');

    }
    
    public function edit() 
    {
        $kd_jadwal = $this->uri->segment(3);
        $queryambildata = $this->modelceramah->ambildata($kd_jadwal);
        if ($queryambildata->num_rows() > 0) {
            $baris = $queryambildata->row_array();
            $data = array(
                'kd_jadwal' => $baris['kd_jadwal'],
                'tanggal' => $baris['tanggal'],
                'hari' => $baris['hari'],
                'penceramah' => $baris['penceramah'],
                'nama_penceramah' => $baris['nama_penceramah'],
                'judul' => $baris['judul'],
                'ket' => $baris['ket'],
                
               
            );
        } else 
        {
            exit('Data tidak DiTemukan');
        }
        $template = array(
            'menu' => $this->load->view('template/menu', '', TRUE),
            'judul' => 'Edit ceramah',
            'konten' => $this->load->view('ceramah/formedit', $data, TRUE),
        );
        $this->parser->parse('template/template', $template);
    }

    public function update() 
    {
        $kd_jadwal = $this->input->post('kd_jadwal', TRUE);
        $queryupdatedata = $this->modelceramah->updatedata();
        $pesan = '<div class="alert alert-success alert-dismissible">'
                . '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'
                . 'Data Berhasil di Update'
                . '</div>';
        $this->session->set_flashdata('pesan', $pesan);
        redirect('ceramah/edit/' . $kd_jadwal);
    }

 function hapus($kode)
    {   
        $this->modelceramah->hapusdata($kode);   
        redirect('ceramah');  
    }  
}
?>
       