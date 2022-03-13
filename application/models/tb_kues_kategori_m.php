<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tb_kues_kategori_m extends MY_Model {

	protected $_table_name 		= 'tb_kues_kategori';
	protected $_primary_key		= 'id';
	protected $_primary_filter	= 'intval';
	protected $_order_by 		= 'posisi asc';
	protected $_timestamps 		= FALSE;

}

/* End of file tb_kues_kategori_m.php */
/* Location: ./application/models/tb_kues_kategori_m.php */