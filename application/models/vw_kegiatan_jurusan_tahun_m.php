<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vw_kegiatan_jurusan_tahun_m extends MY_Model {
	
	protected $_table_name 		= 'vw_kegiatan_jurusan_tahun';
	protected $_primary_key		= 'quest_id';
	protected $_primary_filter	= 'intval';
	protected $_order_by 		= 'th_keluar asc';

}

/* End of file vw_kegiatan_jurusan_tahun_m.php */
/* Location: ./application/models/vw_kegiatan_jurusan_tahun_m.php */