<script>   
    function ambil(kd_penceramah,nama_penceramah)  
    {     
      $('#kd_penceramah').val(kd_penceramah);    
      $('#nama_penceramah').val(nama_penceramah); 
      $('#myModal').modal('hide');    
    } 
</script> 
<style type="text/css">
 .editor
  {  
  display:none;   
  } 
</style> 
<h2 class="box-title">
  <a href="<?php echo site_url('ceramah/data') ?>" class="btn btn-primary "><i class="glyphicon glyphicon-chevron-left glyphicon-white"></i> Kembali </a>   
</h2>
<?php echo $this->session->flashdata('pesan');?>
<?php echo form_open('ceramah/simpantransaksi', array('class' => 'form-horizontal')) ?>
<div class="box-body">
  <div class="box-inner">
		<div class="box-header well" data-original-title="">
			<h2><i class="glyphicon glyphicon-edit"></i><font align="left"> Tambah Data Jadwal Ceramah</h2>   
		</div>
    <div class="box-content">
      <form role="form">
        <div class="form-group"><font color="#000000" align="center">
          <label class="col-sm-2 control-label"><font align="left">Kode Jadwal Ceramah</label>
          <div class="col-sm-4">
            <input type="text" name="kd_jadwal" value=<?php echo $kd_jadwal ?> class="form-control" readonly>
            <span style="font-weight: bold; color: red;"><?php echo form_error('kd_jadwal') ?></span>
          </div>
        </div>
        <div class='form-group'><font color="#000000" align="left">
          <label class="col-sm-2 control-label" align="left">Tahun</label>
            <div class="col-sm-2">
               <select class='form-control' name='tahun'>
                  <span style="font-weight: bold; color: red;"><?php echo form_error('tahun') ?></span>
                  <option value='0'>--pilih--</option>
                  <option value='2019'>2019</option>
                  <option value='2020'>2020</option>
                  <option value='2021'>2021</option>   
                  <option value='2022'>2022</option> 
                  <option value='2023'>2023</option> 
                  <option value='2024'>2024</option>
                  <option value='2025'>2025</option>   
                  
                </select>
            </div>
          </label>
          <label class="col-sm-2 control-label" align="left">Bulan</label>
            <div class="col-sm-2">
               <select class='form-control' name='bulan'>
                  <span style="font-weight: bold; color: red;"><?php echo form_error('bulan') ?></span>
                  <option value='0'>--pilih--</option>
                  <option value='Januari'>Januari</option>
                  <option value='Februari'>Februari</option>
                  <option value='Maret'>Maret</option>   
                  <option value='April'>April</option> 
                  <option value='mei'>mei</option> 
                  <option value='Juni'>Juni</option>
                  <option value='Juli'>Juli</option>
                  <option value='Agustus'>Agustus</option>
                  <option value='September'>September</option>
                  <option value='Oktober'>Oktober</option>
                  <option value='November'>November</option>
                  <option value='Desember'>Desember</option>
                </select>
            </div>
          </label>
        </div>
        <div class='form-group'><font color="#000000" align="left">
          <label class="col-sm-2 control-label" align="left">Waktu Ceramah          </label>
            <div class="col-sm-6">
               <select class='form-control' name='tanggal'>
                  <span style="font-weight: bold; color: red;"><?php echo form_error('tanggal') ?></span>
                  <option value='0'>--pilih--</option>
                  <option value='Minggu Ke-1'>Minggu Ke-1</option>
                  <option value='Minggu Ke-2'>Minggu Ke-2</option>
                  <option value='Minggu Ke-3'>Minggu Ke-3</option>   
                  <option value='Minggu Ke-4'>Minggu Ke-4</option>  
                  <option value='Minggu Ke-5'>Minggu Ke-5</option>      
                </select>
            </div>
          </label>
        </div>
        <div class='form-group'>
          <label class="col-sm-2 control-label">Hari Ceramah</label>
            <div class="col-sm-6">
              <select class='form-control' name='hari'>
                <span style="font-weight: bold; color: red;"><?php echo form_error('hari') ?></span>
                <option value='0'>--pilih--</option>
                <option value='Senin'>Senin</option>
                <option value='Selasa'>Selasa</option>
                <option value='Rabu'>Rabu</option>   
                <option value='Kamis'>Kamis</option>  
                <option value='Jumat'>Jumat</option>    
                <option value='Sabtu'>Sabtu</option> 
                <option value='Minggu'>Minggu</option>          
              </select>
            </div>
          </label>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Kode Penceramah</label>
					<div class="col-sm-6">
            <input type="text" name="kd_penceramah" class="form-control" readonly name="kd_penceramah" id="kd_penceramah">
            <?php echo $this->session->flashdata('error');?>
            <span style="font-weight: bold; color: red;">
            <?php echo form_error('kd_penceramah') ?></span>
          </div>
          <button type="button" title="Cari Penceramah" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            <span class='glyphicon glyphicon-search'>
            </span>
          </button>
        </div>  
        <div class="form-group">
          <label class="col-sm-2 control-label">Nama Penceramah</label>
          <div class="col-sm-6">
            <input type="text" name="nama_penceramah" class="form-control" readonly name="nama_penceramah" id="nama_penceramah">
            <span style="font-weight: bold; color: red;"><?php echo form_error('nama_penceramah') ?></span>
          </div>
        </div>
				<div class="form-group">
          <label class="col-sm-2 control-label">Tema Ceramah</label>
          <div class="col-sm-2">
            <input type="text" name="judul" class="form-control">
            <span style="font-weight: bold; color: red;"><?php echo form_error('judul') ?></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Keterangan</label>
          <div class="col-sm-2">
            <input type="text" name="ket" class="form-control">
            <span style="font-weight: bold; color: red;"><?php echo form_error('ket') ?></span>
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-sm-2 control-label"></font></label>
          <div class="col-sm-4">
            <button type="submit" class="btn btn-success">
               <i class="glyphicon glyphicon-download-alt"></i> Simpan Data
            </button>
          </div>
				</div>
      </form>
    </div>
  </div>
  <?php echo form_close(); ?>
<div>

<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" arialabelledby="myModalLabel">     
  <div class="modal-dialog modal-lg" role="document">  
    <div class="modal-content">     
      <div class="modal-header">        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span ariahidden="true">&times;	</span>	
        </button>          
        <h4 class="modal-title" id="myModalLabel">Cari Data Penceramah</h4>         
        <div class="box-body table-responsive">         
          <table class="table table-bordered table-striped table-hover" id="datatiket">      
            <thead>
              <tr>                
                <th width="5">No</th>         
                <th>Kode Penceramah</th>        
                <th>Nama Penceramah</th>                 
                <th>Aksi</th>       
              </tr>             
            </thead>   
                  
            <tbody>            
              <?php $no=1;foreach($datapenceramah->result_array() as $r){?>             
                <tr>                
                  <td><?php echo $no ?></td>              
                  <td><?php echo $r['kd_penceramah'] ?></td>                
                  <td><?php echo $r['nama_penceramah'] ?></td>          
                  <td><button class="btn btn-primary btn-xs" type="button" onClick="return ambil('<?php echo $r['kd_penceramah']?>','<?php echo $r['nama_penceramah']?>')">
                    <span class='glyphicon glyphicon-check'>
                    </span> Pilih</button> 
                  </td>             
                </tr>             
                <?php $no++; } ?>                  
            </tbody>           
          </table>          
        </div>      
      </div>       
    </div>    
  </div> 
</div> 
