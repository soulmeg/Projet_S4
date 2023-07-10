<?php
	defined('BASEPATH') or exit("Can't access using direct call");

	class User_model extends CI_Model{
		
		public $idUser;
		public $nom;
		public $prenom;
		public $dateNaissance;
		public $sexe;
		public $email;
		public $password;
		public $admin;

		// Afaka factorena ito zavatra ito

		public function login_as_admin( $email, $password ){
			$sql = "select * from user where email = %s and password = %s and estAdmin = 1";
			$sql = sprintf( $sql, $this->db->escape($email), $this->db->escape($password));
			$sql = $this->db->query($sql);
			$result = $sql->row();
			if( isset($result) ){
				return $result;
			}else{
				throw new Exception( "Désolé veuillez verifier vos identifiants" );
			}
		}

		public function get_users(){
			$sql = $this->db->get("user");
			$results = array();
			foreach ($sql->result_array() as $result) {
				$results[] = $result;
			}
			return $results;
		}

	}

?>