<form method="POST" action="<?php echo site_url('laporan/lap_uangmasuk')?>" target="_blank">
<div class= "row">
	<div class="box col-md-6 ">
		<div class="box-inner homepage-box">
			<div class="box-header well">
				<h2><i class="glyphicon glyphicon-th"></i> Cetak Seluruhnya</h2>  
			</div>
			<div class="box-content">
				<table>
					<tr> 
						<td colspan="7" align="right">  Tanggal Awal   </td>             
						<td colspan="2">               
							<div class="input-group date col-sm-8">                 
								<div class="input-group-addon">                   
									<i class="fa fa-calendar"></i>                
								</div>                 
								<input type="date" class="form-control pull-right" id="datepicker" name="tglawal" placeholder="mm-dd-yyyy" >               
							</div>              
						</td> 
					</tr> 
					<tr>             
						<td colspan="7" align="right">  Tanggal Akhir   </td>             
						<td colspan="2">               
							<div class="input-group date col-sm-8">                 
								<div class="input-group-addon">                   
									<i class="fa fa-calendar"></i>                
								</div>                 
								<input type="date" class="form-control pull-right" id="datepicker" name="tglakhir" placeholder="mm-dd-yyyy" xa>               
							</div>              
						</td> 
					</tr> 
					<tr>   
						<td>            
							<div class="modal-footer">           
								 <button type="submit" class="btn btn-primary" data-dismiss="modal"><i class="glyphicon glyphicon-print"></i> Cetak</button>   
								<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fatimes"></i> Tutup</button>         
							</div>       
						</td> 
					</tr>  
				</table>
			</div>
		</div>
	</div>
</form>
<form method="POST" action="<?php echo site_url('laporan/lap_uangmasukjenis')?>" target="_blank">
	<div class="box col-md-6">
		<div class="box-inner homepage-box">
			<div class="box-header well">
				<h2><i class="glyphicon glyphicon-th"></i> Cetak Berdasarkan Jenis Kas</h2>  
			</div>
			<div class="box-content">
				<table>
					<tr>
						<td colspan="7" align="right">  Jenis Kas   </td>             
						<td colspan="2">               
							<div class="input-group date col-sm-8">                 
								<div class="input-group-addon">                   
									<i class="fa fa-calendar"></i>                
								</div>                 
								<select class="form-control select2" style="width: 100%;" name="jeniskas" id="jeniskas" required>            
									<option selected>-Pilih-</option>                 
									<?php foreach($jeniskas->result_array() as $d){?>             
									<option value="<?php echo $d['kd_jeniskas']?>"><?php echo $d['jeniskas']?></option>             
									<?php }?>             
								</select>                
							</div>              
						</td> 
					</tr> 
					<tr>    
						<td colspan="7" align="right">  Tanggal Awal   </td>             
						<td colspan="2">               
							<div class="input-group date col-sm-8">                 
								<div class="input-group-addon">                   
									<i class="fa fa-calendar"></i>                
								</div>                 
								<input type="date" class="form-control pull-right" id="datepicker1" name="tglawal1" placeholder="mm-dd-yyyy" >               
							</div>              
						</td> 
					</tr> 
					<tr>             
 						<td colspan="7" align="right">  Tanggal Akhir   </td>             
 						<td colspan="2">               
 							<div class="input-group date col-sm-8">                 
 								<div class="input-group-addon">                   
 									<i class="fa fa-calendar"></i>                
 					 			</div>                 
 					 			<input type="date" class="form-control pull-right" id="datepicker1" name="tglakhir1" placeholder="mm-dd-yyyy" >               
 							</div>              
 						</td> 
 					</tr> 
 					<tr>   
 						<td>            
 							<div class="modal-footer">           
								<button type="submit" class="btn btn-primary"> <i class="glyphicon glyphicon-print"></i> Cetak</button> </a>          
								<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fatimes"></i> Tutup</button>         
							</div>       
						</td> 
 					</tr>  
 				</table>  
			</div>
		</div>
	</div>
</div>
</form>

  
 
 