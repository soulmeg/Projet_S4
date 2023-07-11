<?php
	defined('BASEPATH') or exit("Can't access using direct call");

	class Regimes extends CI_Model{
		
		public function v_getAllRegimes($idRegime){
			$sql = "select PrixRegime.idRegime,Regime.nom,Regime.apport,PrixRegime.duree,PrixRegime.PrixRegime
			from PrixRegime
			join Regime 
			on PrixRegime.idRegime=Regime.idRegime where Regime.idRegime = %s; ";
			$sql = sprintf($sql, $this->db->escape($idRegime));
			$query = $this->db->query($sql);
			$objets = $query->result_array();
			return $objets;
		}

		public function getArrayPerRegime($idRegime,$poidsDesire){
			$sql = "select*"
		}
	}

?>