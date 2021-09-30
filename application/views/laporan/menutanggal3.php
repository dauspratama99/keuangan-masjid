<form method="POST" action="<?php echo site_url('laporan/lap_jadwalceramahtahun')?>" target="_blank">
<div class= "row">
	<div class="box col-md-4 ">
		<div class="box-inner homepage-box">
			<div class="box-header well">
				<h2><i class="glyphicon glyphicon-th"></i> Cetak Berdasarkan Tahun</h2>  
			</div>
			<div class="box-content">
				<table>
					<tr>
						<td colspan="3" align="right">Tahun  </td> 
					</tr>
					<tr>            
						<td colspan="10">               
							<div class="input-group date col-sm-12">                 
								<div class="input-group-addon">                   
									<i class="fa fa-calendar"></i>                
								</div>                 
								<select class='form-control' name='tahun'>
									<span style="font-weight: bold; color: red;"><?php echo form_error('tahun') ?></span>
									<option value='0'>--pilih--</option>
									<option value='2019'>2019</option>
									<option value='2020'>2020</option>
									<option value='2021'>2021</option>   
									<option value='2022'>2022</option> 
									<option value='2023'>2023</option> 
									<option value='2024'>2024</option>
									<option value='2025'>2025</option>   
                  
                				</select>            
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
					<tr> 
						<td>Cetak Seluruhnya <td> 
					</tr>
					<tr> 
						<td>            
							<div class="modal-footer">           
								 <a class="btn btn-primary" href="<?php echo site_url('laporan/lap_jadwalceramah/') ?>">
								    <i class="glyphicon glyphicon-print icon-white"></i>
								    Cetak Seluruhnya
								    </a></div>       
						</td> 
					</tr>  
				</table>
			</div>
		</div>
	</div>
</form>
<form method="POST" action="<?php echo site_url('laporan/lap_jadwalceramahbulan')?>" target="_blank">
<div class= "row">
	<div class="box col-md-4 ">
		<div class="box-inner homepage-box">
			<div class="box-header well">
				<h2><i class="glyphicon glyphicon-th"></i> Cetak Berdasarkan Bulan </h2>  
			</div>
			<div class="box-content">
				<table>
					<tr>
						<td colspan="3" align="right">  Bulan   </td>  
					</tr>
					<tr>           
						<td colspan="5">               
							<div class="input-group date col-sm-14">                 
								<div class="input-group-addon">                   
									<i class="fa fa-calendar"></i>                
								</div>                 
								<select class='form-control' name='bulan'>
									<span style="font-weight: bold; color: red;"><?php echo form_error('bulan') ?></span>
									<option value='0'>--pilih--</option>
									<option value='Januari'>Januari</option>
									<option value='Februari'>Februari</option>
									<option value='Maret'>Maret</option>   
									<option value='April'>April</option> 
									<option value='mei'>mei</option> 
									<option value='Juni'>Juni</option>
									<option value='Juli'>Juli</option>
									<option value='Agustus'>Agustus</option>
									<option value='September'>September</option>
									<option value='Oktober'>Oktober</option>
									<option value='November'>November</option>
									<option value='Desember'>Desember</option>
                				</select>                
							</div>              
						</td> 
					</tr> 
					<tr>
						<td colspan="7" align="right">Tahun  </td> 
					<tr>
					</tr>            
						<td colspan="12">               
							<div class="input-group date col-sm-12">                 
								<div class="input-group-addon">                   
									<i class="fa fa-calendar"></i>                
								</div>                 
								<select class='form-control' name='tahun'>
									<span style="font-weight: bold; color: red;"><?php echo form_error('tahun') ?></span>
									<option value='0'>--pilih--</option>
									<option value='2019'>2019</option>
									<option value='2020'>2020</option>
									<option value='2021'>2021</option>   
									<option value='2022'>2022</option> 
									<option value='2023'>2023</option> 
									<option value='2024'>2024</option>
									<option value='2025'>2025</option>   
                  
                				</select>            
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
<form method="POST" action="<?php echo site_url('laporan/lap_jadwalceramahminggu')?>" target="_blank">
<div class= "row">
	<div class="box col-md-4">
		<div class="box-inner homepage-box">
			<div class="box-header well">
				<h2><i class="glyphicon glyphicon-th"></i> Cetak Berdasarkan Minggu</h2>  
			</div>
			<div class="box-content">
				<table>
					<tr>
						<td colspan="3" align="right">Minggu  </td> 
					</tr>
					<tr>            
						<td colspan="10">               
							<div class="input-group date col-sm-12">                 
								<div class="input-group-addon">                   
									<i class="fa fa-calendar"></i>                
								</div>                 
								<select class='form-control' name='minggu'>
									<span style="font-weight: bold; color: red;"><?php echo form_error('minggu') ?></span>
									<option value='0'>--pilih--</option>
									<option value='Minggu Ke-1'>Minggu Ke-1</option>
									<option value='Minggu Ke-2'>Minggu Ke-2</option>
									<option value='Minggu Ke-3'>Minggu Ke-3</option>   
									<option value='Minggu Ke-4'>Minggu Ke-4</option> 
									<option value='Minggu Ke-5'>Minggu Ke-5</option> 
                				</select>            
							</div>              
						</td> 
					</tr>
					<tr>
						<td colspan="3" align="right">  Bulan   </td>  
						<td colspan="3" align="right">Tahun  </td>
					</tr>
					<tr>           
						<td colspan="3">               
							<div class="input-group date col-sm-14">                 
								<div class="input-group-addon">                   
									<i class="fa fa-calendar"></i>                
								</div>                 
								<select class='form-control' name='bulan'>
									<span style="font-weight: bold; color: red;"><?php echo form_error('bulan') ?></span>
									<option value='0'>--pilih--</option>
									<option value='Januari'>Januari</option>
									<option value='Februari'>Februari</option>
									<option value='Maret'>Maret</option>   
									<option value='April'>April</option> 
									<option value='mei'>mei</option> 
									<option value='Juni'>Juni</option>
									<option value='Juli'>Juli</option>
									<option value='Agustus'>Agustus</option>
									<option value='September'>September</option>
									<option value='Oktober'>Oktober</option>
									<option value='November'>November</option>
									<option value='Desember'>Desember</option>
                				</select>                
							</div>              
						</td> 
						<td colspan="3">               
							<div class="input-group date col-sm-14">                 
								<div class="input-group-addon">                   
									<i class="fa fa-calendar"></i>                
								</div>                 
								<select class='form-control' name='tahun'>
									<span style="font-weight: bold; color: red;"><?php echo form_error('tahun') ?></span>
									<option value='0'>--pilih--</option>
									<option value='2019'>2019</option>
									<option value='2020'>2020</option>
									<option value='2021'>2021</option>   
									<option value='2022'>2022</option> 
									<option value='2023'>2023</option> 
									<option value='2024'>2024</option>
									<option value='2025'>2025</option>   
                  
                				</select>            
							</div>              
						</td> 
					</tr>            
						
					
					<tr>   
						<td colspan="5" align="center">            
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
