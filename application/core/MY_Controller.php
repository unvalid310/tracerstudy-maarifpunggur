<?php (defined('BASEPATH')) OR exit('No direct script access allowed');
define('BASE_URI', str_replace('index.php', '', $_SERVER['SCRIPT_NAME']));
define('THEMES_DIR', 'themes');
define('ADMIN_THEMES_DIR','admin');
define('AUTH_THEMES_DIR','auth');
define('ALUMNI_THEMES_DIR','alumni');
define('INSTANSI_THEMES_DIR','instansi');

/* load the MX_Controller class */
require APPPATH."third_party/MX/Controller.php";

class MY_Controller extends MX_Controller {
	
	protected $data 				= array();
	protected $current_user 		= array();
	protected $userName 			= '';
    protected $page_title 			= '';
	protected $base_assets_url		= '';
	protected $base_url_admin_uri	= '';

	public function __construct() {
		parent::__construct();
		//Do your magic here
		/* user model */
		$this->load->model('tb_user_m');
		$this->load->model('vw_alumni_m');
		$this->load->model('vw_user_m');
		$this->load->model('vw_admin_m');
		$this->load->model('vw_instansi_m');
		$this->load->model('tb_jurusan_m');
		$this->load->model('tb_quest_m');
		$this->load->model('vw_chart_kegiatan_m');
		$this->load->model('vw_sum_kegiatan_m');
		$this->load->model('vw_kegiatan_jurusan_m');
		$this->load->model('vw_kegiatan_jurusan_tahun_m');
		$this->load->model('vw_jurusan_m');
		$this->load->model('vw_jurusan_tahun_m');
		$this->load->model('vw_kebutuhan_m');
		$this->load->model('vw_kebutuhan_tahun_m');
		$this->load->model('vw_kebutuhan_jurusan_m');
		$this->load->model('vw_kebutuhan_jurusan_tahun_m');
		$this->load->model('vw_kebutuhan_lainnya_m');
		$this->load->model('vw_kesesuaian_m');
		$this->load->model('vw_kesesuaian_jurusan_m');
		$this->load->model('vw_soal_m');
		$this->load->model('vw_profile_m');
		$this->load->model('tb_quest_instansi_m');
		$this->load->model('vw_quest_perusahaan_m');
		$this->load->model('vw_quest_universitas_m');
		$this->load->model('tb_pages_m');
		$this->load->model('vw_berita_m');
		$this->load->model('vw_informasi_m');
		$this->load->model('vw_testimoni_m');
		$this->load->model('vw_archive_m');
		$this->load->model('tb_kues_kategori_m');
		$this->load->model('tb_kues_m');
		$this->load->model('vw_kues_m');
		$this->load->model('tb_survey_m');
	}

	protected function load_theme($content = null, $layout = true) {
        $this->base_assets_url = 'assets/'.THEMES_DIR.'/'.$this->config->item('_theme').'/';
        $this->data['base_assets_url'] = BASE_URI.$this->base_assets_url;
        if($layout == true){
    		$this->data['sidebar'] = $this->load->view(THEMES_DIR.'/'.$this->config->item('_theme').'/components/nav_notif', $this->data, TRUE);
    		$this->data['sidebar_blog'] = $this->load->view(THEMES_DIR.'/'.$this->config->item('_theme').'/components/nav_notif_blog', $this->data, TRUE);
            $this->data['content'] = (is_null($content)) ? '' : $this->load->view(THEMES_DIR.'/'.$this->config->item('_theme').'/'.$content, $this->data, TRUE);
            $this->load->view(THEMES_DIR . '/' . $this->config->item('_theme') . '/_layout_main', $this->data);
        }else{
            $this->load->view(THEMES_DIR.'/'.$this->config->item('_theme').'/'.$content, $this->data);
        }
    }

