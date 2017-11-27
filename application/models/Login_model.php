<?php

	class Login_model extends CI_Model {
		public function __construct(){
            $this->load->database();
		}
		function data_check(){
			$data = array(
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
			'username' => $this->input->post('username')
			);
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('email', $data['email']);
			
			
			$password = crypt($data['password'], 123);
			$this->db->where('password', $password);
			$query = $this->db->get();
			if ($query->num_rows() > 0){
				echo "the account exist";
				$currentDateTime = date('d-m-y H:i:s');
				echo $currentDateTime;
				$this->db->set('last_login', $currentDateTime);
				$this->db->where('email', $data['email']);
				$this->db->update('users');
				session_start();
				$_SESSION['email'] = $data['email'];
				$_SESSION['username'] = $data['username'];
				$_SESSION['password'] = $data['password'];
			}
			else{
				echo "the account is not exist";
			}
		}
	}
?>