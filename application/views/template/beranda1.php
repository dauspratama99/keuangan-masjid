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
    </div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">			
			<div class="col-md-4 col-sm-4 col-xs-6">
                <a data-toggle="tooltip" title="" class="well top-block" href="<?php echo base_url('index.php/keuangan')?>" data-original-title="6 new members.">
                    <i class="glyphicon glyphicon-book green"></i>
                    <div>Data Keuangan</div>
                    <div>Masjid</div>
                    <span class="notification">6</span>
                </a>
            </div>
		</div>
        <div class="box box-primary">			
			<div class="col-md-4 col-sm-4 col-xs-6">
                <a data-toggle="tooltip" title="" class="well top-block" href="<?php echo base_url('index.php/ceramah/tampildata')?>" data-original-title="6 new members.">
                    <i class="glyphicon glyphicon-bullhorn yellow"></i>
                    <div>Jadwal Ceramah</div>
                    <div>Masjid</div>
                    <span class="notification">6</span>
                </a>
            </div>
		</div>
        <div class="box box-primary">			
			<div class="col-md-4 col-sm-4 col-xs-6">
                <a data-toggle="tooltip" title="" class="well top-block" href="<?php echo base_url('index.php/kegiatan/tampildata')?>" data-original-title="6 new members.">
                    <i class="glyphicon glyphicon-bell blue"></i>
                    <div>Jadwal Kegiatan</div>
                    <div>Masjid</div>
                    <span class="notification">6</span>
                </a>
            </div>
		</div>        
	</div>
</div><br>
<div class="row">     
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
                                <th><font color="#000000">Tanggal Transaksi</th>
                                <th><font color="#000000">Jenis Kas</th>
                                <th><font color="#000000">Uraian</th>
                                <th><font color="#000000">Uang Masuk</th>
                                <th><font color="#000000">Uang Keluar</th>
                                <th><font color="#000000">Jumlah</th>							
                            </tr>
					    </thead>
					    <tbody>
						    <?php $no=1; foreach($tampil->result_array() as $r){
						    ?>							
                            <tr>
                                <td align="center"><font color="#000000"><?php echo $no?></td>
                                <td><font color="#000000"><?php echo $r['tgl'];?></a></td>
                                <td><font color="#000000"><?php echo $r['jeniskas'];?></td>
                                <td><font color="#000000"><?php echo $r['uraian'];?></a></td>
                                <td><font color="#000000"><?php echo $r['uangmasuk'];?></a></td>
                                <td><font color="#000000"><?php echo $r['uangkeluar'];?></a></td>							
                                <td><font color="#000000"><?php echo "Rp.".number_format($r['jumlahh']);?></td>
                            </tr>
						    <?php $no++; }?>
					    </tbody>
				    </table>
			    </div>
		    </div>
	    </div>
    </div>
  </div>	
	<script>
		$(function(){
			$('#data').DataTable();
		});
	</script>

							

