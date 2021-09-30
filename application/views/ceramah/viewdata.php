<div class="row">
	<div class="box col-md-12">
	    <a href="<?php echo site_url('ceramah/data') ?>" class="btn btn-primary ">
	    <i class="glyphicon glyphicon-plus-sign"></i> Tambah Data </a>   
    </div>      
    <div class="box col-md-12">
        <div class="box-inner">
		    <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-user"></i> Data Jdawal Ceramah</h2>        
            </div>
		<div class="box-content">
		    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">		
                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive dataTable" id="dataTables-example" aria-describedby="DataTables_Table_0_info">             
                    <thead>
					    <tr>
                            <th><font color="#000000">No</th>
                            <th><font color="#000000">Kode Jadwal</th>
                            <th><font color="#000000">Waktu Ceramah</th>
                            <th><font color="#000000">Minggu</th>
                            <th><font color="#000000">Hari Ceramah</th>
                            <th><font color="#000000">Nama Penceramah</th>
							<th><font color="#000000">Tema Ceramah</th>
                            <th><font color="#000000">Keterangan</th>
                            
                            <th>
                                <font color="#000000">Aksi
                            </th>
                        </tr>
                    </thead>				
                    <tbody>
                        <?php
                        $nomor = 0;
                        foreach ($tampil->result_array() as $baris):
                            $nomor++;
                            ?>
                            <tr>
                                <td><font color="#000000"><?php echo $nomor; ?></td>
                                <td><font color="#000000"><?php echo $baris['kd_jadwal']; ?></td>
                                <td><font color="#000000"><?php echo $baris['bulan']; ?> <?php echo $baris['tahun']; ?></td>
                                <td><font color="#000000"><?php echo $baris['tanggal']; ?></td>
                                <td><font color="#000000"><?php echo $baris['hari']; ?></td>
								<td><font color="#000000"><?php echo $baris['nama_penceramah']; ?></td>
                                <td><font color="#000000"><?php echo $baris['judul']; ?></td>
                                <td><font color="#000000"><?php echo $baris['ket']; ?></td>
                                
                                </font>
                                <td>
								    <a class="btn btn-info" href="<?php echo site_url('ceramah/edit/' . $baris['kd_jadwal']) ?>">
								    <i class="glyphicon glyphicon-edit icon-white"></i>
								    Edit
								    </a>
                                    <a class="btn btn-danger" onclick="return hapus('<?php echo $baris['kd_jadwal'] ?>')">
                                        <i class="glyphicon glyphicon-trash icon-white"></i>
										Hapus
                                    </a>
                                    <script>
                                        function hapus(kode) 
                                        {
                                            pesan = confirm('Yakin data ceramah ini di hapus');
                                            if (pesan)
                                            {
                                                location.href = ('<?php echo site_url('ceramah/hapus/') ?>' + kode);
                                            } else
                                                return false;
                                        }
                                    </script>
                                </td>
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

    