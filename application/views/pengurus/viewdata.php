<div class="row">
	<div class="box col-md-12">
	<a href="<?php echo site_url('pengurus/tambah') ?>" class="btn btn-primary">
	<i class="glyphicon glyphicon-plus-sign"></i> Tambah Data </a>   </div>      
<div class="box col-md-12">
    <div class="box-inner">
		<div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Data Pengurus</h2>        
        </div>
		<div class="box-content">
		<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
		
                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive dataTable" id="dataTables-example" aria-describedby="DataTables_Table_0_info">
                
                    <thead>
                        <tr>
                            <th><font color="#000000">No</th>
                            <th><font color="#000000">Kode pengurus</th>
                            <th><font color="#000000">Nama pengurus</th>
                            <th><font color="#000000">Jabatan</th>
                            
                            <th><font color="#000000">Alamat</th>
                            <th><font color="#000000">No Hp</th>
                            
                            
                            <th>
                                <font color="#000000">Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 0;
                        foreach ($tampildata->result_array() as $baris):
                            $nomor++;
                            ?>
                            <tr>
                                <td><font color="#000000"><?php echo $nomor; ?></td>
                                <td><font color="#000000"><?php echo $baris['kd_pengurus']; ?></td>
                                <td><font color="#000000"><?php echo $baris['nama']; ?></td>
                                <td><font color="#000000"><?php echo $baris['jabatan']; ?></td>
                                 <td><font color="#000000"><?php echo $baris['alamat']; ?></td>
                                
                                <td><font color="#000000"><?php echo $baris['nohp']; ?></td>
                                
                                <td>
                                   <a class="btn btn-info" href="<?php echo site_url('pengurus/edit/' . $baris['kd_pengurus']) ?>">
								<i class="glyphicon glyphicon-edit icon-white"></i>
								Edit
								</a>
                                
                                    <button type="button" class="btn btn-danger" onclick="return hapus('<?php echo $baris['kd_pengurus'] ?>')">
                                        <i class="glyphicon glyphicon-trash icon-white"></i>
										Hapus
                                    </button>
                                    <script>
                                        function hapus(kode_pengurus) {
                                            pesan = confirm('Yakin data pengurus ini di hapus');
                                            if (pesan) {
                                                location.href = ('<?php echo site_url('pengurus/hapus/') ?>' + kode_pengurus);
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