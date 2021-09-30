<div class="row">     
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
        <br>
<div class="box col-md-12">
    <div class="box-inner">
		<div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Data Kegiatan</h2>        
        </div>
		<div class="box-content">
		<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
		
                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive dataTable" id="dataTables-example" aria-describedby="DataTables_Table_0_info">
                
                
                    <thead>
					<tr>
                            <th><font color="#000000">No</th>
                            <th><font color="#000000">Kode Kegiatan</th>
                            <th><font color="#000000">Nama Kegiatan</th>
							<th><font color="#000000">Ketua</th>
                            <th><font color="#000000">Tanggal</th>                            
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
                                <td><font color="#000000"><?php echo $baris['kd_kegiatan']; ?></td>
                                <td><font color="#000000"><?php echo $baris['nama']; ?></td>
								<td><font color="#000000"><?php echo $baris['ketua']; ?></td>
                                <td><font color="#000000"><?php echo $baris['tanggal']; ?></td>								
                                <td><font color="#000000"><?php echo $baris['keterangan']; ?></td>
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
    