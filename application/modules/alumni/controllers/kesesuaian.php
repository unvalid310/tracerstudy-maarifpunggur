<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kesesuaian extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->allow_group_alumni();
	}

	function index() {
		$this->data['page_title'] 	= 'Kesesuaian';
		$this->data['breadcrumb']	= 'Kesesuaian';

		$this->load_alumni('kesesuaian/index');
	}

}

/* End of file kesesuaian.php */
/* Location: ./application/modules/alumni/controllers/kesesuaian.php */