<div class="box col-md-12">
	<div class="box-inner">
		<div class="box-header well" data-original-title="">
        	<h2><i class="glyphicon glyphicon-user"></i> Detail Uang Keluar</h2>        
        </div>
		<div class="box-content">
			<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
				<table class="table table-striped table-bordered bootstrap-datatable datatable responsive dataTable" id="dataTables-example" aria-describedby="DataTables_Table_0_info">
                	<thead>             
						<?php $d = $ambildata->row_array();?>               
						<table>                
							<tr>
								<td width='150px'>Kode Uang keluar</td>
								<td width='10px'>:</td>
								<td><b><?php echo $d['kd_ukeluar']; ?></b></td>
							</tr>                               
							<tr>
								<td>Tanggal Keluar</td>
								<td>:</td>
								<td><b><?php echo $d['keluartgl']; ?></b></td>
							</tr>               
						</table>             
						<br> 
						<table id="data" class="table table-bordered"> 
							<thead>  
								<tr style="background-color: #2196F3;color: white;font-size: 12px">      
									<th width="5">No</th>         
									<th width="100">Kode Kas</th>         
									<th>Jenis Kas</th>         
									<th>Uraian</th>         
									<th >Jumlah</th>         
									        
									  
								</tr> 
							</thead> 
							<tbody>     
								<?php $totkotor = 0; ?>  
								<?php $no=1; foreach($ambildata->result_array() as $r){ ?>     
									<tr style="font-size: 12px;">      
										<td align="center"><?php echo $no?></td>         
										<td><?php echo $r['kd_jeniskas']?></td>         
										<td><?php echo $r['jeniskas']?></td> 
										<td><?php echo $r['uraian']?></td>        
										<td><?php echo "Rp ".number_format($r['jmluang'])?></td> 
										<?php $total=$r['jmluang']; ?>     
									</tr>     
									<?php $no++; 
									$totkotor=$totkotor + $total;  }?>        
									<tr style="font-size: 12px;">      
										<td colspan="4" align="right"><b>Total Semua</b></td>      
										<td> <?php echo "Rp ".number_format($totkotor); ?></td>     
									</tr>     
							</tbody> 
						</table>
						<button type="button" onclick="location.href=('<?php echo site_url('uangkeluar/')?>')" class="btn btn-danger btn-sm">
							<span class='glyphicon glyphicon-shopping-cart'></span> Transaksi Baru
						</button> 
						<button type="submit" onclick="location.href=('<?php echo site_url('uangkeluar/data')?>')" class="btn btn-success btn-sm">
							<span class='glyphicon glyphicon-repeat'></span> Kembali
						</button>   	
					</thead>
				</table>            
			</div>             <!-- /.col -->           
		</div>           <!-- /.row -->         
	</div>         <!-- /.box-body -->       
</div>
 </section> 
 
