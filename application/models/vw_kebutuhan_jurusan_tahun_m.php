<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vw_kebutuhan_jurusan_tahun_m extends MY_Model {

	protected $_table_name 		= 'vw_kebutuhan_jurusan_tahun';
	protected $_primary_key		= 'quest_id';
	protected $_primary_filter	= 'intval';
	protected $_order_by 		= 'jurusan asc';

}

/* End of file vw_kebutuhan_jurusan_tahun_m.php */
/* Location: ./application/models/vw_kebutuhan_jurusan_tahun_m.php */