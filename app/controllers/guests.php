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
		$data['title'] = 'Gosti';

		$data['guests'] = $this->_guests->get_guests();

		$this->view->rendertemplate('header',$data);
		$this->view->render('admin/guests/guests',$data);
		$this->view->rendertemplate('footer',$data);
	}

	public function addGuest() {

		$data['title'] = 'Dodaj gosta';

		if(isset($_POST['submit'])){
			$firstName = $_POST['firstName'];
			$lastName = $_POST['lastName'];

			if(empty($firstName)){
				$error[] = 'Please enter the first name';
			}

			if(empty($lastName)){
				$error[] = 'Please enter the last name';
			}

			if(!isset($error)) {

				$postdata = array(
					'firstName' => $firstName,
					'lastName' => $lastName
			 	);

				$this->_guests->insert($postdata);
				Url::redirect('admin/guests');
			}
		}

		$this->view->rendertemplate('header',$data);
		$this->view->render('admin/guests/addguest',$data,$error);
		$this->view->rendertemplate('footer',$data);

	}	

 
	public function editGuest($id) {
		$data['title'] = 'Uredi gosta'; 


		if(isset($_POST['submit'])){
			$firstName = $_POST['firstName'];
			$lastName = $_POST['lastName'];

			if(empty($firstName)){
				$error[] = 'Please enter the first name';
			}

			if(empty($lastName)){
				$error[] = 'Please enter the last name';
			}

			if(!isset($error)) {

				$postdata = array(
					'firstName' => $firstName,
					'lastName' => $lastName
			 	);
				$where = array('id' => $id);
				$this->_guests->update($postdata, $where);
				Url::redirect('admin/guests');
			}
		}

		$data['row'] = $this->_guests->get_guest($id);

		$this->view->rendertemplate('header',$data);
		$this->view->render('admin/guests/editguest',$data,$error);
		$this->view->rendertemplate('footer',$data);

	}	
	public function deleteGuest($id) {
		$this->_guests->delete($id);
		Url::redirect('admin/guests');
	}	
}