	protected function load_admin($content = null, $layout = true) {
		$this->base_assets_url = 'assets/admin/'.$this->config->item('_admin_theme').'/';
    	$this->data['base_assets_url'] = BASE_URI.$this->base_assets_url;

    	if($layout == true) {
    		$this->data['sidebar'] = $this->load->view(ADMIN_THEMES_DIR.'/'.$this->config->item('_admin_theme').'/components/nav_notif', $this->data, TRUE);
    		$this->data['content'] = (is_null($content)) ? '' : $this->load->view(ADMIN_THEMES_DIR.'/'.$this->config->item('_admin_theme').'/'.$content, $this->data, TRUE);
	        $this->load->view(ADMIN_THEMES_DIR.'/'.$this->config->item('_admin_theme').'/_layout_main', $this->data);
    	}else {
    		$this->load->view(ADMIN_THEMES_DIR.'/'.$this->config->item('_admin_theme').'/'.$content, $this->data);
    	}
	}

	protected function load_alumni($content = null, $layout = true) {
		$this->base_assets_url = 'assets/admin/'.$this->config->item('_admin_theme').'/';
    	$this->data['base_assets_url'] = BASE_URI.$this->base_assets_url;

    	if($layout == true) {
    		$this->data['sidebar'] = $this->load->view(ALUMNI_THEMES_DIR.'/'.$this->config->item('_alumni_theme').'/components/nav_notif', $this->data, TRUE);
    		$this->data['content'] = (is_null($content)) ? '' : $this->load->view(ALUMNI_THEMES_DIR.'/'.$this->config->item('_alumni_theme').'/'.$content, $this->data, TRUE);
	        $this->load->view(ALUMNI_THEMES_DIR.'/'.$this->config->item('_alumni_theme').'/_layout_main', $this->data);
    	}else {
    		$this->load->view(ALUMNI_THEMES_DIR.'/'.$this->config->item('_alumni_theme').'/'.$content, $this->data);
    	}
	}

	protected function load_instansi($content = null, $layout = true) {
		$this->base_assets_url = 'assets/admin/'.$this->config->item('_admin_theme').'/';
    	$this->data['base_assets_url'] = BASE_URI.$this->base_assets_url;

    	if($layout == true) {
    		$this->data['sidebar'] = $this->load->view(INSTANSI_THEMES_DIR.'/'.$this->config->item('_instansi_theme').'/components/nav_notif', $this->data, TRUE);
    		$this->data['content'] = (is_null($content)) ? '' : $this->load->view(INSTANSI_THEMES_DIR.'/'.$this->config->item('_instansi_theme').'/'.$content, $this->data, TRUE);
	        $this->load->view(INSTANSI_THEMES_DIR.'/'.$this->config->item('_instansi_theme').'/_layout_main', $this->data);
    	}else {
    		$this->load->view(INSTANSI_THEMES_DIR.'/'.$this->config->item('_instansi_theme').'/'.$content, $this->data);
    	}
	}

	protected function load_auth($content = null, $layout = true) {
		$this->base_assets_url = 'assets/admin/'.$this->config->item('_admin_theme').'/';
    	$this->data['base_assets_url'] = BASE_URI.$this->base_assets_url;

    	if($layout == true) {
    		$this->data['content'] = (is_null($content)) ? '' : $this->load->view(AUTH_THEMES_DIR.'/'.$this->config->item('_auth_theme').'/'.$content, $this->data, TRUE);
	        $this->load->view(AUTH_THEMES_DIR.'/'.$this->config->item('_auth_theme').'/_layout_main', $this->data);
    	}else {
    		$this->load->view(AUTH_THEMES_DIR.'/'.$this->config->item('_auth_theme').'/'.$content, $this->data);
    	}
	}

	protected function allow_group_alumni() {
		$_isrole = $this->session->userdata('is_role');
		if ($_isrole != '2') {
			redirect(base_url('auth'),'refresh');
			$this->session->sess_destroy();
		}
		/*
		if (empty($this->session->userdata('is_role'))) {
			# code...
			redirect(base_url('auth'),'refresh');
		} else {
			if ($_isrole == '1') {
				# code...
				redirect(base_url('cms-admin'),'refresh');
			} else if ($_isrole == '3') {
				redirect(base_url('instansi'),'refresh');
			}
		}
		*/
	}

