<ul class="nav nav-pills nav-stacked main-menu">
    <li class="nav-header">Main</li>  
    <?php $h=$this->session->userdata('hakakses'); ?>
	<?php if($h=='superadmin'){?>                    
	<li><a class="ajax-link" href="<?php echo base_url('index.php/template')?>">
        <i class="glyphicon glyphicon-home"></i>
        <span> Beranda</span></a>
    </li>
	<li class="nav-header">Master</li>
    <li><a class="ajax-link" href="<?php echo base_url('index.php/donatur')?>">
        <i class="glyphicon glyphicon-user"></i>
        <span> Data Donatur</span></a>
    </li>
    <li><a class="ajax-link" href="<?php echo base_url('index.php/pengurus')?>">
        <i class="glyphicon glyphicon-user"></i>
        <span> Data Pengurus</span></a>
    </li>
    <li><a class="ajax-link" href="<?php echo base_url('index.php/penceramah')?>">
        <i class="glyphicon glyphicon-user"></i>
        <span> Data Penceramah</span></a>
    </li>
    <li><a class="ajax-link" href="<?php echo base_url('index.php/jeniskas')?>">
        <i class="glyphicon glyphicon-list"></i>
        <span> Data Jenis Kas</span></a>
    </li>
    <li><a class="ajax-link" href="<?php echo base_url('index.php/kegiatan')?>">
        <i class="glyphicon glyphicon-th"></i>
        <span> Data Kegiatan</span></a>
    </li>
	<li class="nav-header">Transaksi</li>
    <li><a class="ajax-link" href="<?php echo base_url('index.php/uangmasuk/data')?>">
        <i class="glyphicon glyphicon-download"></i>
        <span> Data Uang Masuk</span></a>
    </li>
    <li><a class="ajax-link" href="<?php echo base_url('index.php/uangkeluar/data')?>">
        <i class="glyphicon glyphicon-upload"></i>
        <span> Data Uang Keluar</span></a>
    </li> 
    <li><a class="ajax-link" href="<?php echo base_url('index.php/ceramah')?>">
        <i class="glyphicon glyphicon-bullhorn"></i>
        <span> Jadwal Ceramah</span></a>
    </li>
	<li class="nav-header">Laporan</li>
    <li><a href="<?php echo base_url('index.php/laporan/keuangan')?>">
        <i class="glyphicon glyphicon-list-alt"></i>
        <span> Laporan Keuangan</span></a>
    </li>
    <li><a href="<?php echo base_url('index.php/laporan/uangmasuk')?>">
        <i class="glyphicon glyphicon-list-alt"></i>
        <span> Laporan Uang Masuk</span></a>
    </li>
	<li><a href="<?php echo base_url('index.php/laporan/uangkeluar')?>">
        <i class="glyphicon glyphicon-list-alt"></i>
        <span> Laporan Uang Keluar</span></a>
    </li>
	<li><a href="<?php echo base_url('index.php/laporan/jadwalceramah')?>">
        <i class="glyphicon glyphicon-list-alt"></i>
        <span> Laporan Jadwal Ceramah</span></a>
    </li>
	<li><a href="<?php echo base_url('index.php/laporan/kegiatan')?>">
        <i class="glyphicon glyphicon-list-alt"></i>
        <span> Laporan Data Kegiatan</span></a>
    </li>
    <li><a href="<?php echo base_url('index.php/laporan/lap_penceramah')?>">
        <i class="glyphicon glyphicon-list-alt"></i>
        <span> Laporan Penceramah</span></a>
    </li>
    <li><a href="<?php echo base_url('index.php/laporan/lap_donatur')?>">
        <i class="glyphicon glyphicon-list-alt"></i>
        <span> Laporan Data Donatur</span></a>
    </li>
    <li><a href="<?php echo base_url('index.php/laporan/lap_pengurus')?>">
        <i class="glyphicon glyphicon-list-alt"></i>
        <span> Laporan Data Pengurus</span></a>
    </li>
    
<?php } else if($h=='Bendahara'){?>
<li><a class="ajax-link" href="<?php echo base_url('index.php/template')?>">
        <i class="glyphicon glyphicon-home"></i>
        <span> Beranda</span></a>
    </li>
	<li class="nav-header">Master</li>
    <li><a class="ajax-link" href="<?php echo base_url('index.php/donatur')?>">
        <i class="glyphicon glyphicon-user"></i>
        <span> Data Donatur</span></a>
    </li>
    
    <li><a class="ajax-link" href="<?php echo base_url('index.php/jeniskas')?>">
        <i class="glyphicon glyphicon-list"></i>
        <span> Data Jenis Kas</span></a>
    </li>
    
	<li class="nav-header">Transaksi</li>
    <li><a class="ajax-link" href="<?php echo base_url('index.php/uangmasuk/data')?>">
        <i class="glyphicon glyphicon-download"></i>
        <span> Data Uang Masuk</span></a>
    </li>
    <li><a class="ajax-link" href="<?php echo base_url('index.php/uangkeluar/data')?>">
        <i class="glyphicon glyphicon-upload"></i>
        <span> Data Uang Keluar</span></a>
    </li> 
    
	<li class="nav-header">Laporan</li>
    <li><a href="<?php echo base_url('index.php/laporan/keuangan')?>">
        <i class="glyphicon glyphicon-list-alt"></i>
        <span> Laporan Keuangan</span></a>
    </li>
    <li><a href="<?php echo base_url('index.php/laporan/uangmasuk')?>">
        <i class="glyphicon glyphicon-list-alt"></i>
        <span> Laporan Uang Masuk</span></a>
    </li>
	<li><a href="<?php echo base_url('index.php/laporan/uangkeluar')?>">
        <i class="glyphicon glyphicon-list-alt"></i>
        <span> Laporan Uang Keluar</span></a>
    </li>
	
    <li><a href="<?php echo base_url('index.php/laporan/lap_donatur')?>">
        <i class="glyphicon glyphicon-list-alt"></i>
        <span> Laporan Data Donatur</span></a>
    </li>
    
<?php } else if($h=='Sekretaris'){?>
<li><a class="ajax-link" href="<?php echo base_url('index.php/template')?>">
        <i class="glyphicon glyphicon-home"></i>
        <span> Beranda</span></a>
    </li>
    <li><a class="ajax-link" href="<?php echo base_url('index.php/pengurus')?>">
        <i class="glyphicon glyphicon-user"></i>
        <span> Data Pengurus</span></a>
    </li>
    <li><a class="ajax-link" href="<?php echo base_url('index.php/penceramah')?>">
        <i class="glyphicon glyphicon-user"></i>
        <span> Data Penceramah</span></a>
    </li>
    
    <li><a class="ajax-link" href="<?php echo base_url('index.php/kegiatan')?>">
        <i class="glyphicon glyphicon-th"></i>
        <span> Data Kegiatan</span></a>
    </li>
	<li class="nav-header">Transaksi</li>
    <li><a class="ajax-link" href="<?php echo base_url('index.php/ceramah')?>">
        <i class="glyphicon glyphicon-bullhorn"></i>
        <span> Jadwal Ceramah</span></a>
    </li>
	<li class="nav-header">Laporan</li>
	<li><a href="<?php echo base_url('index.php/laporan/jadwalceramah')?>">
        <i class="glyphicon glyphicon-list-alt"></i>
        <span> Laporan Jadwal Ceramah</span></a>
    </li>
	<li><a href="<?php echo base_url('index.php/laporan/kegiatan')?>">
        <i class="glyphicon glyphicon-list-alt"></i>
        <span> Laporan Data Kegiatan</span></a>
    </li>
    <li><a href="<?php echo base_url('index.php/laporan/lap_penceramah')?>">
        <i class="glyphicon glyphicon-list-alt"></i>
        <span> Laporan Penceramah</span></a>
    </li>
    <li><a href="<?php echo base_url('index.php/laporan/lap_pengurus')?>">
        <i class="glyphicon glyphicon-list-alt"></i>
        <span> Laporan Data Pengurus</span></a>
    </li>
    <?php } else {?>
    <li class="nav-header">Laporan</li>
    <li><a href="<?php echo base_url('index.php/laporan/keuangan')?>">
        <i class="glyphicon glyphicon-list-alt"></i>
        <span> Laporan Keuangan</span></a>
    </li>
    <li><a href="<?php echo base_url('index.php/laporan/uangmasuk')?>">
        <i class="glyphicon glyphicon-list-alt"></i>
        <span> Laporan Uang Masuk</span></a>
    </li>
	<li><a href="<?php echo base_url('index.php/laporan/uangkeluar')?>">
        <i class="glyphicon glyphicon-list-alt"></i>
        <span> Laporan Uang Keluar</span></a>
    </li>
	<li><a href="<?php echo base_url('index.php/laporan/jadwalceramah')?>">
        <i class="glyphicon glyphicon-list-alt"></i>
        <span> Laporan Jadwal Ceramah</span></a>
    </li>
	<li><a href="<?php echo base_url('index.php/laporan/kegiatan')?>">
        <i class="glyphicon glyphicon-list-alt"></i>
        <span> Laporan Data Kegiatan</span></a>
    </li>
    <li><a href="<?php echo base_url('index.php/laporan/lap_penceramah')?>">
        <i class="glyphicon glyphicon-list-alt"></i>
        <span> Laporan Penceramah</span></a>
    </li>
    <li><a href="<?php echo base_url('index.php/laporan/lap_donatur')?>">
        <i class="glyphicon glyphicon-list-alt"></i>
        <span> Laporan Data Donatur</span></a>
    </li>
    <li><a href="<?php echo base_url('index.php/laporan/lap_pengurus')?>">
        <i class="glyphicon glyphicon-list-alt"></i>
        <span> Laporan Data Pengurus</span></a>
    </li>
    	
<?php } ?>
</ul>