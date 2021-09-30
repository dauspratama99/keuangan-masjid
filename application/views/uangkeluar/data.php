<div class="row">
	<div class="box col-md-12">
	<a href="<?php echo site_url('uangkeluar') ?>" class="btn btn-primary">
	<i class="glyphicon glyphicon-plus-sign"></i> Tambah Data </a>   
</div>      
<div class="box col-md-12">
    <div class="box-inner">
		<div class="box-header well" data-original-title="">
        	<h2><i class="glyphicon glyphicon-user"></i> Data Uang Keluar</h2>        
        </div>
		<div class="box-content">
			<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">		
                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive dataTable" id="dataTables-example" aria-describedby="DataTables_Table_0_info">                
                    <thead>
						<tr>
							<th width="5"><font color="#000000">No</th>
							<th><font color="#000000">No Faktur</th>
							<th><font color="#000000">Jenis Kas</th>
							<th><font color="#000000">Tanggal Keluar</th>
							<th><font color="#000000">Jumlah</th>
							<th><font color="#000000">Uraian</th>
							
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach($tampil->result_array() as $r){
						?>
						<tr>
							<td align="center"><font color="#000000"><?php echo $no?></td>
							<td><font color="#000000"><?php echo $r['kd_ukeluar'];?></a></td>
							<td><font color="#000000"><?php echo $r['kaskeluar'];?></a></td>
							<td><font color="#000000"><?php echo $r['keluartgl'];?></a></td>							
							<td><font color="#000000"><?php echo "Rp.".number_format($r['jumlah']);?></td>
							<td><font color="#000000"><?php echo $r['uraian'];?></a></td>
							 
						</tr>
						<?php $no++; }?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
	
<script>
	$(function()
	{
		$('#data').DataTable();
	});
</script>

							
		
		
		
