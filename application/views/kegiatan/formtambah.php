<h2 class="box-title">
    <a href="<?php echo site_url('kegiatan') ?>" class="btn btn-primary "><i class="glyphicon glyphicon-chevron-left glyphicon-white"></i> Kembali </a>   
</h2>
<?php echo $this->session->flashdata('pesan');?>
<?php echo form_open('kegiatan/simpan', array('class' => 'form-horizontal')) ?>
<div class="box-body">
	<div class="box-inner">
		<div class="box-header well" data-original-title="">
			<h2><i class="glyphicon glyphicon-edit"></i> Tambah Data Kegiatan</h2>   
		</div>
        <div class="box-content">
            <form role="form">
                <div class="form-group"><font color="#000000">
                    <label class="col-sm-2 control-label">Kode Kegiatan</label>
                    <div class="col-sm-4">
                        <input type="text" name="kd_kegiatan" value=<?php echo $kd_kegiatan ?> class="form-control" readonly>
                        <span style="font-weight: bold; color: red;"><?php echo form_error('kd_kegiatan') ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nama Kegiatan</label>
					<div class="col-sm-6">
                        <input type="text" name="nama" class="form-control">
                        <span style="font-weight: bold; color: red;">
					    <?php echo form_error('nama') ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Ketua</label>
					<div class="col-sm-6">
                        <input type="text" name="ketua" class="form-control">
                        <span style="font-weight: bold; color: red;">
					    <?php echo form_error('ketua') ?></span>
                    </div>
                </div>				
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal</label>
                    <div class="col-sm-3">
                        <input type="date" name="tanggal" class="form-control">
                        <span style="font-weight: bold; color: red;"><?php echo form_error('tanggal') ?></span>
                    </div>
                </div>
				<div class="form-group">
                    <label class="col-sm-2 control-label">Keterangan</label>
                    <div class="col-sm-6">
                        <input type="text" name="keterangan" class="form-control" style="height:200px">
                        <span style="font-weight: bold; color: red;"><?php echo form_error('keterangan') ?></span>
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
	

