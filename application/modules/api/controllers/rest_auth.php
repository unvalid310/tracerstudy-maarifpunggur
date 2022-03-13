<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rest_auth extends MY_Controller {

	function index() {
		
	}

	function signup_alumni() {
		$user_id = null;

		$data = array(
			'realname' 		=> $this->input->post('realname'),
			'email' 		=> $this->input->post('email'),
			'password' 		=> md5(sha1($this->input->post('password'))),
			'path_img' 		=> 'assets/admin/default/images/',
			'img' 			=> 'avatar.jpg',
			'is_role' 		=> '2',
			'is_complete' 	=> '0',
			'is_publish' 	=> '1',
			'is_delete' 	=> '0'
		);

		$save = $this->tb_user_m->save($data, $user_id);
		if ($save > 0) {
			# code...
			$success = true;
			$message = 'Registrasi berhasil';
		} else {
			$success = false;
			$message = 'Registrasi gagal';
		}

		echo json_encode(array('success' => $success, 'base_url' => base_url('auth'), 'message' => $message), 200);
	}

	function signup_instansi() {
		$user_id = null;

		$data = array(
			'realname' 		=> $this->input->post('realname'),
			'email' 		=> $this->input->post('email'),
			'password' 		=> md5(sha1($this->input->post('password'))),
			'path_img' 		=> 'assets/admin/default/images/',
			'img' 			=> 'avatar.jpg',
			'id_bidang' 	=> $this->input->post('id_bidang'),
			'is_role' 		=> '3',
			'is_complete' 	=> '0',
			'is_publish' 	=> '1',
			'is_delete' 	=> '0'
		);

		$save = $this->tb_user_m->save($data, $user_id);
		if ($save > 0) {
			# code...
			$success = true;
			$message = 'Registrasi berhasil';
		} else {
			$success = false;
			$message = 'Registrasi gagal';
		}

		echo json_encode(array('success' => $success, 'base_url' => base_url('auth'), 'message' => $message), 200);
	}

	function login() {
		$success  	= false;
		$base_url 	= base_url();
		$message  	= 'Login gagal';
		$login 		= $this->tb_user_m->login();

		if ($login) {
			if ($this->session->userdata('is_role') == '1') {
				# code...
				$success 	= true;
            	$base_url 	= base_url('cms-admin');
            	$message 	= 'Login berhasil';	
			} 
			if ($this->session->userdata('is_role') == '2') {
				# code...
				$success 	= true;
            	$base_url 	= base_url('alumni');
            	$message 	= 'Login berhasil';	
			} 
			if ($this->session->userdata('is_role') == '3') {
				# code...
				$success 	= true;
            	$base_url 	= base_url('instansi');
            	$message 	= 'Login berhasil';	
			}
		} else {
			$success 	= false;
            $base_url 	= base_url('auth');
            $message 	= 'Login gagal';	
		}

		echo json_encode(array('success' => $success, 'base_url' => $base_url, 'message' => $message), 200);
	}
}

/* End of file rest_auth.php */
/* Location: ./application/modules/api/controllers/rest_auth.php */