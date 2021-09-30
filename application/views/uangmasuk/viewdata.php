<div class="row">
	<div class="box col-md-12">
	    <a href="<?php echo site_url('uangmasuk/') ?>" class="btn btn-primary ">
	    <i class="glyphicon glyphicon-plus-sign"></i> Tambah Data </a>   </div>      
        <div class="box col-md-12">
            <div class="box-inner">
		        <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-user"></i> Data Uang Masuk</h2>        
                </div>
		        <div class="box-content">
		            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
		                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive dataTable" id="dataTables-example" aria-describedby="DataTables_Table_0_info">
                            <thead>
					            <tr>
                                    
                                    <th width="5"><font color="#000000">No</th>
                                    <th><font color="#000000">Tanggal Masuk</th>
                                    <th><font color="#000000">Jenis Kas</th>
                                    <th><font color="#000000">Nama Donatur</th>
                                    <th><font color="#000000">Jumlah</th>                            
                                    <th><font color="#000000">Uraian</th>                           
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $nomor = 0;
                                foreach ($tampil->result_array() as $baris):
                                $nomor++;
                                ?>
                                <tr>
                                    <td align="center"><font color="#000000"><?php echo $nomor?></td>
                                    <td><font color="#000000"><?php echo $baris['masuktgl']; ?></td>
                                    <td><font color="#000000"><?php echo $baris['kasmasuk']; ?></td>
                                    <td><font color="#000000"><?php echo $baris['nama_donatur']; ?></td>
                                    <td><font color="#000000"><?php echo $baris['jumlahmasuk']; ?></td>								
                                    <td><font color="#000000"><?php echo $baris['uraian']; ?></td>
                                    </font>
                                    
                                </tr>
                                <?php
                                endforeach;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
		    </div>
        </div>
    </div>
</div>

    