<?php
	
	defined ('BASEPATH') OR exit('No direct script access allowed');
	
	class My_project extends CI_Controller{
		
		public function index(){
			
			$this->load->view('projects/homepage');
			/*$this->load->view('projects/Images');
			$this->load->view('projects/js');
			$this->load->view('projects/article');
			*/
		}
		public function test(){
			echo "This is a test function...";
		}
	}
?>