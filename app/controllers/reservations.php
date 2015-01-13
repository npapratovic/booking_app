<?php

class Reservations extends Controller {

	private $_reservations;
	private $_guests;

    public function __construct(){
		parent::__construct();

		$this->_reservations = $this->loadModel('reservations_model');
		$this->_guests = $this->loadModel('guests_model');
		$this->_apartments = $this->loadModel('apartments_model');

		  if(Session::get('loggin') == false){
			url::redirect('admin/login');
		} 
	}

	public function reservations() {
		$data['title'] = 'Rezervacije';

		$data['reservations'] = $this->_reservations->get_reservations();
		$data['diff_apartments'] = $this->_reservations->get_diff_apartments();

		$this->view->rendertemplate('header',$data);
		$this->view->render('admin/reservations/reservations',$data);
		$this->view->rendertemplate('footer',$data);
	}

	public function add() {

		$data['title'] = 'Dodaj rezervaciju';

		if(isset($_POST['submit'])){

 			$id_guest = $_POST['id_guest'];
			$id_apartment = $_POST['id_apartment'];
			$check_in = $_POST['check_in'];
			$check_out = $_POST['check_out'];
 			$payed = $_POST['payed'];

			if(empty($id_guest)){
				$error[] = '<div class="alert alert-dismissable alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Greška: </strong>  Unesite šifru gosta.</div>';
			}

			if(empty($id_apartment)){
				$error[] = '<div class="alert alert-dismissable alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Greška: </strong>  Unesite apartman.</div>';
			}

			if(empty($check_in)){
				$error[] = '<div class="alert alert-dismissable alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Greška: </strong>  Unesite check in datum.</div>';
			}

			if(empty($check_out)){
				$error[] = '<div class="alert alert-dismissable alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Greška: </strong>  Unesite check out datum.</div>';
			}

			if(empty($payed)){
				$error[] = '<div class="alert alert-dismissable alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Greška: </strong>  Odaberite da li je plaćeno.</div>';
			}

			if(!isset($error)) {

				$postdata = array(
					'id_guest' => $id_guest,
					'id_apartment' => $id_apartment,
					'check_in' => $check_in,
					'check_out' => $check_out, 
					'payed' => $payed 

			 	);

				$this->_reservations->insert($postdata);
				Url::redirect('admin/reservations');
			}
		}
		$data['guests'] = $this->_guests->get_guests();
		$data['apartments'] = $this->_apartments->get_apartments();

		$this->view->rendertemplate('header',$data);
		$this->view->render('admin/reservations/add',$data,$error);
		$this->view->rendertemplate('footer',$data);

	}	

 
	public function edit($reservation_id) {
		$data['title'] = 'Uredi apartman'; 


		if(isset($_POST['submit'])){

 			$id_guest = $_POST['id_guest'];
			$id_apartment = $_POST['id_apartment'];
			$check_in = $_POST['check_in'];
			$check_out = $_POST['check_out'];
 			$payed = $_POST['payed'];

			if(empty($id_guest)){
				$error[] = 'Unesite šifru gosta';
			}

			if(empty($id_apartment)){
				$error[] = 'Unesite apartmana';
			}

			if(empty($check_in)){
				$error[] = 'Unesite check in datum';
			}

			if(empty($check_out)){
				$error[] = 'Unesite check out datum';
			}

			if(empty($payed)){
				$error[] = 'Odaberite da li je plaćeno';
			}


			if(!isset($error)) {

				$postdata = array(
					'id_guest' => $id_guest,
					'id_apartment' => $id_apartment,
					'check_in' => $check_in,
					'check_out' => $check_out, 
					'payed' => $payed 
			 	);
				$where = array('reservation_id' => $reservation_id);
				$this->_reservations->update($postdata, $where);
				Url::redirect('admin/reservations');
			}
		}

		$data['row'] = $this->_reservations->get_reservation($reservation_id);
		$data['guests'] = $this->_guests->get_guests();
		$data['apartments'] = $this->_apartments->get_apartments();

		$this->view->rendertemplate('header',$data);
		$this->view->render('admin/reservations/edit',$data,$error);
		$this->view->rendertemplate('footer',$data);

	}	

	public function view($reservation_id) {
		$data['title'] = 'Pregledaj rezervaciju'; 
 
		$data['row'] = $this->_reservations->get_reservation($reservation_id);

		$this->view->rendertemplate('header',$data);
		$this->view->render('admin/reservations/view',$data,$error);
		$this->view->rendertemplate('footer',$data);

	}	

	public function perApartment($id_apartment) {

		$data['title'] = 'Rezervacije po apartmanu'; 
		$data['perapartment'] = $this->_reservations->get_perapartment($id_apartment); 
		$data['json_feed'] = $this->_reservations->get_json_per_apartment($id_apartment);


		$this->view->rendertemplate('header',$data);
		$this->view->render('admin/reservations/apartment',$data,$error);
		$this->view->rendertemplate('footer',$data);

	}

	public function feedPerApartment ($id_apartment) {
		$data['json_feed'] = $this->_reservations->get_json_per_apartment($id_apartment);

		$this->view->render('admin/reservations/feed',$data);
 
	}

 
	public function delete($reservation_id) {
		$this->_reservations->delete($reservation_id);
		Url::redirect('admin/reservations');
	}	
}