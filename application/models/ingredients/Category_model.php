<?php
	
	defined('BASEPATH') or exit("Can't access via direct script");

	class Category_model extends CI_Model{

		public function get_all_category(){
			$categories = $this->db->get('categorie');
			$categories = $categories->result_array();
			return $categories;
		}

		public function get_category( $category ){
			$sql = "select * from categorie where idCategorie = %s";
			$sql = sprintf($sql, $this->db->escape($category));
			$sql = $this->db->query($sql);
			$sql = $sql->result_array();
			return $sql;
		}


		public function add_category( $nom ){
			$sql = "insert into categorie(nom) values ( %s )";
			$sql = sprintf($sql, $this->db->escape( $nom ));
			$this->db->query($sql);
		}


	}


?>