<?php

class Users extends Controller {

	private $_users;
 	private $_groups;

    public function __construct(){
		parent::__construct();

		$this->_users = $this->loadModel('users_model');
 		$this->_groups = $this->loadModel('groups_model');

		if(Session::get('loggin') == false){
			url::redirect('admin/login');
		}
	}

	public function users() {
		$data['title'] = 'Korisnici';
 		$data['user_data'] = Session::get('user_data');

		$data['users'] = $this->_users->get_users();

		$this->view->rendertemplate('header',$data);
		$this->view->render('admin/users/users',$data);
		$this->view->rendertemplate('footer',$data);
	}

  

	public function add() {

		$data['title'] = 'Dodaj korisnika';
 		$data['user_data'] = Session::get('user_data');

		if(isset($_POST['submit'])){

 			$ime = $_POST['ime'];
 			$prezime = $_POST['prezime'];
			$mjesto = $_POST['mjesto'];
  			$username = $_POST['username'];
			$password = $_POST['password'];
			$password_repeat = $_POST['password_repeat'];
			$email = $_POST['email'];
 			$grupa_korisnika = $_POST['grupa_korisnika']; 
 			$id_user = $data['user_data'][0]->id_user;

			if(empty($ime)){
				$error[] = 'Ime korisnika je obavezno';
			}

			if(empty($prezime)){
				$error[] = 'Prezime korisnika je obavezno';
			}

			if(empty($mjesto)){
				$error[] = 'Mjesto je obavezno';
			}
 

			if(empty($username)){
				$error[] = 'Korisničko ime je obavezno';
			}

			if(empty($password)){
				$error[] = 'Lozinka je obavezna';
			}

			if($password !== $password_repeat){
				$error[] = 'Unešene lozinke nisu jednake';
			}
			$hash_password = Password::make($password_repeat);

			if(empty($email)){
				$error[] = 'Unesite email';
			}
 
			if(!isset($error)) {

				$postdata = array(
					'ime' => $ime,
 					'prezime' => $prezime,
					'mjesto' => $mjesto, 
 					'username' => $username,
					'password' => $hash_password,
					'email' => $email, 
					'user_group' => $grupa_korisnika,
					'id_user' => $id_user 
			 	);
  
				$this->_users->insert($postdata);
				Url::redirect('admin/users');
			}
		}
		$data['row'] = $this->_users->get_user($id_user);
		$data['user_groups'] = $this->_groups->get_user_groups();

		$this->view->rendertemplate('header',$data);
		$this->view->render('admin/users/add',$data,$error);
		$this->view->rendertemplate('footer',$data);

	}	

 
	public function edit($id_user) {
		$data['title'] = 'Uredi korisnika'; 

 		$data['user_data'] = Session::get('user_data');

		if(isset($_POST['submit'])){
 			$ime = $_POST['ime'];
 			$prezime = $_POST['prezime'];
			$mjesto = $_POST['mjesto'];
  			$username = $_POST['username'];
			$password = $_POST['password'];
			$password_repeat = $_POST['password_repeat'];
			$email = $_POST['email'];
 			$grupa_korisnika = $_POST['grupa_korisnika']; 
 			$id_user = $data['user_data'][0]->id_user;


			if(empty($ime)){
				$error[] = 'Ime korisnika je obavezno';
			}

			if(empty($prezime)){
				$error[] = 'Prezime korisnika je obavezno';
			}

			if(empty($mjesto)){
				$error[] = 'Mjesto je obavezno';
			}
 

			if(empty($username)){
				$error[] = 'Korisničko ime je obavezno';
			}

			if(empty($password)){
				$error[] = 'Lozinka je obavezna';
			}

			if($password !== $password_repeat){
				$error[] = 'Unešene lozinke nisu jednake';
			}

			$hash_password = Password::make($password_repeat);

			if(empty($email)){
				$error[] = 'Unesite email';
			}

			if(!isset($error)) {

				$postdata = array(
					'ime' => $ime,
 					'prezime' => $prezime,
					'mjesto' => $mjesto, 
 					'username' => $username,
					'password' => $hash_password,
					'email' => $email, 
					'user_group' => $grupa_korisnika,
					'id_user' => $id_user
			 	);
 

				$where = array('id_user' => $id_user);
				$this->_users->update($postdata, $where);
				Url::redirect('admin/users');
			}
		}

		$data['row'] = $this->_users->get_user($id_user);
		$data['user_groups'] = $this->_groups->get_user_groups();

		$this->view->rendertemplate('header',$data);
		$this->view->render('admin/users/edit',$data,$error);
		$this->view->rendertemplate('footer',$data);

	}	

	public function view($id_user) {
		$data['title'] = 'Pregledaj apartman'; 
  		$data['user_data'] = Session::get('user_data');

		$data['row'] = $this->_users->get_user($id_user);

		$this->view->rendertemplate('header',$data);
		$this->view->render('admin/users/view',$data,$error);
		$this->view->rendertemplate('footer',$data);

	}	

	public function delete($id_user) {
		$this->_users->delete($id_user);
		Url::redirect('admin/users');
	}	
}