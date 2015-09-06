<?php

class Groups extends Controller {

 	private $_groups;

    public function __construct(){
		parent::__construct();

 		$this->_groups = $this->loadModel('groups_model');

		if(Session::get('loggin') == false){
			url::redirect('admin/login');
		}
	}
 
	public function user_groups() {
		$data['title'] = 'Grupe korisnika';
 		$data['user_data'] = Session::get('user_data');

		$data['user_groups'] = $this->_groups->get_user_groups();

		$this->view->rendertemplate('header',$data);
		$this->view->render('admin/users/user-groups',$data);
		$this->view->rendertemplate('footer',$data);
	}

	public function delete($id) {
		$this->_groups->delete($id);
		Url::redirect('admin/users/user-groups');
	}	

	public function add() {
 		$data['user_data'] = Session::get('user_data');

		$data['title'] = 'Dodaj grupu korisnika';

		if(isset($_POST['submit'])){
			$name = $_POST['name'];
 			$upravljanje_korisnicima = $_POST['upravljanje_korisnicima'];
 			$unos_gostiju = $_POST['unos_gostiju'];
			$unos_apartmana = $_POST['unos_apartmana'];
  			$pregled_apartmana = $_POST['pregled_apartmana'];
  			$unos_rezervacija = $_POST['unos_rezervacija'];
 			$pregled_rezervacija = $_POST['pregled_rezervacija']; 

			if(empty($name)){
				$error[] = 'Ime grupe korisnika je obavezno';
			}
 
 
			if(!isset($error)) {

				$postdata = array(
					'name' => $name,
 					'upravljanje_korisnicima' => $upravljanje_korisnicima,
					'unos_gostiju' => $unos_gostiju, 
 					'unos_apartmana' => $unos_apartmana,
					'pregled_apartmana' => $pregled_apartmana,
					'unos_rezervacija' => $unos_rezervacija, 
					'pregled_rezervacija' => $pregled_rezervacija 
			 	);
  
				$this->_groups->insert($postdata);
				Url::redirect('admin/users/user-groups');
			}
		}

		$this->view->rendertemplate('header',$data);
		$this->view->render('admin/users/add-user-group',$data,$error);
		$this->view->rendertemplate('footer',$data);

	}	

	public function view($id) {
		$data['title'] = 'Pregledaj grupu'; 
  		$data['user_data'] = Session::get('user_data');


		$data['row'] = $this->_groups->get_group($id);
		var_dump($data);
 		$this->view->rendertemplate('header',$data);
		$this->view->render('admin/users/view-user-group',$data,$error);
		$this->view->rendertemplate('footer',$data);

	}

	public function edit($id) {
		$data['title'] = 'Uredi grupu korisnika'; 
 		$data['user_data'] = Session::get('user_data');


		if(isset($_POST['submit'])){
			$name = $_POST['name'];
 			$upravljanje_korisnicima = $_POST['upravljanje_korisnicima'];
 			$unos_gostiju = $_POST['unos_gostiju'];
			$unos_apartmana = $_POST['unos_apartmana'];
  			$pregled_apartmana = $_POST['pregled_apartmana'];
  			$unos_rezervacija = $_POST['unos_rezervacija'];
 			$pregled_rezervacija = $_POST['pregled_rezervacija']; 

			if(empty($name)){
				$error[] = 'Ime grupe korisnika je obavezno';
			}
 
			if(!isset($error)) {

				$postdata = array(
					'name' => $name,
 					'upravljanje_korisnicima' => $upravljanje_korisnicima,
					'unos_gostiju' => $unos_gostiju, 
 					'unos_apartmana' => $unos_apartmana,
					'pregled_apartmana' => $pregled_apartmana,
					'unos_rezervacija' => $unos_rezervacija, 
					'pregled_rezervacija' => $pregled_rezervacija 
			 	);
 

				$where = array('id' => $id);
				$this->_groups->update($postdata, $where);
				Url::redirect('admin/users/user-groups');
			}
		}

		$data['row'] = $this->_groups->get_group($id);
  		$this->view->rendertemplate('header',$data);
		$this->view->render('admin/users/edit-user-group',$data,$error);
		$this->view->rendertemplate('footer',$data);

	}	
  
 
}