<?php
	defined('BASEPATH') or exit("No direct access allowed ahaha ");

	class Admin extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			if( !isset($_SESSION['admin_session']) ){
				redirect(site_url('welcome'));
			}
			$this->load->model("user/User_model", 'user');
			$this->load->model("code/Code_model", 'code');
			$this->load->model("code/Validation_model", 'validation');
			$this->load->model("activities/Sport_model", 'sport');
			$this->load->model("ingredients/Ingredient_model", 'ingredient');
			$this->load->model("plat/Plat_model", 'plat');
			$this->load->model("plat/Regime_model", 'regime');
		}

		public function index(){ // miload dashboard

			$user = $this->session->userdata("admin");

			$data["user"] = $user;
			$data['today'] = date("d-m-Y");
			$data['body'] = 'admin/acceuil';
			$data['user_count'] = count($this->user->get_users());
			$data['diet_count'] = count($this->regime->get_all());
			$data['sport_count'] = count($this->sport->get_sports());
			$data['code_count'] = count($this->code->get_all_code());
			// Mila maka ny nombre d'users total

			$this->load->view('admin/template/index', $data);
		}

		public function save_code(){
			$nom = $this->input->post('nom');
			$montant = $this->input->post('montant');
			$this->code->insert_code( $nom, $montant);
			redirect(site_url('admin/admin/list_code'));
			// redirect('admin/admin/list_code');
		}

		public function modify_code( $code ){
			$code = $this->code->getCode($code);
			$data['code'] = $code;
			$data['body'] = 'admin/code/modify_code';

			$this->load->view('admin/template/index' , $data);
		}


		public function modify_codes( $code ){
			$nom = $this->input->post('nom');
			$montant = $this->input->post('montant');
			$this->code->update_code( $code, $nom, $montant );
			redirect(site_url('admin/admin/list_code'));
		}

		public function add_code(){
			$data['body'] = 'admin/code/add_code';
			$this->load->view('admin/template/index' , $data);
		}

		public function list_sports(){
			$sports = $this->sport->get_sports();
			$data['sports'] = $sports;
			$data['body'] = 'admin/sports/liste_sports';

		}

		public function list_code(){
			$codes = $this->code->get_all_code();
			$data['codes'] = $codes;
			$data['body'] = 'admin/code/list_code';

			$this->load->view( 'admin/template/index', $data );
		}

		public function logout(){
			$this->session->sess_destroy();
			redirect(base_url());
		}

		public function list_user(){
			$users = $this->user->get_users();
			$data['users'] = $users;
			$data['body'] = 'admin/user/list_user';

			$this->load->view('admin/template/index' , $data);
		}

		public function remove_user( $idUser ){
			$this->user->remove_user($idUser);
			redirect(site_url('admin/admin/list_user'));
		}

		public function remove_code( $code ){
			$this->code->remove_code($code);
			redirect(site_url('admin/admin/list_code'));
		}

		public function modify_sport( $idSport ){
			$sport = $this->sport->getSport( $idSport );
			$data['sport'] = $sport;
			$data['body'] = 'admin/sports/modify';
			$this->load->view('admin/template/index' , $data);
		}

		public function update_sport( $id_sport ){
			$nom = $this->input->post('nom');
			$perte = $this->input->post('perte');
			$this->sport->update_sport( $id_sport, $nom, $perte );
			redirect(site_url('admin/admin/list_sport'));
		}

		public function add_sport(){
			$data['body'] = 'admin/sports/add_code';
			$this->load->view('admin/template/index', $data);
		}

		public function insert_sport(){
			$nom = $this->input->post("nom");			
			$perte = $this->input->post("perte");
			$this->sport->add_sport( $nom, $perte );
			redirect(site_url('admin/admin/list_sport'));
		}

		public function list_sport(){
			$data['sports'] = $this->sport->get_sports();
			$data['body'] = 'admin/sports/liste_sports';
			$this->load->view("admin/template/index" , $data);
		}

		public function remove_sport( $id_sport ){
			$this->sport->remove_sport( $id_sport );
			redirect(site_url('admin/admin/list_sport'));
		}


		public function list_ingredients(){
			$ingredients = 	$this->ingredient->get_all_ingredients();
			$data['ingredients'] = $ingredients;
			$data['body'] = 'admin/ingredient/list_ingredient';

			$this->load->view( 'admin/template/index' , $data );
		}

		public function add_ing(){
			$this->load->model('ingredients/Category_model' , 'category');
			$data['body'] = 'admin/ingredient/add_ingredient';
			$data['categories'] = $this->category->get_all_category();

			$this->load->view('admin/template/index' , $data);

		}

		public function add_ingredient(){
			$categorie = $this->input->post('categorie');
			$nom = $this->input->post('nom');
			$apport = $this->input->post('apport');
			$unite = $this->input->post('unite');
			$this->ingredient->add_ingredient( $categorie, $nom, $unite,$apport );
			redirect( site_url('admin/admin/list_ingredients') );
		}

		public function modify_ingredient( $id ){
			$this->load->model('ingredients/Category_model' , 'category');
			$ingredient = $this->ingredient->get_ingredient( $id );
			$categories = $this->category->get_all_category();
			$data['body'] = 'admin/ingredient/modify_ingredient';
			$data['ingredient'] = $ingredient;
			$data['categories'] = $categories;
			$this->load->view('admin/template/index', $data);
		}

		public function mod_ingredient( $id ){
			$category = $this->input->post('categorie');
			$nom = $this->input->post('nom');
			$apport = $this->input->post('apport');
			$unite = $this->input->post('unite');

			$this->ingredient->update_ingredients( $id, $category, $nom, $unite, $apport );

			redirect(site_url('admin/admin/list_ingredients'));
		}

		public function list_plate(){
			$plats = $this->plat->get_all_plate();
			$data['plats'] = $plats;
			$data['body'] = 'admin/plats/lists_plats';

			$this->load->view('admin/template/index', $data);
		}

		public function add_plates(){
			$ingredients = $this->ingredient->get_all_ingredients();
			$data['ingredients'] = $ingredients;
			$data['body'] = 'admin/plats/add_plats';

			$this->load->view('admin/template/index', $data);
		}

		public function add_plate(){
			$ingredients = $this->input->post('ingredient');
			$nom = $this->input->post('nom');
			$apport = $this->input->post('apport');
			$this->plat->add_plates( $nom, $apport, $ingredients );
			redirect(site_url('admin/admin/list_plate'));
		}

		public function modify_plate($idplate){
			$plat = $this->plat->get_plate($idplate);
			$data['plat'] = $plat;
			$data['ingredients'] = $this->ingredient->get_all_ingredients();
			$data['body'] = 'admin/plats/modify_plats';

			$this->load->view('admin/template/index' , $data);
		}

		public function modify_plat( $id_plate ){
			$nom = $this->input->post("nom");
			$apport = $this->input->post("apport");
			$ingredients = $this->input->post("ingredient");
			$idDetails = $this->input->post("idDetails");

			$this->plat->modify_plate( $id_plate, $nom, $apport, $ingredients, $idDetails );
			redirect(site_url('admin/admin/list_plate'));
		}

		public function list_validation(){
			$validations = $this->validation->get_all();
			$data['validations'] = $validations;
			$data['body'] = "admin/validation/list_validation";

			$this->load->view('admin/template/index', $data);
		}

		public function reject_validation($idcode){
			$this->validation->reject($idcode);
			redirect(site_url('admin/admin/list_validation'));
		}

		public function accept_validation($idvalidation, $idcode, $montant, $iduser){
			$this->validation->validate($idvalidation, $idcode, $montant, $iduser);
			redirect(site_url('admin/admin/list_validation'));
		}

		public function list_regimes(){
			$regimes = $this->regime->get_all();
			$data['regimes'] = $regimes;
			$data['body'] = 'admin/regime/liste_regime';
			$this->load->view( 'admin/template/index', $data );
		}

		public function add_regimes(){
			$plats = $this->plat->get_plates();
			$data['body'] = 'admin/regime/add_regime';
			$data['plats'] = $plats;
			$this->load->view('admin/template/index' , $data);
		}

		public function add_regime(){
			$nom = $this->input->post('nom');
			$apport = $this->input->post('apports');
			$plats_composants = $this->input->post('plats');
			$tranche_durees = $this->input->post('duree');
			$tranche_apports = $this->input->post('apport');
			$tranche_prixs = $this->input->post('prix');
			$this->regime->add_regime($nom, $apport, $plats_composants, $tranche_durees, $tranche_apports, $tranche_prixs);
			redirect(site_url('admin/admin/list_regimes'));
		}


		public function modify_regime( $idRegime ){
			$regime = $this->regime->get_regime( $idRegime );
			$data['regime'] = $regime;
			$data['plats'] = $this->plat->get_all_plate();
			$data['body'] = 'admin/regime/modify_regime';
			$this->load->view( 'admin/template/index' , $data );
		}

		public function see_regime( $idRegime ){
			$regime = $this->regime->get_regime( $idRegime );
			$data['regime'] = $regime;
			$data['plats'] = $this->plat->get_all_plate();
			$data['body'] = 'admin/regime/see_regime';
			$this->load->view( 'admin/template/index' , $data );
		}

	}

?>