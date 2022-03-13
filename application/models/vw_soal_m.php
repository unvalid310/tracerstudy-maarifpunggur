<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vw_soal_m extends MY_Model {

	function getSoal()	{
		# code...
		$soal = array(
			'Seberapa erat hubungan antara bidang keahlian terhadap pekerjaan anda',
			'Seberapa erat pengetahuan di bidang atau disiplin ilmu anda terhadap pekerjaan',
			'Seberapa erat pengetahuan di luar bidang atau disiplin ilmu anda terhadap pekerjaan',
			'Seberapa erat hubungan antara bidang keahlian terhadap program study anda',
			'Seberapa erat pengetahuan di bidang atau disiplin ilmu anda terhadap program study yang anda ambil',
			'Seberapa erat pengetahuan di luar bidang atau disiplin ilmu anda terhadap program study',
			'Seberapa erat hubungan antara bidang keahlian terhadap bidang usaha anda',
			'Seberapa erat pengetahuan di bidang atau disiplin ilmu anda terhadap usaha yang anda jalankan',
			'Seberapa erat pengetahuan di luar bidang atau disiplin ilmu anda terhadap bidang usaha anda '
		);

		return $soal;
	}

	function getCategory() {
		$category = array(
			'Dunia Kerja',
			'Dunia Perkuliahan',
			'Dunia Usaha' 
		);

		return $category;
	}
}

/* End of file vw_soal_m.php */
/* Location: ./application/models/vw_soal_m.php */