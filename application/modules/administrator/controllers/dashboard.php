<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->allow_group_admin();
	}

	public function index() {
		$this->data['page_title'] 	= 'Dashboard';
		$this->data['breadcrumb']	= 'Dashboard';
        
		$this->load_admin('dashboard/index');
	}

}

/* End of file Dashboard.php */
/* Location: ./application/modules/Administrator/Controllers/Dashboard.php */