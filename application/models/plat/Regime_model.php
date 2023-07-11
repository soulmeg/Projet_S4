<?php
	
	defined('BASEPATH') or exit("Can't access direct");

	class Regime_model extends CI_Model{

		public function get_all(){
			$sql = $this->db->get('Regime');
			$sql = $sql->result_array();
			return $sql;
		}


		public function get_regime( $idRegime ){

			$sql = "select * from Regime where idRegime = %s";
			$sql_data = "select * from DetailsRegime as dr join Plat as p on dr.idPlat = p.idPlat where idRegime = %s";
			$sql_data_2 = "select * from PrixRegime where idRegime = %s";
			$sql = sprintf( $sql, $idRegime );
			$sql_data = sprintf( $sql_data, $idRegime );
			$sql_data_2 = sprintf( $sql_data_2, $idRegime );
			$sql = $this->db->query($sql);
			$sql_data = $this->db->query($sql_data);
			$sql_data_2 = $this->db->query($sql_data_2);
			$sql = $sql->row_array();
			$sql['plats'] = $sql_data->result_array();
			$sql['tranches'] = $sql_data_2->result_array();
			return $sql;
		}

		public function add_regime( $nom, $apport, $plats, $durees, $apports, $prixs ){
			$data_1 = array(
				'nom' => $nom,
				'apport' => $apport
			);

			$this->db->insert('Regime' , $data_1);

			$insert_id = $this->db->insert_id();

			// Maintenant ny plat

			foreach ($plats as $plat) {
				$data_2 = array(
					'idRegime' => $insert_id,
					'idPlat' => $plat
				);

				$this->db->insert('DetailsRegime', $data_2);
			}

			for($i = 0; $i < count($durees) ; $i++ ){
				$data_3 = array(
					'idRegime' => $insert_id,
					'PrixRegime' => $prixs[$i],
					'duree' => $durees[$i],
					'apport' => $apports[$i]
				);

				$this->db->insert('PrixRegime' , $data_3);
			}

		}


	}



?>