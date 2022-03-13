<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vw_archive_m extends MY_Model {

	protected $_table_name 		= 'vw_archive';
	protected $_primary_key		= 'page_id';
	protected $_primary_filter	= 'intval';
	protected $_order_by 		= 'archive_datenya desc';

}

/* End of file vw_archive_m.php */
/* Location: ./application/models/vw_archive_m.php */