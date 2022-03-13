<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vw_chart_kegiatan_m extends MY_Model {

	protected $_table_name 		= 'vw_chart_kegiatan';
	protected $_primary_key		= 'quest_id';
	protected $_primary_filter	= 'intval';
	protected $_order_by 		= 'th_keluar asc';

}

/* End of file vw_chart_kegiatan_m.php */
/* Location: ./application/models/vw_chart_kegiatan_m.php */