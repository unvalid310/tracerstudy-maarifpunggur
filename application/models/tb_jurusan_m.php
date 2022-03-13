<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tb_jurusan_m extends MY_Model {

	protected $_table_name 		= 'tb_jurusan';
	protected $_primary_key		= 'jurusan_id';
	protected $_primary_filter	= 'intval';
	protected $_order_by 		= 'nama_jurusan asc';
	protected $_timestamps 		= FALSE;

}

/* End of file tb_jurusan_m.php */
/* Location: ./application/models/tb_jurusan_m.php */