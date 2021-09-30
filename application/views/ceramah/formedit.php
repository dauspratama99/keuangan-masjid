<h3 class="box-title">
    <a href="<?php echo site_url('ceramah') ?>" class="btn btn-primary"><i class="glyphicon glyphicon-chevron-left glyphicon-white"></i> Kembali </a>   
</h3>
<?php echo $this->session->flashdata('pesan');?>
<div class="box-content">         
    <?php echo form_open('ceramah/update', array('class' => 'form-horizontal')) ?>
    <div class="box-body">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit Data Jadwal Ceramah</h2>   
            </div>
            <div class="box-content">
                <form role="form">
                    <div class="form-group"><font color="#000000">
                        <label class="col-sm-2 control-label">Kode Jadwal Ceramah</label>
                        <div class="col-sm-4">
                            <input type="text" name="kd_jadwal" class="form-control" value="<?php echo $kd_jadwal;?>" readonly="readonly">
                            <span style="font-weight: bold; color: red;"><?php echo form_error('kd_jadwal') ?></span>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label class="col-sm-2 control-label">Waktu Ceramah</label>
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
                            <input type="text" name="penceramah" class="form-control" readonly name="penceramah" id="penceramah" value="<?php echo $penceramah;?>">
                            <?php echo $this->session->flashdata('error');?>
                            <span style="font-weight: bold; color: red;">
                            <?php echo form_error('penceramah') ?></span>
                        </div>
                        <button type="button" title="Cari Penceramah" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            <span class='glyphicon glyphicon-search'></span>
                        </button> 
                    </div>          
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Penceramah</label>
                        <div class="col-sm-6">
                            <input type="text" name="nama_penceramah" class="form-control" readonly name="nama_penceramah" id="nama_penceramah" value="<?php echo $nama_penceramah;?>">
                            <span style="font-weight: bold; color: red;"><?php echo form_error('nama_penceramah') ?></span>
                        </div>
                    </div>
				    <div class="form-group">
                        <label class="col-sm-2 control-label">Tema Ceramah</label>
                        <div class="col-sm-2">
                            <input type="text" name="judul" class="form-control" value="<?php echo $judul;?>">
                            <span style="font-weight: bold; color: red;"><?php echo form_error('judul') ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Keterangan</label>
                        <div class="col-sm-2">
                            <input type="text" name="ket" class="form-control" value="<?php echo $ket;?>">
                            <span style="font-weight: bold; color: red;"><?php echo form_error('ket') ?></span>
                        </div>
                    </div>
                    <div class="form-group"></font>
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
