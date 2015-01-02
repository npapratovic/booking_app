<?php

class Reservations extends Controller {

	private $_reservations;

    public function __construct(){
		parent::__construct();

		$this->_reservations = $this->loadModel('reservations_model');

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

				$this->_reservations->insert($postdata);
				Url::redirect('admin/reservations');
			}
		}

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

		$this->view->rendertemplate('header',$data);
		$this->view->render('admin/reservations/apartment',$data,$error);
		$this->view->rendertemplate('footer',$data);

	}

	public function delete($reservation_id) {
		$this->_reservations->delete($reservation_id);
		Url::redirect('admin/reservations');
	}	
}