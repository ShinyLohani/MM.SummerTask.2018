<?php
	
	defined ('BASEPATH') OR exit('No direct script access allowed');
	
	class My_project extends CI_Controller
	{
	
		public function index()
		{
			$this->load->view('projects/header');
			$this->load->view('projects/homepage');
			
		}
		public function admin()
		{
			
			$this->load->view('projects/admin_panel');
		}
		public function search()
		{
			$this->load->view('projects/search_box');
		}
	
	}
?>