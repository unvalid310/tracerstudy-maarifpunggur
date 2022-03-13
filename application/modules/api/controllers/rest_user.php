<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rest_user extends MY_Controller {

	function index() {
		$id = $this->input->post('user_id');
		$email = $this->input->post('email');
		if (!empty($id)) {
			# code...
			$query = $this->vw_user_m->get_by(array('user_id' => $id));
		} else if (!empty($email)) {
			$query = $this->vw_user_m->get_by(array('email' => $email));
		} else {
			$query = $this->vw_user_m->get();
		}
			
		if (count($query) < 1) {
			# code...
			$data['data'] = array();
		} else {
			foreach ($query as $key => $value) {
				# code...
				$data['data'][$key] = $value;
			}
		}

		echo json_encode($data, 200);
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

	function change_password() {
		$success 		= false;
		if ($this->input->post('user_id')) {
			# code...
			$id = $this->input->post('user_id');
		} else {
			$id = null;
		}

		if ($this->input->post('password')) {
			# code...
			$password = md5(sha1($this->input->post('password')));
		} else {
			$password = null;
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

       	if (!empty($password)) {
       		# code...
			$data = array(
				'password' 		=> $password,
				'img' 			=> $img,
				'path_img' 		=> $_pathImg
			);
       	} else {
			$data = array(
				'img' 			=> $img,
				'path_img' 		=> $_pathImg
			);
       	}

		$save = $this->tb_user_m->save($data, $id);
		if ($save > 0) {
			# code...
			$success = true;
			$message = 'Data berhasil disimpan';
		} else {
			$success = false;
			$message = 'Data gagal disimpan';
		}

		echo json_encode(array('success' => $success), 200);
	}

	function reset_password() {
		$success = false;
		$id = $this->input->post('user_id');
		$password = md5(sha1($this->input->post('password')));

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

/* End of file rest_user.php */
/* Location: ./application/modules/api/controllers/rest_user.php */