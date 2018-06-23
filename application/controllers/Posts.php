<?php

	class Posts extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function index()
		{
			$data['posts'] = $this->post_model->get_posts();

			$this->load->view('projects/header');
			$this->load->view('posts/index',$data);
		}

		public function create(){
			$this->form_validation->set_rules('title','Title','required');
			$this->form_validation->set_rules('body','Body','required');

			if($this->form_validation->run() === FALSE){

			$this->load->view('projects/header');
			$this->load->view('posts/create');
		} else{
			$this->post_model->create_post();
			redirect('posts');
		}
	}

		public function view($slug = NULL){
			$data['post'] = $this->post_model->get_posts($slug);

			if (empty($data['posts'])) {
				show_404();
			}
			$data['title'] = $data['post']['title'];

			$this->load->view('projects/header');
			$this->load->view('posts/view',$data);
		}


		}
	

?>