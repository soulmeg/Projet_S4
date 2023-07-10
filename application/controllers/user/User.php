<?php
	defined('BASEPATH') or exit('Direct access not allowed');

	class User extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('user/User_model', 'user');
		}

		public function login_admin(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			try{
				$user = $this->user->login_as_admin($username, $password);
				$this->session->set_userdata('admin_session', true);
				$this->session->set_userdata('admin_id', $user->idUser);
				redirect("admin/admin/");
			}catch(Exception $e){
				echo $e->getMessage();
			}
		}

		public function login_user(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			try{
				$user = $this->user->login_as_user($username, $password);
				$this->session->set_userdata('user_session', true);
				$this->session->set_userdata('user_id', $user->idUser);
				redirect("acceuil/Acceuil/bienvenue");
			}catch(Exception $e){
				echo $e->getMessage();
			}
		}

	}

?>