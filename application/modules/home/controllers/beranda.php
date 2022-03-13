<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends MY_Controller {

	public function index() {
		$this->load_theme('home/index', false);
	}

}

/* End of file beranda.php */
/* Location: ./application/modules/home/controllers/beranda.php */