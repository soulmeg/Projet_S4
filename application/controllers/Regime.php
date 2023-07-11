<?php
	defined('BASEPATH') or exit('Direct access not allowed');

	class Regime extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('regimes/Regimes', 'regime');
		}
    }

?>