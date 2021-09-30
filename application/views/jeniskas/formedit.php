<h3 class="box-title">
	<a href="<?php echo site_url('jeniskas') ?>" class="btn btn-primary btn-lg"><i class="glyphicon glyphicon-chevron-left glyphicon-white"></i> Kembali </a>   
</h3>
<?php echo $this->session->flashdata('pesan');?>
<div class="box col-md-12">
	<div class="box-content">
    <?php echo form_open('jeniskas/update', array('class' => 'form-horizontal')) ?>
       <div class="box-body">
           <div class="box-inner">
				<div class="box-header well" data-original-title="">
				<h2><i class="glyphicon glyphicon-edit"></i> Tambah Data Jenis Kas</h2>   
				</div>
                <div class="box-content">
                    <form role="form">
                        <div class="form-group"><font color="#000000">
                            <label class="col-sm-2 control-label">ID kas</label>
                            <div class="col-sm-4">
                                <input type="text" name="kd_jeniskas" class="form-control" value="<?php echo $kd_jeniskas;?>" readonly="readonly">
                                <span style="font-weight: bold; color: red;"><?php echo form_error('kd_jeniskas') ?></span>
                            </div>
                        </div>
                <div class="box-content">
                    <form role="form">
                        <div class="form-group"><font color="#000000">
                            <label class="col-sm-2 control-label">Jenis kas</label>
                            <div class="col-sm-4">
                                <input type="text" name="jeniskas" class="form-control" value="<?php echo $jeniskas;?>" readonly="readonly">
                                <span style="font-weight: bold; color: red;"><?php echo form_error('jeniskas') ?></span>
                            </div>
                        </div>
                
				        <div class="form-group">
                            <label class="col-sm-2 control-label">Jumlah</label>
                            <div class="col-sm-6">
                                <input type="text" name="jumlah" class="form-control" value="<?php echo $jumlah;?>">
                                <span style="font-weight: bold; color: red;"><?php echo form_error('jumlah') ?></span>
                            </div>
                        </div></font>
                        <div class="form-group">
                            <label class="col-sm-2 control-label"></label>
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-success">
                                    <i class="glyphicon glyphicon-refresh"></i> Update Data
                                </button>
                            </div>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>