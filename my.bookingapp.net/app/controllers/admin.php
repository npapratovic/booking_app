<?php
 
class Admin extends Controller {
	private $_reservations;
	private $_guests;
	private $_apartments;
	private $_users;

	public function __construct(){
		parent::__construct();
		$this->_reservations = $this->loadModel('reservations_model');
		$this->_guests = $this->loadModel('guests_model');
		$this->_apartments = $this->loadModel('apartments_model'); 
		$this->_users = $this->loadModel('users_model'); 
		$this->_admins = $this->loadModel('admin_model');
	}	

	public function admin(){
		$data['user_data'] = Session::get('user_data');
     	$id_user = $data['user_data'][0]->id_user;

		if(Session::get('loggin') == false){
			url::redirect('admin/login');
		}

		$data['title'] = 'Admin';

		$data['reservations'] = $this->_reservations->get_reservations($id_user);
		$data['reservation_count'] = $this->_reservations->count_reservations($id_user);
		$data['guest_count'] = $this->_guests->count_guests($id_user); 
		$data['apartment_count'] = $this->_apartments->count_apartments($id_user);
		$data['user_count'] = $this->_users->count_users();
	 
 		$data['user_data'] = Session::get('user_data');
 
		$this->view->rendertemplate('header',$data);
		$this->view->render('admin/admin',$data);
		$this->view->rendertemplate('footer',$data);	
	}

	public function login(){

		if(Session::get('loggin') == true){
			url::redirect('admin');
		}

		if(isset($_POST['submit'])){

			$username = $_POST['username'];
			$password = $_POST['password'];

			$admin = $this->loadModel('admin_model');
			if(Password::verify($password, $admin->get_hash($username)) == false){
				die('wrong username or password');
			} else {
				Session::set('loggin',true);
				Session::set('user_data',$admin->get_user_info($username)); 
				Url::redirect('admin');
			}

		}

		$data['title'] = 'Login';

		$this->view->rendertemplate('header-login',$data);
		$this->view->render('admin/login',$data);
		$this->view->rendertemplate('footer',$data);	
	}

	public function logout(){

		Session::destroy();
		Url::redirect('admin');

	}
}
