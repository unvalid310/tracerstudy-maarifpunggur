<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends MY_Model {

	protected $_table_name 		= 'user';
	protected $_primary_key		= 'id';
	protected $_primary_filter	= 'intval';
	protected $_order_by 		= 'id desc';

	public function get_user_group($where) {
		$this->db->select('user.username, user.password, user.role,');
		$this->db->from($this->_table_name);
		$this->db->join('group_permission', 'user.role = group_permission.id');
		$this->db->where($where);
		//$query = $this->db->get();
		//return $query;
	}
	
	public function get_all_user_role($where = null) {
		$this->db->select('user.username,user.role, role.name as roleName');
		$this->db->from($this->_table_name);
		$this->db->join('role', 'user.role = role.id');
		if ($where != null) {
			# code...
			$this->db->where($where);
		}
		$query = $this->db->get();
		return $query;
	}

	public function get_all($where = null)	{
		# code...
		$this->db->select('user.id, user.username, user.password, user.role, roles.name');
		$this->db->from($this->_table_name);
		$this->db->join('roles', 'user.role = roles.id');

		if (!empty($where) || $where != null) {
			# code...
			$this->db->where($where);
		}
		$this->db->order_by('user.id', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function login() {
		$username 		= $this->input->post('username');
		$password		= $this->auth_lib->encryptIt($this->input->post('password'));

		$this->db->select('*');
		$this->db->from($this->_table_name);
		$this->db->where( 
			array(
				'password' => $password, 
				'username' => $username
			) 
		);

		$user = $this->db->get()->row();
		
		if (count($user) > 0) {
			// Log in user
			
			$data = array(
				'id' 		=> $user->id,
				'username' 	=> $user->username,
				'role'		=> $user->role,
				'loggedin' 	=> TRUE
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

/* End of file User_m.php */
/* Location: ./application/models/User_m.php */