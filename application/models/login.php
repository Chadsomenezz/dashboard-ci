<?php


class login extends CI_Model{
	public function process_login($email,$password){
		$where = "email='$email' AND password='$password'";
		$this->db->where($where);
		$result = $this->db->get('users');
		return $result->result();
	}

	public function get_all_users(){
		$result = $this->db->get('users');
		return $result->result();
	}
}
