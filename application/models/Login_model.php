<?php

	class Login_model extends CI_Model {
		public function __construct(){
            $this->load->database();
		}
		function data_check(){
			$data = array(
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password')
			);
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('email', $data['email']);
			
			
			$password = crypt($data['password'], 123);
			$this->db->where('password', $password);
			$query = $this->db->get();
			if ($query->num_rows() > 0){
			/*	foreach ($query->result() as $row){
					if ($row->email == $data['email'] && $row->password == $password){
				
						echo "the account exist";
						break;
					}
				}*/
				echo "the account exist";
				$currentDateTime = date('d-m-y H:i:s');
				echo $currentDateTime;
			//	$value = now();
				$this->db->set('last_login', $currentDateTime);
				$this->db->where('email', $data['email']);
				$this->db->update('users');
			}
			else{
				echo "the account is not exist";
			}
		}
	}
?>