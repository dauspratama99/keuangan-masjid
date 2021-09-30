<h3 class="box-title">
	<a href="<?php echo site_url('penceramah') ?>" class="btn btn-primary "><i class="glyphicon glyphicon-chevron-left glyphicon-white"></i> Kembali </a>   
</h3>
<?php echo $this->session->flashdata('pesan');?>
<div class="box col-md-12">
		<div class="box-content">
            <?php echo form_open('penceramah/update', array('class' => 'form-horizontal')) ?>
            <div class="box-body">
                <div class="box-inner">
					<div class="box-header well" data-original-title="">
						<h2><i class="glyphicon glyphicon-edit"></i> Tambah Data Penceramah</h2>   
					</div>
            <div class="box-content">
            <form role="form">
				<div class="form-group"><font color="#000000">
                    <label class="col-sm-2 control-label">Kode Penceramah</label>
                    <div class="col-sm-4">
                        <input type="text" name="kd_penceramah" class="form-control" value="<?php echo $kd_penceramah;?>" readonly="readonly">
                        <span style="font-weight: bold; color: red;"><?php echo form_error('kd_penceramah') ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nama Penceramah</label>
                    <div class="col-sm-6">
                        <input type="text" name="nama_penceramah" class="form-control" value="<?php echo $nama_penceramah;?>">
                        <span style="font-weight: bold; color: red;"><?php echo form_error('nama_penceramah') ?></span>
                    </div>
                </div>
				
                <div class="form-group">
                    <label class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-2">
                        <input type="text" name="alamat" class="form-control" value="<?php echo $alamat;?>">
                        <span style="font-weight: bold; color: red;"><?php echo form_error('alamat') ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">No Hp</label>
                    <div class="col-sm-2">
                        <input type="text" name="nohp" class="form-control" value="<?php echo $nohp;?>">
                        <span style="font-weight: bold; color: red;"><?php echo form_error('nohp') ?></span>
                    </div>
                </div>
                </font>
                

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