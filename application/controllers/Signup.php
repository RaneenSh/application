<?php
class signup extends CI_Controller {
		function __construct(){
			parent :: __construct();
			$this->load->view('signup_view');
			$this->load->model('Signup_model', 'signup_model');
		}
        public function index(){
			
			
		}
		public function data_submitted() {
		//	$this->load->view('signup_view');
		//	$this->load->model('Signup_model', 'signup_model');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('email', 'email', 'required|valid_email');
			$this->form_validation->set_rules('username', 'username', 'required|min_length[4]|max_length[15]');
			$this->form_validation->set_rules('password', 'password', 'required');
			if ($this->form_validation->run() == True) {
				$data = array(
				'email' => $this->input->post('email'),
				'username' => $this->input->post('username'),
				);
				$pass1 = $this->input->post('password');
				$pass2 = $this->input->post('password_con');
				if($pass1 == $pass2){
				$data['password'] = crypt($pass1, 123);
				$this->signup_model->data_insert($data);
			$this->load->view('result1');
				}
				else{
					$this->load->view('error2');
				}
			}
			else{
			//	$this->load->view('error');
				echo validation_errors();
			}
		}
		
}
?>