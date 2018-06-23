<?php

	class Admin extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->helper(array('html','form','url'));
		
		}
		function admin()
		{
			$this->load->view('projects/header');
			$this->load->view('admin_login');
		}
	}

?>