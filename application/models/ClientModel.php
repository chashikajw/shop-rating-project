<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClientModel extends CI_Model {

	public function insertUser($userInfo) {

		try {
			$this->db->insert('user', $userInfo);

			$ret = $this->db->insert_id() + 0;
			return $ret;
		} catch (Exception $err) {
			return $err->getMessage();
		}

	}

	public function loginUser() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		//$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

		$this->db->where('username', $username);
		$this->db->where('password', $password);
		//$this->db->where('password', $hashedPassword);

		$respond = $this->db->get('user');

		if ($respond->num_rows() == 1) {
			return $respond->row(0);

		} else {
			return false;
		}

	}

}