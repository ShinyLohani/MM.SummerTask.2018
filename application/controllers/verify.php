<?php

	class verify extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->helper('url','html');
			$this->load->model('user');

		}
		function login()
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$answer = $this->user->user_verify($username,$password);

			if ($answer) {
				echo "Login Succesful !! Click on the link to ";
				echo anchor('http://localhost/myproject/posts/create','Insert a new post');
			}
			else
			{
				echo "Login Credentials are wrong !!";
			}

		}
	}

?>
