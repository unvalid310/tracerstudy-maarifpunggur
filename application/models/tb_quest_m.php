<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tb_quest_m extends MY_Model {

	protected $_table_name 		= 'tb_quest';
	protected $_primary_key		= 'quest_id';
	protected $_primary_filter	= 'intval';
	protected $_order_by 		= 'quest_id asc';
	protected $_timestamps 		= FALSE;

}

/* End of file tb_quest_m.php */
/* Location: ./application/models/tb_quest_m.php */