<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rest_admin extends MY_Controller {

	function index() {
		$id = $this->input->post('user_id');
		$email = $this->input->post('email');
		$username = $this->input->post('realname');

		if (!empty($id)) {
			# code...
			$query = $this->vw_admin_m->get_by(array('user_id' => $id));
		} else if (!empty($email)) {
			$query = $this->vw_admin_m->get_by(array('email' => $email));
		} else if (!empty($username)) {
			$query = $this->vw_admin_m->get_by(array('username' => $username));
		} else {
			$query = $this->vw_admin_m->get();
		}
			
		if (count($query) < 1) {
			# code...
			$data['data'][0] = array();
		} else {
			foreach ($query as $key => $value) {
				# code...
				$data['data'][$key] = array(
					"user_id"		=> $value->user_id,
		            "username"		=> $value->username,
		            "realname" 		=> $value->realname,
		            "email"			=> $value->email,
		            "password"		=> $value->password,
		            "role"			=> $value->role,
		            "role_name"		=> $value->role_name,
		            "img"			=> $value->img,
		            "path_img"		=> $value->path_img,
		            "img_url" 		=> $value->img_url,
		            "create_on" 	=> $value->create_on,
		            "last_update"	=> $value->last_update,
		            "create_onnya"	=> $value->create_onnya,
		            "last_updatenya"=> $value->last_updatenya,
		            "is_complete"	=> $value->is_complete,
		            "is_publish"	=> $value->is_publish,
		            "is_delete"		=> $value->is_delete
				);
			}
		}

		echo json_encode($data, 200);
	}
	
	function cek_realname() {
	    $username = $this->input->post('realname');
	    $query = $this->vw_admin_m->get_by(array('username' => $username));
	    if (count($query) < 1) {
			# code...
			echo false;
		} else {
			echo true;
		}
	}
	
	function cek_email() {
	    $email = $this->input->post('email');
	    $query = $this->vw_admin_m->get_by(array('email' => $email));
	    if (count($query) < 1) {
			# code...
			echo false;
		} else {
			echo true;
		}
	}

	function save() {
		$success 		= false;
		$name 			= $this->input->post('realname');
		
		if ($this->input->post('user_id')) {
			# code...
			$id = $this->input->post('user_id');
			if (!empty($this->input->post('password'))) {
			    $password = md5(sha1($this->input->post('password')));
			} else {
			    $query = $this->vw_admin_m->get_by(array('user_id' => $id));
			    foreach ($query as $key => $value);
			    $password = $value->password;
			} 
		} else {
			$id = null;
			$password = md5(sha1($this->input->post('password')));
		}

		$img 			= $this->input->post('img');
		$_pathImg 		= '';
		$current_img 	= $this->input->post('current_img');
		$current_path 	= $this->input->post('current_path');

		$config['upload_path'] 		="./assets/attachment/images/person";
        $config['allowed_types']	='jpeg|jpg|png';
        $config['encrypt_name'] 	= TRUE;
        
        $this->load->library('upload',$config);
	    if( ! $this->upload->do_upload('foto')){
	        $img = '';
        }else{
        	$data = $this->upload->data();

	        //Resize and Compress Image
            $config['image_library']	='gd2';
            $config['source_image']		= './assets/attachment/images/person'.$data['file_name'];
            $config['create_thumb'] 	= FALSE;
            $config['maintain_ratio']	= FALSE;
            $config['quality']			= '80%';
            $config['new_image']		= './assets/attachment/images/person'.$data['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

	        $img = $data['file_name']; 
        }
       	
       	if (empty($img)) {
       		# code...
        	if (!empty($current_path) && !empty($current_img)) {
        		# code...
        		$_pathImg 	= $current_path;
        		$img 		= $current_img;
        	} else {
	       		$_pathImg 	= 'assets/admin/default/images/';
	        	$img 		= 'avatar.jpg';
        	}
       	} else if (!empty($img)) {
       		if ($img !== 'avatar.jpg' && !empty($current_path) && !empty($current_img)) {
        		# code...
        		$path = FCPATH .'assets/attachment/images/person/'.$current_img;
	    		if (file_exists($path)){
	    			chmod($path, 0777);
				    unlink($path);
				}
        		$_pathImg = 'assets/attachment/images/person/';
        	} else {
        		$_pathImg = 'assets/attachment/images/person/';
        	}
       	}

		$data = array(
			'username' 		=> $name,
			'realname' 		=> $name,
			'password' 		=> $password,
			'img' 			=> $img,
			'path_img' 		=> $_pathImg,
			'is_role' 		=> '1',
			'is_complete' 	=> '1',
			'is_publish'	=> '1',
			'is_delete' 	=> '0'
		);

		$save = $this->tb_user_m->save($data, $id);
		if ($save > 0) {
			# code...
			$success = true;
			$message = 'Data berhasil disimpan';
		} else {
			$success = false;
			$message = 'Data gagal disimpan';
		}

		echo json_encode(array('success' => $success, 'base_url' => base_url('cms-admin/alumni')), 200);
	}

	function publish() {
		$success 		= false;
		$id 			= $this->input->post('user_id');
		$_ispublish 	= $this->input->post('is_publish');

		$data = array(
			'is_publish'	=> $_ispublish
		);

		$save = $this->tb_user_m->save($data, $id);
		if ($save > 0) {
			# code...
			$success = true;
			$message = 'Data berhasil diubah';
		} else {
			$success = false;
			$message = 'Data gagal diubah';
		}

		echo json_encode(array('success' => $success, 'message' => $message), 200);
	}

	function delete() {
		$success = false;
		$id = $this->input->post('user_id');
		$data = array(
			'is_publish'	=> '0',
			'is_delete' 	=> '1'
		);

		$save = $this->tb_user_m->save($data, $id);
		if ($save >= 0) {
			# code...
			$success = true;
			$message = 'Data berhasil dihapus';
		} else {
			$success = false;
			$message = 'Data gagal dihapus!';
		}

		echo json_encode(array('success' => $success, 'message' => $message), 200);
	}

	function batch_publish() {
		$success = false;
		$id = $this->input->post('user_id');

		for ($i=0; $i < count($id); $i++) { 
			# code...
			$user_id = $id[$i];

			$data = array(
				'is_publish'	=> '0'
			);

			$save = $this->tb_user_m->save($data, $user_id);
			if ($save > 0) {
				# code...
				$success = true;
				$message = 'Data berhasil diubah';
			} else {
				$success = false;
				$message = 'Data gagal diubah';
			}
		}

		echo json_encode(array('success' => $success, 'message' => $message), 200);
	}

	function batch_delete() {
		$success = false;
		$id = $this->input->post('user_id');

		for ($i=0; $i < count($id); $i++) { 
			# code...
			$user_id = $id[$i];

			$data = array(
				'is_publish'	=> '0',
				'is_delete' 	=> '1'
			);

			$save = $this->tb_user_m->save($data, $user_id);
			if ($save > 0) {
				# code...
				$success = true;
				$message = 'Data berhasil dihapus';
			} else {
				$success = false;
				$message = 'Data gagal dihapus!';
			}
		}

		echo json_encode(array('success' => $success, 'message' => $message), 200);
	}

	function reset_password() {
		$success = false;
		$id = $this->input->post('user_id');
		$password = md5(sha1($this->input->post('password')));;

		$data = array(
			'password'	=> $password
		);

		$save = $this->tb_user_m->save($data, $id);
		if ($save > 0) {
			# code...
			$success = true;
			$message = 'Data berhasil diubah';
		} else {
			$success = false;
			$message = 'Data gagal diubah';
		}

		echo json_encode(array('success' => $success, 'message' => $message), 200);
	}

}

/* End of file rest_admin.php */
/* Location: ./application/modules/api/controllers/rest_admin.php */