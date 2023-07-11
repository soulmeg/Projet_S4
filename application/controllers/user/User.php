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
				$data['contents'] = 'LandingPage';
				$this->load->view('user/body', $data);
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
			// $this->session->set_userdata('register1_data',[
			// 	'nom' => $nom,
			// 	'prenom' => $prenom,
			// 	'dateNaissance' => $dateNaissance,
			// 	'poids' => $poids,
			// 	'taille' => $taille,
			// 	'sexe' => $sexe
			// ]);
			// redirect('register2');
			$this->load->view('register2');
		}

		//redirect to view AchatCode
		public function redirectAchatCode($user_session){
			$request = "select*from code";
			$request = $this->db->query($request);
			$result['code'] = $request-> result_array(); 
			$result['user_session'] = $user_session;
			$this->load->view('achatCode',$result);	
		}

		//validation
		public function validation($idCode,$idUser){
			$request = "insert into validation values (null,%s,%s,0)";
			$request = sprintf($request,$idCode,$idUser);
			$this->db->query($request);
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
			$data['contents'] = 'profil';
			$this->load->view('user/body',$data);
		}

		public function getPlats($id){
			$data['profil']=$this->user->getAllPlats($id);
			$data['contents'] = 'ingredientsPlat';
			$this->load->view('user/body',$data);
		}

		public function getLandingPage(){
			$data['user_session'] = $this->session->userdata('user_session');
			$data['contents'] = 'LandingPage';
			$this->load->view('user/body',$data);
		}

		public function addWallet(){
			$request = "select*from code";
			$request = $this->db->query($request);
			$data['code'] = $request-> result_array(); 
			$data['user_session'] = $this->session->userdata('user_session');
			$data['contents'] = 'AddMonnaie';
			$this->load->view('user/body',$data);
		}

		public function validationCode(){
			$idCode = $this->getIdCodeByNom($this->input->post('nomCode'));
			$idUser = $this->session->userdata('user_session');
			$objetCode = $this->getCodeById($idCode);						
			try {
				if($objetCode == 0){
					$request = "insert into validation values (null,%s,%s,0)";
					$request = sprintf($request,$idCode,$idUser);
					$this->db->query($request);
					redirect("user/User/addWallet");
				}
				else{
					throw new Exception("Desole , ce code a deja ete utilise");
				}
			}
			catch(Exception $e){
				$this->erreurValidationCode($e->getMessage());
			}
		}

		public function erreurValidationCode($e){
			$data['user_session'] = $this->session->userdata('user_session');
			$data['erreur'] = $e;
			$data['contents'] = 'AddMonnaie';
			$this->load->view('user/body',$data);
		}

		public function getValidation($idCode,$idUser){
			$request = "select*from validation where idCode = %s and idUser =%s ORDER BY idValidation DESC LIMIT 1";
			$request = sprintf($request, $idCode,$idUser);
			$result = $this->db->query($request);
			$response = array(); // Tableau pour stocker les résultats

			if ($result->num_rows() > 0) {
				$row = $result->row();
				$response['idValidation'] = $row->idValidation;
				$response['idCode'] = $row->idCode;
				$response['idUser'] = $row->idUser;
				$response['etat'] = $row->etat;
			}
    		return $response[0];
		}

		public function getCodeById($idCode){
			$request = "select*from code where idCode = %s";
			$request = sprintf($request, $idCode);
			$result = $this->db->query($request);
			$response = array(); // Tableau pour stocker les résultats

			if ($result->num_rows() > 0) {
				$row = $result->row();
				$response['idCode'] = $row->idCode;
				$response['nom'] = $row->nom;
				$response['valeur'] = $row->valeur;
				$response['etat'] = $row->etat;
			}
    		return $response['etat'];
		}

		public function detailRegime($id){
			$data['contents'] = 'detailsRegime';
			$this->load->view('user/body',$data);
		}
		

		public function getIdCodeByNom($nomCode) {
			$request = "SELECT idCode FROM code WHERE nom LIKE '%s'";
			$request = sprintf($request, $nomCode);
			$result = $this->db->query($request);
		
			if ($result->num_rows() > 0) {
				$row = $result->row();
				return $row->idCode;
			} else {
				return null; 
			}
		}
		
		public function choixRegime(){
			$data['user_session'] = $this->session->userdata('user_session');
			$data['contents'] = 'choixRegime';
			$this->load->view('user/body',$data);
		}
	}	

?>