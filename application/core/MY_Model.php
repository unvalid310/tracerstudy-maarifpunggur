<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model  extends CI_Model {

	protected $_table_name 		= '';
	protected $_primary_key		= 'id';
	protected $_primary_filter	= 'intval';
	protected $_order_by 		= '';
	protected $_timestamps 		= FALSE;

	function __construct(){
		parent::__construct();
	}	

	public function get($id = NULL, $single = FALSE) {
		if ($id != NULL) {
			$filter = $this->_primary_filter;
			$id 	= $filter($id);
			$this->db->where($this->_primary_key, $id);
			$method = 'row';
		}
		elseif($single == TRUE) {
			$method = 'row';
		}
		else {
			$method = 'result';
		}

		
		if (!count($this->db->ar_orderby)) {
			$this->db->order_by($this->_order_by);
		}

		return $this->db->get($this->_table_name)->$method();		
	}

	public function get_by($where, $single = FALSE) {
		$this->db->where($where);
		return $this->get(NULL, $single);
	}

	public function get_by_record($column, $where, $single=FALSE) {
		$this->db->select($column);
		if (!empty($where)) {
			# code...
			$this->db->where($where);
		}
		return $this->get(NULL, $single);	
	}

	public function get_limit($where = null, $limit, $offset, $single=FALSE) {
		# code...
		if (!empty($where)) {
			# code...
			$this->db->where($where);
		}
       $this->db->limit($limit, $offset);
		return $this->get(NULL, $single);
	}

	public function save($data, $id = NULL) {
		//set timestamps
		if ($this->_timestamps == TRUE) {
			# code...
			$now 					= date('Y-m-d H:i:s');
			$id || $data['created'] = $now;
			$data['modified'] 		= $now;
		}
		
		//insert
		if ($id === NULL) {
			# code...
			!isset($data[$this->_primary_key]) || $data[$this->_primary_key] = NULL;
			$this->db->set($data);
			$this->db->insert($this->_table_name);
			$id = $this->db->insert_id();
		} 
		//update
		else {
			# code...
			$filter = $this->_primary_filter;
			$id 	= $filter($id);
			$this->db->set($data);
			$this->db->where($this->_primary_key, $id);
			$this->db->update($this->_table_name);
		}

		return $id;
	}

	public function delete($id) {
		$filter = $this->_primary_filter;
		$id 	= $filter($id);

		if (!$id) {
			# code..
			return FALSE;
		}
		
		$this->db->where($this->_primary_key, $id);
		$this->db->limit(1);
		$this->db->delete($this->_table_name);
	}

}

/* End of file MY_Model */
/* Location: ./application/core/MY_Model */