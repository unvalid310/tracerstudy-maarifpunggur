<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vw_quest_perusahaan_m extends MY_Model {

	protected $_table_name 		= 'vw_quest_perusahaan';
	protected $_primary_key		= 'quest_id';
	protected $_primary_filter	= 'intval';
	protected $_order_by 		= 'kode asc';

}

/* End of file vw_quest_perusahaan_m.php */
/* Location: ./application/models/vw_quest_perusahaan_m.php */