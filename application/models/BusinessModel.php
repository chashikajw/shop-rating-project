<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BusinessModel extends CI_Model {

	public function insertBusiness($businessInfo) {

		try {
			$this->db->insert('business', $businessInfo);

			$ret = $this->db->insert_id() + 0;
			return $ret;
		} catch (Exception $err) {
			return $err->getMessage();
		}

	}

	public function insertPost($postInfo){
		try {
			$this->db->insert('posts', $postInfo);

			$ret = $this->db->insert_id() + 0;
			return $ret;
		} catch (Exception $err) {
			return $err->getMessage();
		}
	}

	public function select(){
		try{
			$result = $this->db->get('business');
			return $result->result();
		} catch (Exception $err) {
			return $err->getMessage();
		}
	}

	public function selectpost(){
		try{
			$this->db->order_by("id", "DESC");
			$result = $this->db->get('posts');
			return $result->result();
		} catch (Exception $err) {
			return $err->getMessage();
		}
	}

	public function selectcategory($name){
		try{
			$this->db->select('id');
		    $this->db->from('category');
		    $this->db->where('name',$name);
			$result = $this->db->get_where('business',array('category_id' => $this->db->get()->row()->id));

			return $result->result();
		} catch (Exception $err) {
			return $err->getMessage();
		}
	}

	public function search($keyword){
			$this->db->like('name',$keyword);
			$this->db->or_like('description',$keyword);
    		$query  =   $this->db->get('business');
    		return $query->result();
	}



	public function getCategoryList(){
		try{
			$result = $this->db->get('category');
			return $result->result();
		} catch (Exception $err) {
			return $err->getMessage();
		}
	}
}
