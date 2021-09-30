<h2 class="box-title">
    <a href="<?php echo site_url('donatur') ?>" class="btn btn-primary "><i class="glyphicon glyphicon-chevron-left glyphicon-white"></i> Kembali </a>   
</h2>
<?php echo $this->session->flashdata('pesan');?>
<?php echo form_open('donatur/simpan', array('class' => 'form-horizontal')) ?>
<div class="box-body">
    <div class="box-inner">
		<div class="box-header well" data-original-title="">
			<h2><i class="glyphicon glyphicon-edit"></i> Tambah Data Donatur</h2>   
		</div>
        <div class="box-content">
            <form role="form">
                <div class="form-group"><font color="#000000">
                    <label class="col-sm-2 control-label">ID donatur</label>
                    <div class="col-sm-4">
                        <input type="text" name="kd_donatur" value="<?php echo $kd_donatur ?>" class="form-control" readonly>
                        <span style="font-weight: bold; color: red;"><?php echo form_error('kd_donatur') ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nama donatur</label>
					<div class="col-sm-6">
                        <input type="text" name="nama_donatur" class="form-control">
                        <span style="font-weight: bold; color: red;">
					    <?php echo form_error('nama_donatur') ?></span>
                    </div>
                </div>
				<div class='form-group'>
                    <label class="col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-6">
                        <input type="radio" name="jeniskelamin" class="flat" value="Laki-Laki">Laki-laki
                        <input type="radio" name="jeniskelamin" class="flat" value="Perempuan">Perempuan
                        <span style="font-weight: bold; color: red;"><?php echo form_error('jeniskelamin') ?></span>
					</div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-6">
                        <input type="text" name="alamat" class="form-control">
                        <span style="font-weight: bold; color: red;"><?php echo form_error('alamat') ?></span>
                    </div>
                </div>
				<div class="form-group">
                    <label class="col-sm-2 control-label">No Hp</label>
                    <div class="col-sm-2">
                        <input type="text" name="nohp" class="form-control">
                        <span style="font-weight: bold; color: red;"><?php echo form_error('nohp') ?></span>
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
	

