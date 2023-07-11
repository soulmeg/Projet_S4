<?php
	
	defined('BASEPATH') or exit("No direct call access");

	class Validation_model extends CI_Model{

		// Inona no atao ato
		// Maka ny validation rehetra

		public function get_all(){
			$sql = "
				select va.*, c.nom as code, c.valeur as montant, c.etat as valide, u.nom as username, u.prenom as lastname
				from validation as va
				join code as c
				on va.idCode = c.idCode
				join users as u 
				on va.idUser = u.idUser
			";

			$sql = $this->db->query($sql);
			$results = $sql->result_array();
			return $results;
		}

		public function validate( $idvalidation, $idcode, $montant ,$idUser ){
			$sql = "update code set etat = 1 where idCode = %s";
			$this->load->model("user/User_model" , 'user');
			$user_money = $this->user->get_money($idUser);
			$somme = $user_money["argent"] + $montant;
			$sql2 = "update porteMonnaie set argent = %s where idUser = %s";
			$sql3 = "update validation set etat = 1 where idValidation = %s";
			$sql = sprintf( $sql, $this->db->escape($idcode) );
			$sql2 = sprintf($sql2, $this->db->escape($montant), $this->db->escape($idUser));
			$sql3 = sprintf( $sql3, $this->db->escape($idvalidation) );
			$this->db->query($sql);
			$this->db->query($sql2);
			$this->db->query($sql3);
		}

		public function reject( $idvalidation ){
			$sql = "update validation set etat = -1 where idValidation = %s";
			$sql = sprintf( $sql, $this->db->escape($idvalidation) );
			$this->db->query($sql);
		}

	}
	

?>