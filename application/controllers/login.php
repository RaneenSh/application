<?php
	class Login extends CI_Controller {
		public function index(){
			$this->load->view('login_view');
			
		}
		public function data_submitted() {
			$this->load->view('login_view');
			$this->load->model('Login_model', 'login_model');
			$this->login_model->data_check();
		}
	}


?>