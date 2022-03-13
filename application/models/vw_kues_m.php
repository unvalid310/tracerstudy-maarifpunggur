<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vw_kues_m extends MY_Model {

	protected $_table_name 		= 'vw_kuesioner';
	protected $_primary_key		= 'id';
	protected $_primary_filter	= 'intval';
	protected $_order_by 		= 'kode desc';

}