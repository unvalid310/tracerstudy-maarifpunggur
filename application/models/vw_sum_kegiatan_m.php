<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vw_sum_kegiatan_m extends MY_Model {

	protected $_table_name 		= 'vw_sum_kegiatan';
	protected $_primary_key		= 'quest_id';
	protected $_primary_filter	= 'intval';
	protected $_order_by 		= 'quest_id desc';

}

/* End of file vw_sum_kegiatan_m.php */
/* Location: ./application/models/vw_sum_kegiatan_m.php */