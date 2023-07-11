<?php
	defined('BASEPATH') or exit("No direct access script allowed");

	class Code_model extends CI_Model{

		public function insert_code( $identifiant, $value ){
			$sql = "insert into code( nom, valeur, etat ) values (%s , %s , %s)";
			$sql = sprintf($sql, $this->db->escape($identifiant), $this->db->escape($value), 0);
			$this->db->query($sql);
		}

		public function update_code( $id_code, $identifiant, $value, $etat = 0 ){
			$sql = "update code set nom = %s, valeur = %s, etat = %s where idCode = %s";
			$sql = sprintf($sql, $this->db->escape($identifiant), $this->db->escape($value), $this->db->escape($etat), $this->db->escape($id_code));
			$this->db->query($sql);
		}

		public function get_all_code(){
			$codes = $this->db->get("code");
			$codes = $codes->result_array();
			return $codes;
		}

		public function getCode( $idCode ){
			$sql = "select * from code where idCode = %s";
			$sql = sprintf($sql , $this->db->escape($idCode));
			$sql = $this->db->query($sql);
			$code = $sql->row_array();
			return $code;
		}

		public function remove_code( $code ){
			$sql = "delete from code where idCode = %s";
			$sql = sprintf($sql , $this->db->escape($code));
			$this->db->query($sql);
		}

	}

?>