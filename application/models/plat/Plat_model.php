<?php
	defined('BASEPATH') or exit('No access allowed');

	class Plat_model extends CI_Model{

		public function get_all_plate(){
			$sql = "
				select p.idPlat, p.nom as plat, p.apport, ing.*
				from Plat as p join detailsPlat as dP
				on p.idPlat = dP.idPlat 
				join ingredients as ing 
				on dP.idIngredient = ing.idIngredient
			";

			$sql = $this->db->query($sql);
			$query = $sql->result_array();
			return $query;
		}

		public function get_plate( $id_plate ){
			$sql = "
				select p.idPlat, p.nom as plat, p.apport, ing.*
				from Plat as p join detailsPlat as dP
				on p.idPlat = dP.idPlat 
				join ingredients as ing 
				on dP.idIngredient = ing.idIngredient
				where p.idPlat = %s
			";

			$sql = sprintf($sql, $this->db->escape($id_plate));
			// tokony alaina daholo ny details an'ny plats iray
			$sql2 = "select * from detailsPlat as dp join ingredients as ing on dp.idIngredient = ing.idIngredient where dp.idPlat = %s";
			$sql2 = sprintf($sql2, $this->db->escape($id_plate));
			// echo $sql2;
			$sql = $this->db->query($sql);
			$sql2 = $this->db->query($sql2);
			$query = $sql->row_array();
			$query['details'] = $sql2->result_array();
			return $query;
		}

		public function add_plates( $nom, $apport, $ingredients = array() ){
			$data = array(
				"nom" => $nom,
				"apport" => $apport
			);

			$this->db->insert('Plat' , $data);
			$id = $this->db->insert_id( );
			// echo $id;
			foreach ($ingredients as $ingredient) {
				$data1 = array(
					"idPlat" => $id,
					"idIngredient" => $ingredient
				);

				$this->db->insert('detailsPlat' , $data1);
			}
		}

		public function modify_plate( $id, $nom, $apport, $detailss, $ingredients ){
			$sql = "update Plat set nom = %s, apport = %s where idPlat = %s";
			$details = "update detailsPlat set idIngredient = %s where idDetailsPlat = %s";
			$plat_original = $this->get_plate($id);
			$details_count = count($plat_original['details']);

			$sql = sprintf($sql, $this->db->escape($nom), $this->db->escape($apport), $this->db->escape($id));
			$this->db->query($sql);
			$i = 0;
			for( ;$i < $details_count ; $i++ ){
				$detail = sprintf($details, $ingredients[$i], $detailss[$i]);
				$this->db->query($detail);
			}
			for( ; $i < count($ingredients); $i++ ){
				$data = array(
					'idPlat' => $id,
					'idIngredient' => $ingredients[$i]
				);
				$this->db->insert('detailsPlat' ,$data);

			}

		}

	}


?>