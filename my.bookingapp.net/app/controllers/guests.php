<?php

class Guests extends Controller {

	private $_guests;


    public function __construct(){
		parent::__construct();
 		$this->_guests = $this->loadModel('guests_model');

		if(Session::get('loggin') == false){
			url::redirect('admin/login'); 
		}
  
	}

	public function guests() {

	 	$data['user_data'] = Session::get('user_data');
     	$id_user = $data['user_data'][0]->id_user;

 		$data['title'] = 'Gosti'; 
		$data['guests'] = $this->_guests->get_guests($id_user);

		$this->view->rendertemplate('header',$data);
		$this->view->render('admin/guests/guests',$data);
		$this->view->rendertemplate('footer',$data);
	}

	public function addGuest() {

		$data['title'] = 'Dodaj gosta';
 		$data['user_data'] = Session::get('user_data');

		if(isset($_POST['submit'])){
			$firstName = $_POST['firstName'];
			$lastName = $_POST['lastName'];
			$adress = $_POST['adress'];
			$zip_code = $_POST['zip_code'];
			$city = $_POST['city'];
			$country = $_POST['country'];
			$date = $_POST['date'];
			$contact_number = $_POST['contact_number'];
			$email = $_POST['email'];
 			$id_user = $data['user_data'][0]->id_user;

			
			if(empty($firstName)){
				$error[] = 'Unesite ime gosta';
			}

			if(empty($lastName)){
				$error[] = 'Unesite prezime gosta';
			}
			if(!isset($error)) {

				$postdata = array(
					'firstName' => $firstName,
					'lastName' => $lastName,
					'adress' => $adress,
					'zip_code' => $zip_code,
					'city' => $city,
					'country' => $country,
					'date' => $date,
					'contact_number' => $contact_number,
					'email' => $email,
					'id_user' => $id_user
			 	);

				$this->_guests->insert($postdata);
				Url::redirect('admin/guests');
			}
		}

		$this->view->rendertemplate('header',$data);
		$this->view->render('admin/guests/addguest',$data,$error);
		$this->view->rendertemplate('footer',$data);

	}	

 
	public function editGuest($guest_id) {
		$data['title'] = 'Uredi gosta'; 
 		$data['user_data'] = Session::get('user_data');


		if(isset($_POST['submit'])){
			$firstName = $_POST['firstName'];
			$lastName = $_POST['lastName'];
			$adress = $_POST['adress'];
			$zip_code = $_POST['zip_code'];
			$city = $_POST['city'];
			$country = $_POST['country'];
			$date = $_POST['date'];
			$contact_number = $_POST['contact_number'];
			$email = $_POST['email'];
			$id_user = $data['user_data'][0]->id_user;

			if(empty($firstName)){
				$error[] = 'Unesite ime gosta';
			}

			if(empty($lastName)){
				$error[] = 'Unesite prezime gosta';
			}

			if(!isset($error)) {

				$postdata = array(
					'firstName' => $firstName,
					'lastName' => $lastName,
					'adress' => $adress,
					'zip_code' => $zip_code,
					'city' => $city,
					'country' => $country,
					'date' => $date,
					'contact_number' => $contact_number,
					'email' => $email,
					'id_user' => $id_user
			 	);
				$where = array('guest_id' => $guest_id);
				$this->_guests->update($postdata, $where);
				Url::redirect('admin/guests');
			}
		}

		$data['row'] = $this->_guests->get_guest($guest_id);

		$this->view->rendertemplate('header',$data);
		$this->view->render('admin/guests/editguest',$data,$error);
		$this->view->rendertemplate('footer',$data);

	}	

	public function view($guest_id) {
		$data['title'] = 'Pregledaj gosta'; 
  		$data['user_data'] = Session::get('user_data');

		$data['row'] = $this->_guests->get_guest($guest_id);

		$this->view->rendertemplate('header',$data);
		$this->view->render('admin/guests/view',$data,$error);
		$this->view->rendertemplate('footer',$data);

	}	

	public function deleteGuest($guest_id) {
		$this->_guests->delete($guest_id);
		Url::redirect('admin/guests');
	}	
}