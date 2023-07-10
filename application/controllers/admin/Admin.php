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

		public function index(){ // miload dashboard

			$user = $this->session->userdata("admin");
			$data["user"] = $user;
			$data['today'] = date("d-m-Y");
			$data['user_count'] = count($this->user->get_users());
			// Mila maka ny nombre d'users total

			$this->load->view('admin/template/index', $data);
		}

		public function logout(){
			$this->session->sess_destroy();
			redirect(base_url());
		}

	}

?>