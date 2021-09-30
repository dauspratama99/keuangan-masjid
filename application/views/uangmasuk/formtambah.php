<script>
    function ambil(kd_donatur,nama_donatur)  
    {     
    $('#kd_donatur').val(kd_donatur);    
    $('#nama_donatur').val(nama_donatur); 
        
    $('#myModal').modal('hide');    
    } 
</script>
<script>
   
    function myFunction1()
    {
        document.getElementById("mybutton").disabled=false;
    }

</script>
<h3 class="box-title">
    <a href="<?php echo site_url('uangmasuk/data') ?>" class="btn btn-primary btn-lg"><i class="glyphicon glyphicon-chevron-left glyphicon-white"></i> Kembali </a>   
</h3><?php echo $this->session->flashdata('pesan');?>
<div class="box col-md-12">
	<div class="box-content">   
        <?php echo form_open('uangmasuk/simpantransaksi', array('class' => 'form-horizontal')) ?>
        <div class="box-body">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-edit"></i> Tambah Uang Masuk</h2>   
                </div>
                <div class="box-content">
                    <form role="form">
                        <div class="form-group"><font color="#000000">
                            <label class="col-sm-2 control-label">Jenis Kas</label>
                            <div class="col-sm-4">
                                <select class="form-control select2" style="width: 100%;" name="jeniskas" id="jeniskas" required>            
                                    <option selected>-Pilih-</option>                 
                                    <?php foreach($jeniskas->result_array() as $d){?>             
                                    <option value="<?php echo $d['kd_jeniskas']?>"><?php echo $d['jeniskas']?></option>             
                                    <?php }?>             
                                </select>           
                            </div>                  
 				        </div>
                        <div class="form-group"><font color="#000000">
                            <label class="col-sm-2 control-label">Tanggal Masuk</label>
                            <div class="col-sm-4">
                                <input type="date" name="tgluangmasuk" id="tgluangmasuk" class="form-control" >
                                <span style="font-weight: bold; color: red;"><?php echo form_error('tgluangmasuk') ?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Donatur</label>
                            <div class="col-sm-4">
                                <input type="checkbox" class="form-radio" name="cek" id="cek" class="form-control"  onClick="myFunction1()" value="Ada">Ceklis Jika Ada Donatur
                            </div>
                        </div></font>
                        <div class="form-group"><font color="#000000">
                            <label class="col-sm-2 control-label">Kode Donatur</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" readonly name="kd_donatur" id="kd_donatur" value="-">
                                <?php echo $this->session->flashdata('error');?>
                                <span style="font-weight: bold; color: red;"></span>     
                            </div>
                                <button type="button"  title="Cari Donatur" name="mybutton" id="mybutton" class="btn btn-info" data-toggle="modal" data-target="#myModal" disabled=true>
                                Cari Donatur
                                    <span class='glyphicon glyphicon-search'></span>
                                </button>
                        </div>
                        <div class="form-group"><font color="#000000">
                            <label class="col-sm-2 control-label">Nama Donatur</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" readonly name="nama_donatur" id="nama_donatur">
                                <?php echo $this->session->flashdata('error');?>
                                <span style="font-weight: bold; color: red;"><?php echo form_error('nama_donatur') ?></span>
                            </div>
                        </div>                    
                        <div class="form-group"><font color="#000000">
                            <label class="col-sm-2 control-label">Jumlah</label>
                            <div class="col-sm-4">
                                <input type="text" name="jumlahmasuk" class="form-control">
                                <span style="font-weight: bold; color: red;"><?php echo form_error('jumlahmasuk') ?></span>
                            </div>
                        </div>
                        <div class="form-group"><font color="#000000">
                            <label class="col-sm-2 control-label">Uraian</label>
                            <div class="col-sm-6">
                                <input type="text" name="uraian" class="form-control" style="height:200px">
                                <span style="font-weight: bold; color: red;"><?php echo form_error('uraian') ?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label"></label>
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-save"></i> Simpan Data
                                </button>
                            </div>
                        </div>
                    </form>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" arialabelledby="myModalLabel">     
  <div class="modal-dialog modal-lg" role="document">  
     <div class="modal-content">     
      <div class="modal-header">        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span ariahidden="true">&times;	</span>	
        </button>          
        <h4 class="modal-title" id="myModalLabel">Cari Data Donatur</h4>         
        <div class="box-body table-responsive">         
          <table class="table table-bordered table-striped table-hover" id="datatiket">      
            <thead>
              <tr>                
                <th width="5">No</th>         
                <th>Kode Donatur</th>        
                <th>Nama Donatur</th>                 
                <th>Aksi</th>       
              </tr>             
            </thead>   
                  
            <tbody>            
              <?php $no=1;foreach($datadonatur->result_array() as $r){?>             
                <tr>                
                  <td><?php echo $no ?></td>              
                  <td><?php echo $r['kd_donatur'] ?></td>                
                  <td><?php echo $r['nama_donatur'] ?></td>          
                  <td><button class="btn btn-primary btn-xs" type="button" onClick="return ambil('<?php echo $r['kd_donatur']?>','<?php echo $r['nama_donatur']?>')">
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