<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tb_pages_m extends MY_Model {

	protected $_table_name 		= 'tb_pages';
	protected $_primary_key		= 'page_id';
	protected $_primary_filter	= 'intval';
	protected $_order_by 		= 'page_id desc';
	protected $_timestamps 		= TRUE;

}

/* End of file tb_pages_m.php */
/* Location: ./application/models/tb_pages_m.php */