<?php
	defined('BASEPATH') or exit("Can't access using direct call");

	class Regime_model extends CI_Model{

		// Retourne un tableau du regime choisi avec le but du poids
		public function v_getAllRegimes($idRegime,$poid_miampy){
			$sql ="select PrixRegime.idRegime,Regime.nom,PrixRegime.apport,PrixRegime.duree,PrixRegime.PrixRegime
			from PrixRegime
			join Regime 
			on PrixRegime.i	dRegime=Regime.idRegime where Regime.idRegime= %s and PrixRegime.apport <= %s ;";
			$sql = sprintf($sql, $this->db->escape($idRegime), $this->db->escape($poid_miampy));
			// var_dump($sql);
			$query = $this->db->query($sql);
			$objets = $query->result_array();
			return $objets;
		}


		public function getAllRegimes($poid_miampy){
			$sql ="select PrixRegime.idRegime,Regime.nom,PrixRegime.apport,PrixRegime.duree,PrixRegime.PrixRegime
			from PrixRegime
			join Regime 
			on PrixRegime.idRegime=Regime.idRegime where PrixRegime.apport <= %s ;";
			$sql = sprintf($sql,$this->db->escape($poid_miampy));
			// var_dump($sql);
			$query = $this->db->query($sql);
			$objets = $query->result_array();
			return $objets;
		}


		public function v_getAllActivity(){
			$sql = "select a.idActivite,a.nom,da.duree,da.perte
			from detailActivite as da 
			join activite as a
			on a.idActivite = da.idActivite;";
			$query = $this->db->query($sql);
			$objets = $query->result_array();
			return $objets;
		}

		public function getDiff($poids_ajoute,$apport_total){
			$difference =$apport_total - $poids_ajoute;
			if($difference != 0){
				return $difference;
			}
			return null;
		}


		public function checkActivityOptimal($valeur_difference) {
			$activities = $this->v_getAllActivity();
			$minimumDifference = null;
			$activityOptimal = null;
		
			foreach ($activities as $activity) {
				$difference = abs($activity['perte'] - $valeur_difference);
				var_dump($activity['perte']);
				if($valeur_difference != 0 || $valeur_difference != null){
					if ($minimumDifference === null || $difference < $minimumDifference) {
						$minimumDifference = $difference;
						$activityOptimal = $activity;
					}
				}
			}
			return $activityOptimal;
		}


		// est ce que tu peux me donner l'activite qui a le minimum de difference avec $valeur_difference?
		public function nombreDeFois($poids_miampy,$apport_regime){
			$count=1;
			$somme = $apport_regime;
			while($somme < $poids_miampy){
				$count=$count+1;
				$somme = $somme + $apport_regime;
			}
			return $count;
		}


		public function getRegime($idRegime,$poids_miampy){

			$tableauRegime = $this->v_getAllRegimes( $idRegime, $poids_miampy );
			
			for($i=0;$i<count($tableauRegime);$i++){
				$nb = $this->nombreDeFois( $poids_miampy, $tableauRegime[$i]['apport'] );
				$difference= $this->getDiff( $poids_miampy, ( $nb * $tableauRegime[$i]['apport'] ) );
				var_dump($difference);
				$activites = $this->checkActivityOptimal($difference);
				$data[] = array(
					'nombre' =>$nb,
					'nom' => $tableauRegime[$i]['nom'],
					'apport_unitaire' => $tableauRegime[$i]['apport'],
					'apport_total' => $nb * $tableauRegime[$i]['apport'],
					'prix_total' => $nb * $tableauRegime[$i]['PrixRegime'],
					'duree' =>$tableauRegime[$i]['duree'],
					'duree_regime' => $nb * $tableauRegime[$i]['duree'],
					'activites' => $activites
				);
			}
			// var_dump($data);
			return $data;
		}

		

	


	}

?>