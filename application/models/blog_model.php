<?php

	class Blog_model extends CI_Model {
		public function __construct(){
            $this->load->database();
		}
		function store_data($data){
			
			$this->db->insert('blog', $data);
			$data['signup_result'] = 'the account created succesfully';
		}
		function retrieve_data(){
			$this->db->select('*');
			$this->db->from('blog');
			$query = $this->db->get();
			if ($query->num_rows() > 0){
				 return $query->result();
			}
			else
				return false;
		}
		function display(){
			$this->db->select('*');
			$this->db->from('blog');
			$query = $this->db->get();
			return $query;
		}
		function delete(){
			$checked= $_POST['list'];
			if(empty($checked))
				echo("You didn't select any data");
			else{
				$count = count($checked);
				echo $count;
			}
			
		}
	}
?>