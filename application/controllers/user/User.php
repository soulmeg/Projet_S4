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

		public function login_user(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			try{
				$user = $this->user->login_as_user($username, $password);
				$this->session->set_userdata('user_session', true);
				$this->session->set_userdata('user_id', $user->idUser);
				// redirect("acceuil/Acceuil/bienvenue");
				$data['user_session'] = $this->session->userdata('user_session');
				$this->load->view('acceuil', $data);
			}catch(Exception $e){
				echo $e->getMessage();
			}
		}


		// Dans votre contrôleur pour le formulaire de register1.php
		public function process_register1()
		{
			// Récupérer les données du formulaire
			$nom = $this->input->post('nom');
			$prenom = $this->input->post('prenom');
			$dateNaissance = $this->input->post('dateNaissance');
			$poids = $this->input->post('poids');
			$taille = $this->input->post('taille');
			$sexe = $this->input->post('sexe');

			// Stocker les données dans une variable de session
			$this->session->set_userdata('register1_data', [
				'nom' => $nom,
				'prenom' => $prenom,
				'dateNaissance' => $dateNaissance,
				'poids' => $poids,
				'taille' => $taille,
				'sexe' => $sexe
			]);
			// redirect('register2');
			$this->load->view('register2');
		}


		
		public function insertion_user(){
			$nom = $this->input->post('nom');
			$prenom = $this->input->post('prenom');
			$dateNaissance = $this->input->post('dateNaissance');
			$sexe = $this->input->post('sexe');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$poids = $this->input->post('poids');
			$taille = $this->input->post('taille');
			try {
				$this->user->insert_user($nom,$prenom,$dateNaissance,$sexe,$email,$password,$poids,$taille);
				redirect('acceuil/Acceuil/user');
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}

		public function logout(){
			$this->load->library('session');
			$this->session->unset_userdata('user');  
			redirect("acceuil/Acceuil/loginUser"); 
		}
		
		public function getUserById($id){
			$data['profil']=$this->user->user_by_id($id);
			$this->load->view('profil',$data);
		}
		
	}

?>