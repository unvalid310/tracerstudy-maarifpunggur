<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vw_alumni_m extends MY_Model {

	protected $_table_name 		= 'vw_alumni';
	protected $_primary_key		= 'user_id';
	protected $_primary_filter	= 'intval';
	protected $_order_by 		= 'th_keluar asc';

}

/* End of file vw_alumni_m.php */
/* Location: ./application/models/vw_alumni_m.php */