<html lang="en" moznomarginboxes mozdisallowselectionprint> 
<head>     
	<title><?php echo $judul?></title>     
	<meta charset="utf-8">     
	<body onload="window.print()"> <div id="laporan"> 
		<table border="0" align="center" style="width:990px;margin-top:5px;border:none;marginbottom:0px;font-weight: bold;font-size: 16px"> 
			<tr rowspan="4" colspan="4" >
				<td rowspan="4" align="left" style="width: 90px"><img src="<?php echo base_url().'images/logo.GIF'?>" height="64" width="70"></td>     
				<td align="center"  style="font-size: 24px;font-weight: Bold;">MASJID SALMAN BALAI AHAD</td> 
			</tr> 
			<tr>     
				<td align="center"  style="font-size: 12px;font-weight: italic;font-face= Algerian">Jl. Prof. DR. Hamka Balai Ahad Lubuk Basung Kabupaten Agam </td> 
			</tr>   
			                
		</table>  
		<table border="0" align="center" style="width:990px;margin-top:5px;border:none;marginbottom:0px;font-weight: bold;font-size: 16px">
			<tr>     
				<td style="font-size: 12px;font-weight: Bold;" align="center"><b>
				_____________________________________________________________________________________________________________________________________________________________________
			</tr> <tr> </b>    
				<td style="font-size: 14px;font-weight: italic;font-style:algerian;" align="center">Laporan Uang Masuk</td>
			</tr> 
			<tr> 
			</table>
			<table border="1" align="center" style="width:990px;margin-bottom:10px;font-size: 14px"> 
				<thead> 
					<tr> 
						<th colspan="6" style="text-align:left;">Tanggal Input : <?php echo date("d M Y",strtotime($awal));?> s/d <?php echo date("d M Y",strtotime($akhir));?></th> 
					</tr>     
					<tr style="background-color: #d0cbcb; vertical-align: middle;height: 30px">         
						<th style="width: 30px;">No</th>         
						<th style="width: 130px">Jenis Kas</th>         
						<th style="width: 130px">Tanggal Masuk</th>         
						<th style="width: 120px">Donatur</th>
						<th style="width: 120px">Uraian</th>          
						<th style="width: 120px">Jumlah</th>   
						        
						 
					</tr> 
				</thead> 
				<tbody> 
					<?php      
					$no=0;      
					$total=0;     
					foreach($data->result_array() as $i) 
					{       
						$no++;     
						$total = $total + $i['jumlahmasuk'];?>     
						<tr>         
							<td style="text-align: center;"><?php echo $no;?></td>         
							<td><?php echo $i['kasmasuk'] ?></td>         
							<td><?php echo $i['tglmasuk'] ?></td>         
							<td><?php echo $i['nama_donatur'] ?></td>
							<td><?php echo $i['uraian'] ?></td> 						    
							<td align="right"><?php echo 'Rp '.number_format($i['jumlahmasuk']);?></td>
							     
						</tr> <?php }?>     
						<tr>         
							<td colspan="5" style="font-weight: bold;text-align: center">Total</td>         
							<td align="right"><?php echo 'Rp '.number_format($total);?></td>     
						</tr> 
					</tbody> 
				</table> 
				<table align="center" style="width:990px; border:none;margin-top:5px;margin-bottom:20px;fontsize: 14px">     
					<tr>         
						<td align="right">Padang, <?php echo date('d-M-Y')?></td>     
					</tr>     
					<tr>         
						<td align="right"></td>     
					</tr>         
					<tr>     
						<td><br/><br/><br/><br/></td>     
					</tr>         
					<tr>         
						<td align="right">( <?php echo $this->session->userdata('nama');?> )</td>     
					</tr>     
					<tr>         
						<td align="center"></td>     
					</tr> </table> <table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">     
						<tr>         
							<th><br/><br/></th>     
						</tr>     
						<tr>         
							<th align="left"></th>     
						</tr> 

					</table> 
				</div> 
			</body> 
			</html> 