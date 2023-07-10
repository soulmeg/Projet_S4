<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Acceuil extends CI_Controller{

		public function admin_login(){
			$this->load->view('test_admin');
		}
		public function user(){
			$this->load->view('loginUser');
		}
		public function bienvenue(){
			// $this->load->view('acceuil');
			echo "tongasoa";
		}
		public function inscription(){
			$this->load->view('register1');
		}

	
	}

?>