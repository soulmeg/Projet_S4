<?php
	defined('BASEPATH') or exit('Direct access not allowed');

	class Regime extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('regime/Regime_model', 'regime');
		}
		
		public function getRegimes($idRegime,$poids_miampy){
			$data['regimes']=$this->regime->getRegime($idRegime,$poids_miampy);
			$data['contents'] = 'proposition_regime';
			$this->load->view('user/body',$data);
		}
		
		public function check_regime(){
			$poids = $this->input->post('poids');
			$data['regimes']=$this->regime->getAllRegimes($poids);
			$data['poids_session']=$this->session->userdata('poids_session',$poids);
			$data['contents'] = 'LandingPage';
			$this->load->view('user/body', $data);
		}
    }

?>