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
			$sql = "select * from users where email = %s and password = %s and estAdmin ='t'";
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
			$sql = sprintf( $sql, $this->db->escape($idUser));
			$result = $sql->row();
			return $result;
		}

		public function login_as_user($email, $password ){
			$sql = "select * from users where email = %s and password = %s and estAdmin ='f'";
			$sql = sprintf( $sql, $this->db->escape($email), $this->db->escape($password));
			$sql = $this->db->query($sql);
			$result = $sql->row();
			if( isset($result) ){
				return $result;
			}else{
				throw new Exception( "Désolé veuillez verifier vos identifiants" );
			}
		}

		public function insert_user($nom,$prenom,$dateNaissance,$sexe,$email,$password,$poids,$taille){
			$sql = "insert into users(nom,prenom,dateNaissance,sexe,email,password,estAdmin,poids,taille) values(%s,%s,%s,%s,%s,%s,'0',%s,%s)";
			$sql = sprintf( $sql, $this->db->escape($nom), $this->db->escape($prenom),$this->db->escape($dateNaissance),$this->db->escape($sexe),$this->db->escape($email),$this->db->escape($password),$this->db->escape($poids),$this->db->escape($taille));
			$this->db->query($sql);
			// var_dump($sql);
		}

		


	}

?>