	protected function allow_group_instansi() {
		$_isrole = $this->session->userdata('is_role');
		if ($_isrole != '3') {
			redirect(base_url('auth'),'refresh');
			$this->session->sess_destroy();
		}
		/*
		if (empty($this->session->userdata('is_role'))) {
			# code...
			redirect(base_url('auth'),'refresh');
		} else {
			if ($_isrole == '1') {
				# code...
				redirect(base_url('cms-admin'),'refresh');
			} else if ($_isrole == '2') {
				redirect(base_url('alumni'),'refresh');
			}
		}
		*/
	}

	protected function allow_group_admin() {
		$_isrole = $this->session->userdata('is_role');
		if ($_isrole != '1') {
			redirect(base_url('auth'),'refresh');
			$this->session->sess_destroy();
		}
		
		/*
		if (empty($this->session->userdata('is_role'))) {
			# code...
			redirect(base_url('auth'),'refresh');
		} else {
			if ($_isrole == '1') {
				# code...
				redirect(base_url('cms-admin'),'refresh');
			} else {
				redirect(base_url('auth'),'refresh');
			}
		}
		*/
	}

	protected function auth_check() {
		$_isrole = $this->session->userdata('is_role');
		$_isloggedin = $this->session->userdata('is_role');
		if ($_isloggedin) {
			# code...
			if ($_isrole == '1') {
				# code...
				redirect(base_url('cms-admin'),'refresh');
			} else if ($_isrole == '2') {
				# code...
				redirect(base_url('alumni'),'refresh');
			} else if ($_isrole == '3') {
				redirect(base_url('instansi'),'refresh');
			}
		}
		
	}

	protected function limit_text($text, $limit) {
	    if (str_word_count($text, 0) > $limit) {
	        $words = str_word_count($text, 2);
	        $pos   = array_keys($words);
	        $text  = substr($text, 0, $pos[$limit]) . '...';
	    }
	    return $text;
	}
/*
    protected function allow_group_access($groups_allowed = array()) {
		$allow_access = true;
		
		$match_group_allowed = array_intersect($this->current_groups_allowed(), $groups_allowed);

		$allow_access = !empty($match_group_allowed);
		
		if($allow_access == false){
			redirect(base_url('auth'), 'refresh');
		};
		
		return $match_group_allowed;
	}

	protected function current_groups_allowed() {
		$current_user = '';
		foreach ($this->current_user as $value) {
			# code...
			$current_user = $value['role'];
		}
		
		$user_groups 	= json_decode(json_encode($this->Role_permission->get_user_group( array('role_permission.role_id' => $current_user) )), TRUE);
		$data = array();


		foreach ($user_groups as $key => $value) {
			# code...
			$data[$key] = $value['name'];
		}

		$groups_allowed = $data;

		return $groups_allowed;
	}

	protected function allow_permisson_access($conntroller, $groups_allowed = array()) {
		$allow_access = true;
		
		$match_group_allowed = array_intersect($this->current_permission_allowed($conntroller), $groups_allowed);

		$allow_access = !empty($match_group_allowed);

		return $allow_access ;
	}

	protected function current_permission_allowed($conntroller) {
		$current_user = '';
		foreach ($this->current_user as $value) {
			# code...
			$current_user = $value['role'];
		}
		
		$user_groups 	= json_decode(json_encode($this->Group_permission_m->get_group_permission( array('group_permission.role_id' => $current_user, 'groups.name' => $conntroller) )), TRUE);
		$data = array();


		foreach ($user_groups as $key => $value) {
			# code...
			$data[$key] = $value['name'];
		}

		$groups_allowed = $data;

		return $groups_allowed;
	}

	protected function current_groups() {
		$current_user 	= $this->current_user[0]['role'];
		$current_groups = array();
		$groups			= json_decode(json_encode($this->Group_m->get_by_record('name', '')), TRUE);

		foreach ($groups as $key => $value) {
			# code...
			$current_groups[$key] = $value['name'];
		}

		return $current_user;
	}
	
	protected function user_id($username, $email) {
		$user = json_decode(json_encode($this->User_m->get_by(array('username' => $username, 'email' => $email))), TRUE);

		foreach ($user as $value)
		$data = $value['id'];

		return $data;
	}
*/
}
?>