<script>
  $(document).ready(function(e){
    $('#tambah').click(function(e){
      var idkas=$('#idkas').val();
      var uraian=$('#uraian').val();
      var jumlah=$('#jumlah').val();
      datanya="&idkas="+idkas+"&uraian="+uraian+"&jumlah="+jumlah;
      $.ajax({
        url: "<?php echo site_url('uangkeluar/simpantemp')?>",
        data: datanya,
        type: "POST",
        cache:false,
        success:function(msg){
          location.href=('<?php echo site_url('uangkeluar')?>');
        }
      })
    });
$(document).on('keyup','#dis',function(){
  var dis=$('#dis').val();
  var totalbayar=$('#totalbayar').val();
  var t;
  t= totalbayar-(parseInt(dis)/100*parseInt(totalbayar));
  $('#tot').html('Rp '+t+'');
  $('#bersih').val(t);
});
});

</script>
<script>   
 function ambil(idkas,jeniskas)  
 {     
  $('#idkas').val(idkas);    
  $('#jeniskas').val(jeniskas); 
     
  $('#myModal').modal('hide');    
 } 
</script> 
<style type="text/css">
 .editor
{  
 display:none;   
} 
</style> 

<body>    
  <form method="post" action="<?php echo site_url('uangkeluar/simpantransaksi')?>" id="tmb" onSubmit="return cetak();">   
    <div class="box col-md-12">
      <div class="box-inner">
        <div class="box-header well" data-original-title="">
          <h2><i class="glyphicon glyphicon-user"></i> Data Uang Keluar</h2>        
        </div>
        <div class="box-content">
          <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">     
            <table class="table table-bordered">       
              <tr>         
                <td>Id Kas</td>         
                <td width="100"><div ><input type="text" class="form-control" readonly name="idkas" id="idkas">
                  <?php echo $this->session->flashdata('error');?>
                </td>      
                <td><button type="button" title="Cari Jenis Kas" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><span class='glyphicon glyphicon-search'>
                    </span>
                    </button>        
                </td>     
                <td>Jenis Kas</td>         
                <td width="100"><input type="text" class="form-control" readonly name="jeniskas" id="jeniskas">
                </td>
                <td>Uraian</td>        
                <td width="200">
                  <div><input type="text" class="form-control" name="uraian" id="uraian">
                  </div>
                </td> 
                <td>Jumlah</td>        
                <td width="100">
                  <div class="col-sm-12"><input type="text" class="form-control" name="jumlah" id="jumlah">
                  </div>
                </td> 
                    
              
                <td>
                  <button type="button" id="tambah" class="btn btn-primary">
                    <span class='glyphicon glyphicon-plus'>
                    </span>
                  </button>
                </td>      
              </tr>    
               
           
        
          <div class="col-xs-12" id="data_sementara">     
            <div class="box-body table-responsive">       
              <table class="table table-bordered">         
                <thead>           
                  <tr>             
                    <th width="100" align="center">No</th>            
                    <th width="150">ID Kas</th>             
                    <th width="200">Jenis Kas</th> 
                    <th width="250" colspan="3">Uraian</th>                       
                    <th width="150" colspan="2">Jumlah Uang</th>                  
                    <th width="50">Aksi</th>          
                  </tr>       
                </thead>         
                <tbody>        
                  <?php $nomor=1; $total=0; foreach($datatemp->result_array() as $d){      
                    $subtotal = $d['jumlahkeluar'] ;            
                    $total = $total + $subtotal;?>          
                  <tr>            
                    <td align="center">
                      <?php echo $nomor?>
                      <input id="dataid" type="text" class="form-control editor" value="<?php echo $d['idkaskeluar']?>"/>
                    </td>             
                    <td><?php echo $d['idkaskeluar']; ?>
                    </td>             
                    <td><?php echo $d['jeniskas'] ?>
                    </td>  
                    <td colspan="3"><?php echo $d['uraian'] ?>
                    </td>  
                    <td style="cursor:pointer;" colspan="2">             
                      <span class="caption"><?php echo "Rp ".number_format($d['jumlahkeluar']);?></span>           
                      <input type="text" onKeyDown="update_jumlah(event,'<?php echo $d['idkaskeluar']?>')" class="form-control editor" value="<?php echo $d['jumlahkeluar']?>"/>     
                    </td> 
                    <td>              
                      <a class='btn btn-danger btn-xs'  title='Hapus Item' width="30" href="<?php echo site_url('uangkeluar/hapusitem/'.$d['idkaskeluar'].'/'.$d['jumlahkeluar'])?>">
                      <span class='glyphicon glyphicon-remove'>Hapus</span></a>            
                    </td>          
                  </tr> 
                  <?php $nomor++; } ?>       
                </tbody>        
                <tfoot> 
                  <tr>            
                    <th colspan="6">SUB TOTAL</th>           
                    <th><?php echo "Rp ".number_format($total)?>               
                      <input type="hidden" id="totalbayar" name="totalbayar" value="<?php echo $total?>"/>       
                    </th>         
                  </tr>               
                  <tr>            
                    <td colspan="7" align="right">Kode Uang Keluar</td>            
                    <td colspan="2">             
                      <div class="input-group col-sm-8">                
                      <input type="text" class="form-control" name="nofaktur" id="nofaktur" required>           
                    </td>         
                  </tr>        
                  <tr>         
                    <td colspan="7" align="right">Tanggal Keluar</td>             
                    <td colspan="2">             
                      <div class="input-group date col-sm-8">                
                        <div class="input-group-addon"> 
                        <i class="fa fa-calendar"></i>                
                        </div>              
                        <input type="date" class="form-control pull-right" id="tglkeluar" name="tglkeluar" placeholder="mm-dd-yyyy" required>             
                      </div>             
                    </td>          
                  </tr>       
                  <tr> 
                    <td colspan="5">           
                      <button type="submit" class="btn btn-primary btn-sm"/>
                        <span class=' glyphicon glyphicon-download-alt'></span> Simpan Transaksi
                      </button>              
                      <button type="submit" onClick="location.href=('<?php echo site_url('uangkeluar/data')?>')" class="btn btn-success btn-sm">
                        <span class='glyphicon glyphicon-repeat'></span> Kembali
                      </button>     
                    </td> 	     
                  </tr>      
                </tfoot>      
            </table>      
          </div>     
        </div> 
      </div> 
    </div>  
  </form> 
