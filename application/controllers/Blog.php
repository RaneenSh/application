<?php
	class Blog extends CI_Controller {
			function __construct(){
				parent :: __construct();
			//	$this->load->view('task1_view');
				$this->load->model('Blog_model', 'blog_model');
			}
			public function index(){
				$this->load->view('blog_view');
			}
			public function data_submitted(){
				$this->load->view('blog_view');
				$this->load->library('form_validation');
				$this->form_validation->set_rules('id', 'id', 'required');
				$this->form_validation->set_rules('title', 'title', 'required');
				$this->form_validation->set_rules('body', 'body', 'required');
				if ($this->form_validation->run() == True) {
					$data = array(
					'id' => $this->input->post('id'),
					'title' => $this->input->post('title'),
					'body' => $this->input->post('body')
					);
					
					$this->blog_model->store_data($data);
					$query = $this->blog_model->retrieve_data();
						$data['records'] = null;
					if($query)
						$data['records'] = $query;
					else
						$this->load->view('display_view', $data);	
				}
				else{
					echo validation_errors();
				}
			}
			public function display_records(){
				$data['records'] = $this->blog_model->display();
				$this->load->view('display_view', $data);
			}	
	}
?>