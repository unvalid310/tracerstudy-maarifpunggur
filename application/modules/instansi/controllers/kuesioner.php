<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuesioner extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->allow_group_instansi();
	}

	public function index() {
		$this->data['page_title'] 	= 'Kuesioner';

		$this->load_instansi('kuesioner/index', false);
	}

	function status_kuesioner() {
		$this->data['page_title'] 	= 'Status Kuesioner';
		$this->data['breadcrumb']	= 'Status Kuesioner';

		$this->load_instansi('kuesioner/status');
	}

}

/* End of file kuesioner.php */
/* Location: ./application/modules/alumni/controllers/kuesioner.php */