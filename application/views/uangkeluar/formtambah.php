<script>
    function ambil(kd_donatur,nama_donatur)  
    {     
    $('#kd_donatur').val(kd_donatur);    
    $('#nama_donatur').val(nama_donatur); 
        
    $('#myModal').modal('hide');    
    } 
</script>
<script>
    function myFunction(cari)  
    {  
        var x = document.getElementbById("cari");
        x.disabled = true;
    }    
</script>
<h3 class="box-title">
    <a href="<?php echo site_url('uangkeluar/data') ?>" class="btn btn-primary btn-lg"><i class="glyphicon glyphicon-chevron-left glyphicon-white"></i> Kembali </a>   
</h3><?php echo $this->session->flashdata('pesan');?>
<div class="box col-md-12">
	<div class="box-content">   
        <?php echo form_open('uangkeluar/simpantransaksi', array('class' => 'form-horizontal')) ?>
        <div class="box-body">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-edit"></i> Tambah Uang Keluar</h2>   
                </div>
                <div class="box-content">
                    <form role="form">
                        <div class="form-group"><font color="#000000">
                            <label class="col-sm-2 control-label">Jenis Kas</label>
                            <div class="col-sm-4">
                                <select class="form-control select2" style="width: 100%;" name="kaskeluar" id="kaskeluar"  required>            
                                    <option selected>-Pilih-</option>                 
                                    <?php foreach($datajeniskas->result_array() as $d){?>             
                                    <option value="<?php echo $d['kd_jeniskas']?>"><?php echo $d['jeniskas']?></option>             
                                    <?php }?>             
                                </select>  
                            </div>
                        </div>
                        <div class="form-group"><font color="#000000">
                            <label class="col-sm-2 control-label">Tanggal Keluar</label>
                            <div class="col-sm-4">
                                <input type="date" name="tanggal" class="form-control" >
                                <span style="font-weight: bold; color: red;"><?php echo form_error('tanggal') ?></span>
                            </div>
                        </div>              
                        <div class="form-group"><font color="#000000">
                            <label class="col-sm-2 control-label">Jumlah</label>
                            <div class="col-sm-6">
                                <input type="text" name="jumlah" class="form-control">
                                <span style="font-weight: bold; color: red;"><?php echo form_error('jumlah') ?></span>
                            </div>
                        </div>
                        <div class="form-group"><font color="#000000">
                            <label class="col-sm-2 control-label">Uraian</label>
                            <div class="col-sm-6 ">
                                <input type="text" name="uraian" class="form-control" rowspan="4" style="height:200px">
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
