<?php
	
	defined('BASEPATH') or exit("No direct acccess allowed");

	class Ingredient_model extends CI_Model{

		public function get_all_ingredients(  ){
			$sql = "
					select ing.*, ca.nom as categorie
					from ingredients as ing join categorie as ca
					on ing.idCategorie = ca.idCategorie
				";

			$query = $this->db->query($sql);
			$results = $query->result_array();
			return $results;
		}
		
		public function add_ingredient( $idCategorie, $nom, $unite, $apport ){
			$sql = "insert into ingredients( idCategorie, nom, unite, apport ) values (%s , %s, %s , %s)";
			$sql = sprintf($sql, $this->db->escape($idCategorie),$this->db->escape($nom),$this->db->escape($unite), $this->db->escape($apport));
			$this->db->query($sql);
		}

		public function get_ingredient( $id ){
			$sql = "select ing.*, ca.nom as categorie from ingredients as ing join categorie as ca on ing.idCategorie = ca.idCategorie where ing.idIngredient = %s";
			$sql = sprintf($sql, $this->db->escape($id));
			$sql = $this->db->query($sql);
			return $sql->row_array();
		}

		public function update_ingredients($id, $idCategorie, $nom, $unite, $apport ){
			$sql = "update ingredients set idCategorie = %s, nom = %s, unite = %s, apport = %s where idIngredient = %s";
			$sql = sprintf($sql, $this->db->escape($idCategorie), $this->db->escape($nom), $this->db->escape($unite), $this->db->escape($apport), $this->db->escape($id));
			$this->db->query( $sql );
		}

	}

?>