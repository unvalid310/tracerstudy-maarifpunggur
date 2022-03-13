<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vw_berita_m extends MY_Model {

	protected $_table_name 		= 'vw_berita';
	protected $_primary_key		= 'page_id';
	protected $_primary_filter	= 'intval';
	protected $_order_by 		= 'page_id desc';

}

/* End of file vw_berita_m.php */
/* Location: ./application/models/vw_berita_m.php */