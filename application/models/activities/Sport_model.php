<?php

	defined('BASEPATH') or exit("Can't access with direct script");

	class Sport_model extends CI_Model{

		public function get_sports(){
			$query = $this->db->get("activite");
			$results = $query->result_array();
			return $results;
		}

		public function getSport( $idSport ){
			$query = "select * from activite where idActivite = %s";
			$query = sprintf($query, $this->db->escape($idSport));
			$query = $this->db->query($query);
			return $query->row_array();
		}

		public function remove_sport( $idSport ){
			$query = "delete from activite where idActivite = %s";
			$query = sprintf($query, $this->db->escape($idSport));
			$this->db->query($query);
		}

		public function add_sport( $nom, $perte ){
			$query = "insert into activite(nom, perte) values ( %s, %s )";
			$query = sprintf($query, $this->db->escape($nom) , $this->db->escape($perte));
			$this->db->query($query);
		}

		public function update_sport( $id_sport, $nom, $perte ){
			$query = "update activite set nom = %s, perte = %s where idActivite = %s";
			$query = sprintf($query, $this->db->escape($nom), $this->db->escape($perte), $this->db->escape($id_sport));
			$this->db->query($query);
		}

	}

?>