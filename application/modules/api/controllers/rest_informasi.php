<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rest_informasi extends MY_Controller {

	function index() {
		$query = $this->vw_informasi_m->get();
			
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

	function save() {
		$success 		= false;
		if ($this->input->post('page_id')) {
			# code...
			$id = $this->input->post('page_id');
		} else {
			$id = null;
		}

		$img 			= $this->input->post('img');
		$_pathImg 		= '';
		$current_img 	= $this->input->post('current_img');
		$current_path 	= $this->input->post('current_path');

		$config['upload_path'] 		="./assets/images/info";
        $config['allowed_types']	='jpeg|jpg|png';
        $config['encrypt_name'] 	= TRUE;
        
        $this->load->library('upload',$config);
	    if( ! $this->upload->do_upload('foto')){
	        $img = '';
        }else{
        	$data = $this->upload->data();

	        //Resize and Compress Image
            $config['image_library']	='gd2';
            $config['source_image']		= './assets/images/info'.$data['file_name'];
            $config['create_thumb'] 	= FALSE;
            $config['maintain_ratio']	= FALSE;
            $config['quality']			= '80%';
            $config['new_image']		= './assets/images/info'.$data['file_name'];
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
	       		$_pathImg 	= 'assets/images/';
	        	$img 		= 'noimg-post.jpg';
        	}
       	} else if (!empty($img)) {
       		if ($img !== 'noimg-post.jpg' && !empty($current_path) && !empty($current_img)) {
        		# code...
        		$path = FCPATH .'assets/images/info/'.$current_img;
	    		if (file_exists($path)){
	    			chmod($path, 0777);
				    unlink($path);
				}
        		$_pathImg = 'assets/images/info/';
        	} else {
        		$_pathImg = 'assets/images/info/';
        	}
       	}

		$data = array(
			'user_id' 		=> $this->input->post('user_id'),
			'judul' 		=> $this->input->post('judul'),
			'content' 		=> $this->input->post('content'),
			'img' 			=> $img,
			'path_img' 		=> $_pathImg,
			'is_type' 		=> $this->input->post('is_type'),
			'is_publish'	=> '1',
			'is_delete' 	=> '0'
		);

		$save = $this->tb_pages_m->save($data, $id);
		if ($save > 0) {
			# code...
			$success = true;
			$message = 'Data berhasil disimpan';
		} else {
			$success = false;
			$message = 'Data gagal disimpan';
		}

		echo json_encode(array('success' => $success, 'base_url' => base_url('cms-admin/informasi')), 200);
	}

	function publish() {
		$success 		= false;
		$id 			= $this->input->post('page_id');
		$_ispublish 	= $this->input->post('is_publish');

		$data = array(
			'is_publish'	=> $_ispublish
		);

		$save = $this->tb_pages_m->save($data, $id);
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
		$id = $this->input->post('page_id');
		$data = array(
			'is_publish'	=> '0',
			'is_delete' 	=> '1'
		);

		$save = $this->tb_pages_m->save($data, $id);
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
		$id = $this->input->post('page_id');

		for ($i=0; $i < count($id); $i++) { 
			# code...
			$page_id = $id[$i];

			$data = array(
				'is_publish'	=> '0'
			);

			$save = $this->tb_pages_m->save($data, $page_id);
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
		$id = $this->input->post('page_id');

		for ($i=0; $i < count($id); $i++) { 
			# code...
			$page_id = $id[$i];

			$data = array(
				'is_publish'	=> '0',
				'is_delete' 	=> '1'
			);

			$save = $this->tb_pages_m->save($data, $page_id);
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
}

/* End of file rest_informasi.php */
/* Location: ./application/modules/api/controllers/rest_informasi.php */