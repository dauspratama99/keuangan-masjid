<div class="box-content">
			<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
                <table align="center" >               
            <thead>
	            <tr >
                    <td rowspan="4" align="left" style="width: 90px"><img src="<?php echo base_url().'images/logo.GIF'?>" height="64" width="70"></td>     
                    
                    <th align="center"  style="font-size: 24px;font-weight: Bold;"><font color="#0099ff"> MASJID SALMAN BALAI AHAD </th>
                    <th></th>
                </tr> 
                <tr>     
                    <td align="center"  style="font-size: 12px;font-weight: italic;"><font color="#0099ff">Jl. Prof. DR. Hamka Balai Ahad Lubuk Basung Kabupaten Agam</td> 
                </tr>  </font> 
            </thead>
            
        </table>
        <table>
            <thead>
                <tr>     
                    <td align="center"  style="font-size: 12px;font-weight: italic;"><font color="#0099ff">_____________________________________________________________________________________________________________________________________________________________________________________________</td> 
                </tr>
	        </thead>
        </table>
        <br><div class="row">      
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-user"></i> Data ceramah</h2>        
            </div>
            <div class="box-content">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
            
                    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive dataTable" id="dataTables-example" aria-describedby="DataTables_Table_0_info">
                
                
                        <thead>
					        <tr>
                                <th><font color="#000000">No</th>
                                <th><font color="#000000">Kode Jadwal Ceramah</th>
                                <th><font color="#000000">Waktu Ceramah</th>
                                <th><font color="#000000">Hari</th>
                                <th><font color="#000000">Kode Penceramah</th>
                                <th><font color="#000000">Nama Penceramah</th>
                                <th><font color="#000000">Judul</th>
                                <th><font color="#000000">Keterangan</th>
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
                                <td><font color="#000000"><?php echo $baris['tanggal']; ?></td>
                                <td><font color="#000000"><?php echo $baris['hari']; ?></td>
                                <td><font color="#000000"><?php echo $baris['kd_penceramah']; ?></td>
								 <td><font color="#000000"><?php echo $baris['nama_penceramah']; ?></td>
                                 <td><font color="#000000"><?php echo $baris['judul']; ?></td>
                                 <td><font color="#000000"><?php echo $baris['ket']; ?></td>
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
    </div>
</div> </div>
    