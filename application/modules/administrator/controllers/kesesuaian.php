<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kesesuaian extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->allow_group_admin();
	}

	function index() {
		$this->data['page_title'] 	= 'Kesesuaian';
		$this->data['breadcrumb']	= 'Kesesuaian';

		$this->load_admin('kesesuaian/index');
	}

}

/* End of file kesesuaian.php */
/* Location: ./application/modules/administrator/controllers/kesesuaian.php */