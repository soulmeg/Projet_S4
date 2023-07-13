<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Acceuil extends CI_Controller{

		public function admin(){
			$this->load->view("admin/index");
		}
		public function user(){
			$this->load->view('loginUser');
		}
		public function bienvenue(){
			$this->load->view('acceuil');
		}
		public function inscription(){
			$this->load->view('register1');
		}

	
	}

?>