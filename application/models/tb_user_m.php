<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tb_user_m extends MY_Model {

	protected $_table_name 		= 'tb_user';
	protected $_primary_key		= 'user_id';
	protected $_primary_filter	= 'intval';
	protected $_order_by 		= 'user_id desc';
	protected $_timestamps 		= TRUE;

	public function login() {
		$email 		= $this->input->post('email');
		$password	= md5(sha1($this->input->post('password')));

		$this->db->select('*');
		$this->db->from($this->_table_name);
		$this->db->where( 
			array(
				'password' 		=> $password, 
				'email' 		=> $email,
				'is_publish' 	=> '1'
			) 
		);

		$user = $this->db->get()->row();
		
		if (!empty($user) > 0) {
			// Log in user
			$data = array(
				'user_id' 		=> $user->user_id,
				'realname' 		=> $user->realname,
				'email' 		=> $user->email,
				'is_complete'	=> $user->is_complete,
				'id_bidang' 	=> $user->id_bidang,
				'is_role'		=> $user->is_role,
				'loggedin' 		=> TRUE,
				'id_bidang'		=> $user->id_bidang
			);
			$this->session->set_userdata($data);
            
            return TRUE;
		}
		
        // If we get to here then login did not succeed
        return FALSE;
	}

	public function loggedin ()	{
		return (bool) $this->session->userdata('loggedin');
	}

	public function logout () {
		$this->session->sess_destroy();
	}
}

/* End of file tb_user_m.php */
/* Location: ./application/models/tb_user_m.php */