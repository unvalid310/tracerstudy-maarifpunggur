<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vw_profile_m extends MY_Model {

	protected $_table_name 		= 'vw_profile';
	protected $_primary_key		= 'user_id';
	protected $_primary_filter	= 'intval';
	protected $_order_by 		= 'th_keluar asc';

}

/* End of file vw_profile_m.php */
/* Location: ./application/models/vw_profile_m.php */