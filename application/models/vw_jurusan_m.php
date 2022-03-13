<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vw_jurusan_m extends MY_Model {

	protected $_table_name 		= 'vw_jurusan';
	protected $_primary_key		= 'quest_id';
	protected $_primary_filter	= 'intval';
	protected $_order_by 		= 'jurusan asc';

}

/* End of file vw_jurusan_m.php */
/* Location: ./application/models/vw_jurusan_m.php */