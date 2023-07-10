<?php
	defined('BASEPATH') or exit("No direct access allowed ahaha ");

	class Admin extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			if( !isset($_SESSION['admin_session']) ){
				redirect(base_url());
			}
			$this->load->model("user/User_model", 'user');
			$this->load->model("code/Code_model", 'code');
		}

		public function index(){ // miload dashboard

			$user = $this->session->userdata("admin");

			$data["user"] = $user;
			$data['today'] = date("d-m-Y");
			$data['body'] = 'admin/acceuil';
			$data['user_count'] = count($this->user->get_users());
			// Mila maka ny nombre d'users total

			$this->load->view('admin/template/index', $data);
		}

		public function save_code(){
			$nom = $this->input->post('nom');
			$montant = $this->input->post('montant');
			$this->code->insert_code( $nom, $montant);
			redirect('admin/admin/list_code');
			// redirect('admin/admin/list_code');
		}

		public function modify_code( $code ){
			$code = $this->code->getCode($code);
			$data['code'] = $code;
			$data['body'] = 'admin/code/modify_code';

			$this->load->view('admin/template/index' , $data);
		}


		public function modify_codes( $code ){
			$nom = $this->input->post('nom');
			$montant = $this->input->post('montant');
			$this->code->update_code( $code, $nom, $montant );
			redirect('admin/admin/list_code');
		}

		public function add_code(){
			$data['body'] = 'admin/code/add_code';
			$this->load->view('admin/template/index' , $data);
		}

		public function list_code(){
			$codes = $this->code->get_all_code();
			$data['codes'] = $codes;
			$data['body'] = 'admin/code/list_code';

			$this->load->view( 'admin/template/index', $data );
		}

		public function logout(){
			$this->session->sess_destroy();
			redirect(base_url());
		}

		public function list_user(){
			$users = $this->user->get_users();
			$data['users'] = $users;
			$data['body'] = 'admin/user/list_user';

			$this->load->view('admin/template/index' , $data);
		}

		public function remove_user( $idUser ){
			$this->user->remove_user($idUser);
			redirect('admin/admin/list_user');
		}

		public function remove_code( $code ){
			$this->code->remove_code($code);
			redirect('admin/admin/list_code');
		}
	}

?>