</body>   
    
   
 
<!-- Modal -->   
<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" arialabelledby="myModalLabel">     
  <div class="modal-dialog modal-lg" role="document">  
    <div class="modal-content">     
      <div class="modal-header">        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span ariahidden="true">&times;	
          </span>	
        </button>          
        <h4 class="modal-title" id="myModalLabel">Cari Data Jenis Kas</h4>         
          <div class="box-body table-responsive">         
            <table class="table table-bordered table-striped table-hover" id="datatiket">      
              <thead>
                <tr>                
                  <th width="5">No</th>         
                    <th>ID Kas</th>        
                    <th>Jenis Kas</th>                 
                    <th>Aksi</th>       
                </tr>             
              </thead>   
              <tbody>            
                <?php $no=1;foreach($datajeniskas->result_array() as $r){?>             
                <tr>                
                  <td><?php echo $no ?></td>              
                  <td><?php echo $r['kd_jeniskas'] ?></td>                
                  <td><?php echo $r['jeniskas'] ?></td>                                                       
                  <td><button class="btn btn-primary btn-xs" type="button" onClick="return ambil('<?php echo $r['kd_jeniskas']?>','<?php echo $r['jeniskas']?>')"><span class='glyphicon glyphicon-check'>
                    </span> Pilih</button> 
                  </td>             
                </tr>             
                <?php $no++; } ?>                  
              </tbody>           
            </table>          
          </div>      
      </div>       
    </div>    
  </div> 
</div> 
<!-- /Modal -->    