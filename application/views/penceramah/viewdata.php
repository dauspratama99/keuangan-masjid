<div class="row">
	<div class="box col-md-12">
	<a href="<?php echo site_url('penceramah/tambah') ?>" class="btn btn-primary">
	<i class="glyphicon glyphicon-plus-sign"></i> Tambah Data </a>   </div>      
<div class="box col-md-12">
    <div class="box-inner">
		<div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Data penceramah</h2>        
        </div>
		<div class="box-content">
		<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
		
                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive dataTable" id="dataTables-example" aria-describedby="DataTables_Table_0_info">
                
                    <thead>
                        <tr>
                            <th><font color="#000000">No</th>
                            <th><font color="#000000">Kode Penceramah</th>
                            <th><font color="#000000">Nama Penceramah</th>
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
                                <td><font color="#000000"><?php echo $baris['kd_penceramah']; ?></td>
                                <td><font color="#000000"><?php echo $baris['nama_penceramah']; ?></td>
                                 <td><font color="#000000"><?php echo $baris['alamat']; ?></td>
                                <td><font color="#000000"><?php echo $baris['nohp']; ?></td>
                                <td>
                                   <a class="btn btn-info" href="<?php echo site_url('penceramah/edit/' . $baris['kd_penceramah']) ?>">
								<i class="glyphicon glyphicon-edit icon-white"></i>
								Edit
								</a>
                                
                                    <button type="button" class="btn btn-danger" onclick="return hapus('<?php echo $baris['kd_penceramah'] ?>')">
                                        <i class="glyphicon glyphicon-trash icon-white"></i>
										Hapus
                                    </button>
                                    <script>
                                        function hapus(kd_penceramah) {
                                            pesan = confirm('Yakin data penceramah ini di hapus');
                                            if (pesan) {
                                                location.href = ('<?php echo site_url('penceramah/hapus/') ?>' + kd_penceramah);
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