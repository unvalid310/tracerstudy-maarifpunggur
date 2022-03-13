<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tb_survey_m extends MY_Model {

	protected $_table_name 		= 'tb_survey';
	protected $_primary_key		= 'id';
	protected $_primary_filter	= 'intval';
	protected $_order_by 		= 'user_id asc';
	protected $_timestamps 		= FALSE;

}
