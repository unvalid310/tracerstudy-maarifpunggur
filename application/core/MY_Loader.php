<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* load the MX_Loader class */
require APPPATH."third_party/MX/Loader.php";

class MY_Loader extends MX_Loader {
	public function groups(){
		# code...
		$user_groups  = json_decode(json_encode($this->Role_permission->get_user_group( array('role_permission.role_id' => $this->session->userdata('role')) )), TRUE);
		$data = array();


		foreach ($user_groups as $key => $value) {
		  # code...
		  $data[$key] = $value['name'];
		}

		$groups_allowed = $data;

		return $groups_allowed;
	}

	public function allow_access($groups_allowed = array()) {
		$allow_access = true;
		
		$match_group_allowed = array_intersect($this->groups(), $groups_allowed);

		$allow_access = !empty($match_group_allowed);

		return $allow_access ;
	}

	protected function allow_permisson_access($conntroller, $groups_allowed = array()) {
		$allow_access = true;
		
		$match_group_allowed = array_intersect($this->current_permission_allowed($conntroller), $groups_allowed);

		$allow_access = !empty($match_group_allowed);

		return $allow_access ;
	}


	protected function current_permission_allowed($conntroller) {
		$current_user = '';
		
		$user_groups 	= json_decode(json_encode($this->Group_permission_m->get_group_permission( array('group_permission.role_id' => $this->session->userdata('role'), 'groups.name' => $conntroller) )), TRUE);
		$data = array();


		foreach ($user_groups as $key => $value) {
			# code...
			$data[$key] = $value['name'];
		}

		$groups_allowed = $data;

		return $groups_allowed;
	}

	protected function limit_text($string, $length=100, $append="..") {
		$string = trim($string);

		if(strlen($string) > $length) {
		$string = wordwrap($string, $length);
		$string = explode("\n", $string, 2);
		$string = $string[0] . $append;
		}

		return $string;
	}
}

