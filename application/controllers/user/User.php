<?php
	defined('BASEPATH') or exit('Direct access not allowed');

	class User extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('user/User_model', 'user');
		}

		public function login(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			try{
				$user = $this->user->login_as_admin($username, $password);
				$this->session->set_userdata('admin_session', true);
				$this->session->set_userdata('admin', $user);
				redirect("admin/admin/");
			}catch(Exception $e){
				echo $e->getMessage();
			}
		}


	}

?>