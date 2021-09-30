<?php
	class Modellaporan extends CI_Model
	{

		function __construct()
		{
			parent::__construct();
		}

		function lap_uangmasuk_periode($tglawal,$tglakhir)
		{
			$hs1=$this->db->query("SELECT kasmasuk,DATE_FORMAT(tgl_uangmasuk,'%d %M %Y') AS tglmasuk,nama_donatur,jumlahmasuk,uraian FROM uangmasuk JOIN donatur ON donatur=kd_donatur WHERE DATE(tgl_uangmasuk) BETWEEN '$tglawal' AND '$tglakhir' GROUP BY kd_masuk");
			return $hs1;
		}

		function lap_uangmasukjenis_periode($tglawal1,$tglakhir1,$jenis)
		{
			$hs1=$this->db->query("SELECT kasmasuk,jeniskas,DATE_FORMAT(tgl_uangmasuk,'%d %M %Y') AS tglmasuk,nama_donatur,jumlahmasuk,uraian FROM uangmasuk join jeniskas on kasmasuk=kd_jeniskas JOIN donatur ON donatur=kd_donatur WHERE DATE(tgl_uangmasuk) BETWEEN '$tglawal1' AND '$tglakhir1' and kasmasuk='$jenis' GROUP BY kd_masuk");
			return $hs1;
		}

		function lap_keuangan_periode($tglawal,$tglakhir)
		{
			$hs1=$this->db->query("SELECT DATE_FORMAT(tanggal,'%d %M %Y') AS tgl,jeniskas,uraian,uangmasuk,uangkeluar,jumlahh FROM keuangan join jeniskas on idkas=kd_jeniskas WHERE DATE(tanggal) BETWEEN '$tglawal' AND '$tglakhir' order by tanggal asc");
			return $hs1;
		}

		function lap_keuanganjenis_periode($tglawal1,$tglakhir1,$jenis)
		{
			$hs1=$this->db->query("SELECT DATE_FORMAT(tanggal,'%d %M %Y') AS tgl,jeniskas,uraian,uangmasuk,uangkeluar,jumlahh FROM keuangan join jeniskas on idkas=kd_jeniskas WHERE DATE(tanggal) BETWEEN '$tglawal1' AND '$tglakhir1' and kd_jeniskas='$jenis' order by tanggal asc");
			return $hs1;
		}

		function lap_uangkeluar_periode($tglawal,$tglakhir)
		{
			$hs1=$this->db->query("SELECT kd_ukeluar,jeniskas,DATE_FORMAT(tanggal,'%d %M %Y') AS tglkeluar,uangkeluar.jumlah,uraian FROM uangkeluar join jeniskas on kaskeluar=kd_jeniskas WHERE DATE(tanggal) BETWEEN '$tglawal' AND '$tglakhir' GROUP BY kd_ukeluar");
			return $hs1;
		}
		function lap_uangkeluarjenis_periode($tglawal,$tglakhir,$jenis)
		{
			$hs1=$this->db->query("SELECT kd_ukeluar,jeniskas,DATE_FORMAT(tanggal,'%d %M %Y') AS tglkeluar,uangkeluar.jumlah,uraian FROM uangkeluar join jeniskas on kaskeluar=kd_jeniskas WHERE DATE(tanggal) BETWEEN '$tglawal' AND '$tglakhir' and kaskeluar='$jenis' GROUP BY kd_ukeluar");
			return $hs1;
		}

		function lap_jadwalceramah_periode()
		{
			$hs1=$this->db->query("SELECT kd_jadwal,bulan,tahun,tanggal,hari,judul,nama_penceramah,ket FROM jadwalceramah join penceramah on penceramah=kd_penceramah Group by kd_jadwal");
			return $hs1;
		}

		function lap_jadwalceramahbulan($bulan,$tahun)
		{
			$hs1=$this->db->query("SELECT kd_jadwal,bulan,tahun,tanggal,hari,judul,nama_penceramah,ket FROM jadwalceramah join penceramah on penceramah=kd_penceramah WHERE bulan='$bulan' AND tahun='$tahun' GROUP BY kd_jadwal");
			return $hs1;
		}

		function lap_jadwalceramahtahun($tahun)
		{
			$hs1=$this->db->query("SELECT kd_jadwal,bulan,tahun,tanggal,hari,judul,nama_penceramah,ket FROM jadwalceramah join penceramah on penceramah=kd_penceramah WHERE tahun='$tahun' GROUP BY kd_jadwal ");
			return $hs1;
		}

		function lap_jadwalceramahminggu($minggu,$bulan,$tahun)
		{
			$hs1=$this->db->query("SELECT kd_jadwal,bulan,tahun,tanggal,hari,judul,nama_penceramah,ket FROM jadwalceramah join penceramah on penceramah=kd_penceramah WHERE bulan='$bulan' AND tahun='$tahun' and tanggal='$minggu' GROUP BY kd_jadwal");
			return $hs1;
		}

		function lap_kegiatan_periode($tglawal,$tglakhir)
		{
			$hs1=$this->db->query("SELECT kd_kegiatan,DATE_FORMAT(tanggal,'%d %M %Y') AS tglkegiatan,nama,ketua,tanggal,keterangan FROM kegiatan WHERE DATE(tanggal) BETWEEN '$tglawal' AND '$tglakhir' GROUP BY kd_kegiatan");
			return $hs1;
		}

		function lap_donatur()
		{
			$hs1=$this->db->query("SELECT * FROM donatur ORDER BY kd_donatur");
			return $hs1;
		}

		function lap_penceramah()
		{
			$hs1=$this->db->query("SELECT * FROM penceramah ORDER BY kd_penceramah");
			return $hs1;
		}

		function lap_pengurus()
		{
			$hs1=$this->db->query("SELECT * FROM pengurus ORDER BY kd_pengurus");
			return $hs1;
		}

	}