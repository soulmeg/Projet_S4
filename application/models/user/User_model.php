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


		public function login_as_admin( $email, $password ){
			$sql = "select * from users where email = %s and password = %s and estAdmin ='1'";
			$sql = sprintf( $sql, $this->db->escape($email), $this->db->escape($password));
			$sql = $this->db->query($sql);
			$result = $sql->row();
			if( isset($result) ){
				return $result;
			}else{
				throw new Exception( "Désolé veuillez verifier vos identifiants" );
			}
		}
		
		public function user_by_id($idUser){
			$sql = "select * from users where idUser = %s";
			$sql = sprintf($sql, $this->db->escape($idUser));
			$query = $this->db->query($sql);
			$objets = $query->row();
			return $objets;
		}

		public function getAllPlats($id){
			$sql = "select * from Plat where idPlat = %s";
			$sql = sprintf($sql, $this->db->escape($id));
			$query = $this->db->query($sql);
			$objets = $query->result_array();
			return $objets;
		}

		public function login_as_user($email, $password ){
			$sql = "select * from users where email = %s and password = %s and estAdmin ='0'";
			$sql = sprintf( $sql, $this->db->escape($email), $this->db->escape($password));
			$sql = $this->db->query($sql);
			$result = $sql->row();
			// var_dump($sql);
			if(isset($result)){
				return $result;
			}else{
				throw new Exception( "Désolé veuillez verifier vos identifiants" );
			}
		}

		public function insert_user($nom,$prenom,$dateNaissance,$sexe,$email,$password,$poids,$taille){
			$sql = "insert into users(nom,prenom,dateNaissance,sexe,email,password,estAdmin,poids,taille) values(%s,%s,%s,%s,%s,%s,'0',%s,%s)";
			$sql = sprintf( $sql, $this->db->escape($nom), $this->db->escape($prenom),$this->db->escape($dateNaissance),$this->db->escape($sexe),$this->db->escape($email),$this->db->escape($password),$this->db->escape($poids),$this->db->escape($taille));
			$this->db->query($sql);
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