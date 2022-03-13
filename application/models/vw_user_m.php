<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vw_user_m extends MY_Model {

	protected $_table_name 		= 'vw_user';
	protected $_primary_key		= 'user_id';
	protected $_primary_filter	= 'intval';
	protected $_order_by 		= 'user_id desc';

}

/* End of file vw_user_m.php */
/* Location: ./application/models/vw_user_m.php */