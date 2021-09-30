<div class="row">
	<div class="box col-md-12">
        <a href="<?php echo site_url('jeniskas/tambah') ?>" class="btn btn-primary">
        <i class="glyphicon glyphicon-plus-sign"></i> Tambah Data </a>   
    </div>      
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-user"></i> Data Jenis Kas</h2>        
            </div>
            <div class="box-content">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">		
                    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive dataTable" id="dataTables-example" aria-describedby="DataTables_Table_0_info">
                        <thead>
                            <tr>
                                <th><font color="#000000">No</th>
                                <th><font color="#000000">ID kas</th>
                                <th><font color="#000000">Jenis Kas</th>
                                <th><font color="#000000">Jumlah</th>
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
                                <td><font color="#000000"><?php echo $baris['kd_jeniskas']; ?></td>
                                <td><font color="#000000"><?php echo $baris['jeniskas']; ?></td>
                                <td><font color="#000000"><?php echo "Rp.".number_format($baris['jumlah']);?></td> 
                                <td>
                                    <a class="btn btn-info" href="<?php echo site_url('jeniskas/edit/' . $baris['kd_jeniskas']) ?>">
                                    <i class="glyphicon glyphicon-edit icon-white"></i>
                                    Edit
                                    </a>                               
                                    <button type="button" class="btn btn-danger" onclick="return hapus('<?php echo $baris['kd_jeniskas'] ?>')">
                                        <i class="glyphicon glyphicon-trash icon-white"></i>
                                        Hapus
                                    </button>
                                    <script>
                                        function hapus(kd_jeniskas) 
                                        {
                                            pesan = confirm('Yakin data jeniskas ini di hapus');
                                            if (pesan) {
                                                location.href = ('<?php echo site_url('jeniskas/hapus/') ?>' + kd_jeniskas);
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
</div>