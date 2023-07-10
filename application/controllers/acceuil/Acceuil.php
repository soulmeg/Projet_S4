<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Acceuil extends CI_Controller{

		public function admin(){
			$this->load->view("admin/index");
		}

	}

?>