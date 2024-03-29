<?php

class Apartments extends Controller {

	private $_apartments;

    public function __construct(){
		parent::__construct();

		$this->_apartments = $this->loadModel('apartments_model');
		$this->_cities = $this->loadModel('cities_model');
		$this->_accomodationtype = $this->loadModel('accomodationtype_model');
 
		if(Session::get('loggin') == false){
			url::redirect('admin/login');
		}
	}

	public function apartments() {
		$data['user_data'] = Session::get('user_data');
     	$id_user = $data['user_data'][0]->id_user;

		$data['title'] = 'Apartmani';
 
		$data['apartments'] = $this->_apartments->get_apartments($id_user);

		$this->view->rendertemplate('header',$data);
		$this->view->render('admin/apartments/apartments',$data);
		$this->view->rendertemplate('footer',$data);
	}

	public function add() {
 		$data['user_data'] = Session::get('user_data');

		$data['title'] = 'Dodaj apartman';

		if(isset($_POST['submit'])){

 			$city = $_POST['city'];
 			$accomodationtype = $_POST['accomodationtype']; 
 			$name = $_POST['name'];
 			$description = $_POST['description']; 
 			$lon = $_POST['lon'];
			$lat = $_POST['lat'];
  			$broj_lezaja = $_POST['broj_lezaja'];
			$broj_zvijezdica = $_POST['broj_zvijezdica'];
			$cijena_predsezona_od = $_POST['cijena_predsezona_od'];
			$cijena_sezona_od = $_POST['cijena_sezona_od'];
 			$cijena_posezona_od = $_POST['cijena_posezona_od'];
 			$cijena_predsezona_do = $_POST['cijena_predsezona_do'];
			$cijena_sezona_do = $_POST['cijena_sezona_do'];
 			$cijena_posezona_do = $_POST['cijena_posezona_do'];
			$klima = $_POST['klima'];
			$sat_tv = $_POST['sat_tv'];
			$wifi = $_POST['wifi'];
			$parking = $_POST['parking'];
			$udaljenost_plaza = $_POST['udaljenost_plaza'];
 			$udaljenost_centar = $_POST['udaljenost_centar'];
			$udaljenost_trgovina = $_POST['udaljenost_trgovina'];
			$terasa = $_POST['terasa'];
			$pogled_more = $_POST['pogled_more'];
			$long_description = $_POST['long_description']; 
			$id_user = $data['user_data'][0]->id_user;
 			$image = $_FILES["img"]["name"][0];

 			//var_dump($image);exit;

			if(empty($image)){
				$error[] = 'Unesite sliku';
			}

			if($city == "Odaberi mjesto"){
				$error[] = 'Odaberi mjesto';
			}
 
			if($accomodationtype == "Odaberi tip smještaja"){
				$error[] = 'Odaberi tip smještaja';
			}
  
			if(empty($name)){
				$error[] = 'Unesite ime apartmana';
			}

			if(empty($lon)){
				$error[] = 'Unesite geografsku širinu';
			}

			if(empty($lat)){
				$error[] = 'Unesite geografsku dužinu';
			}
 

			if(!isset($error)) {

				$postdata = array(
					'city_id' => $city,
					'tip_smjestaja' => $accomodationtype, 
					'name' => $name,
					'description' => $description, 
 					'lon' => $lon,
					'lat' => $lat, 
 					'broj_lezaja' => $broj_lezaja,
					'broj_zvijezdica' => $broj_zvijezdica,
					'cijena_predsezona_od' => $cijena_predsezona_od, 
					'cijena_sezona_od' => $cijena_sezona_od,
					'cijena_posezona_od' => $cijena_posezona_od,
					'cijena_predsezona_do' => $cijena_predsezona_do, 
					'cijena_sezona_do' => $cijena_sezona_do,
					'cijena_posezona_do' => $cijena_posezona_do,
					'klima' => $klima,
					'sat_tv' => $sat_tv, 
					'wifi' => $wifi,
					'parking' => $parking,
					'udaljenost_plaza' => $udaljenost_plaza, 
					'udaljenost_centar' => $udaljenost_centar,
					'udaljenost_trgovina' => $udaljenost_trgovina, 
					'terasa' => $terasa,
					'pogled_more' => $pogled_more,
					'long_description' => $long_description,
					'id_user' => $id_user
			 	);

				foreach ($_FILES["img"]["error"] as $key => $error) {
				    if ($error == UPLOAD_ERR_OK) {
				        $tmp_name = $_FILES["img"]["tmp_name"][$key];
				        $name = $_FILES["img"]["name"][$key]; 
 				        move_uploaded_file($tmp_name, "uploads/$name"); 
				        $postdata['img'] =  'uploads/' . $name;
				    }
				}

				foreach ($_FILES["img_1"]["error"] as $key => $error) {
				    if ($error == UPLOAD_ERR_OK) {
				        $tmp_name = $_FILES["img_1"]["tmp_name"][$key];
				        $name = $_FILES["img_1"]["name"][$key]; 
 				        move_uploaded_file($tmp_name, "uploads/$name"); 
				        $postdata['img_1'] =  'uploads/' . $name;
				    }
				}

				foreach ($_FILES["img_2"]["error"] as $key => $error) {
				    if ($error == UPLOAD_ERR_OK) {
				        $tmp_name = $_FILES["img_2"]["tmp_name"][$key];
				        $name = $_FILES["img_2"]["name"][$key]; 
 				        move_uploaded_file($tmp_name, "uploads/$name"); 
				        $postdata['img_2'] =  'uploads/' . $name;
				    }
				}
 

				$this->_apartments->insert($postdata);
				Url::redirect('admin/apartments');
			}
		}
		$data['cities'] = $this->_cities->get_cities();
		$data['accomodationtypes'] = $this->_accomodationtype->get_accomodationtype();

		$this->view->rendertemplate('header',$data);
		$this->view->render('admin/apartments/add',$data,$error);
		$this->view->rendertemplate('footer',$data);

	}	

 
	public function edit($apartment_id) {
		$data['title'] = 'Uredi apartman'; 
 		$data['user_data'] = Session::get('user_data');


		if(isset($_POST['submit'])){
 			$city = $_POST['city'];
 			$accomodationtype = $_POST['accomodationtype'];  
 			$name = $_POST['name'];
 			$description = $_POST['description']; 
			$lon = $_POST['lon'];
			$lat = $_POST['lat'];
  			$broj_lezaja = $_POST['broj_lezaja'];
			$broj_zvijezdica = $_POST['broj_zvijezdica'];
			$cijena_predsezona_od = $_POST['cijena_predsezona_od'];
			$cijena_sezona_od = $_POST['cijena_sezona_od'];
 			$cijena_posezona_od = $_POST['cijena_posezona_od'];
 			$cijena_predsezona_do = $_POST['cijena_predsezona_do'];
			$cijena_sezona_do = $_POST['cijena_sezona_do'];
 			$cijena_posezona_do = $_POST['cijena_posezona_do'];
			$klima = $_POST['klima'];
			$sat_tv = $_POST['sat_tv'];
			$wifi = $_POST['wifi'];
			$parking = $_POST['parking'];
			$udaljenost_plaza = $_POST['udaljenost_plaza'];
 			$udaljenost_centar = $_POST['udaljenost_centar'];
			$udaljenost_trgovina = $_POST['udaljenost_trgovina'];
			$terasa = $_POST['terasa'];
			$pogled_more = $_POST['pogled_more'];
			$long_description = $_POST['long_description'];  
			$id_user = $data['user_data'][0]->id_user;
 
	 

			if($city == "Odaberi mjesto"){
				$error[] = 'Odaberi mjesto';
			}
 
			if($accomodationtype == "Odaberi tip smještaja"){
				$error[] = 'Odaberi tip smještaja';
			}

			if(empty($name)){
				$error[] = 'Unesite ime apartmana';
			}

			if(empty($lon)){
				$error[] = 'Unesite geografsku širinu';
			}

			if(empty($lat)){
				$error[] = 'Unesite geografsku dužinu';
			}
 

			if(!isset($error)) {

				$postdata = array(
					'city_id' => $city,
					'tip_smjestaja' => $accomodationtype, 
					'name' => $name,
					'description' => $description,  
					'lon' => $lon,
					'lat' => $lat, 
 					'broj_lezaja' => $broj_lezaja,
					'broj_zvijezdica' => $broj_zvijezdica,
					'cijena_predsezona_od' => $cijena_predsezona_od, 
					'cijena_sezona_od' => $cijena_sezona_od,
					'cijena_posezona_od' => $cijena_posezona_od,
					'cijena_predsezona_do' => $cijena_predsezona_do, 
					'cijena_sezona_do' => $cijena_sezona_do,
					'cijena_posezona_do' => $cijena_posezona_do,
					'klima' => $klima,
					'sat_tv' => $sat_tv, 
					'wifi' => $wifi,
					'parking' => $parking,
					'udaljenost_plaza' => $udaljenost_plaza, 
					'udaljenost_centar' => $udaljenost_centar,
					'udaljenost_trgovina' => $udaljenost_trgovina, 
					'terasa' => $terasa,
					'pogled_more' => $pogled_more,
					'long_description' => $long_description,
					'id_user' => $id_user
			 	);

				foreach ($_FILES["img"]["error"] as $key => $error) {
				    if ($error == UPLOAD_ERR_OK) {
				        $tmp_name = $_FILES["img"]["tmp_name"][$key];
				        $name = $_FILES["img"]["name"][$key]; 
 				        move_uploaded_file($tmp_name, "uploads/$name"); 
				        $postdata['img'] =  'uploads/' . $name;
				    }
				}

				foreach ($_FILES["img_1"]["error"] as $key => $error) {
				    if ($error == UPLOAD_ERR_OK) {
				        $tmp_name = $_FILES["img_1"]["tmp_name"][$key];
				        $name = $_FILES["img_1"]["name"][$key]; 
 				        move_uploaded_file($tmp_name, "uploads/$name"); 
				        $postdata['img_1'] =  'uploads/' . $name;
				    }
				}

				foreach ($_FILES["img_2"]["error"] as $key => $error) {
				    if ($error == UPLOAD_ERR_OK) {
				        $tmp_name = $_FILES["img_2"]["tmp_name"][$key];
				        $name = $_FILES["img_2"]["name"][$key]; 
 				        move_uploaded_file($tmp_name, "uploads/$name"); 
				        $postdata['img_2'] =  'uploads/' . $name;
				    }
				}

				$where = array('apartment_id' => $apartment_id);
				$this->_apartments->update($postdata, $where);
				Url::redirect('admin/apartments');
			}
		}

		$data['row'] = $this->_apartments->get_apartment($apartment_id);
		$data['cities'] = $this->_cities->get_cities();
		$data['accomodationtypes'] = $this->_accomodationtype->get_accomodationtype();
		
		$this->view->rendertemplate('header',$data);
		$this->view->render('admin/apartments/edit',$data,$error);
		$this->view->rendertemplate('footer',$data);

	}	

	public function view($apartment_id) {
		$data['title'] = 'Pregledaj apartman'; 
  		$data['user_data'] = Session::get('user_data');

		$data['row'] = $this->_apartments->get_apartment($apartment_id);

		$this->view->rendertemplate('header',$data);
		$this->view->render('admin/apartments/view',$data,$error);
		$this->view->rendertemplate('footer',$data);

	}	

	public function delete($apartment_id) {
		$this->_apartments->delete($apartment_id);
		Url::redirect('admin/apartments');
	}	
}