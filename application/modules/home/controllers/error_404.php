<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error_404 extends MY_Controller {

	function index() {
		$this->load_theme('error/index', FALSE);;
	}

}

/* End of file error_404.php */
/* Location: ./application/modules/home/controllers/error_404.php */