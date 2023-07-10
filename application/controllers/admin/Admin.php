<?php
	
	defined('BASEPATH') or exit("No direct access allowed");

	class Admin extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			if( !isset($_SESSION['admin_session']) ){
				redirect(base_url());
			}
			$this->load->model("user/User_model", 'user');
		}

		public function index(){
			
		}

	}

?>