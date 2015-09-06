<?php

class Register extends Controller{
	private $_users;

    public function __construct(){
		parent::__construct();

		$this->_users = $this->loadModel('users_model');
 
		if(Session::get('loggin') == true){
			url::redirect('admin');
		}
	}


	public function index($request = null){

 
		if(isset($_POST['submit'])){

 			$ime = $_POST['ime'];
 			$prezime = $_POST['prezime'];
			$mjesto = $_POST['mjesto'];
  			$username = $_POST['username'];
			$password = $_POST['password'];
			$password_repeat = $_POST['password_repeat'];
			$email = $_POST['email'];
 			$phone = $_POST['phone'];

			if(empty($ime)){
				$error[] = 'Ime korisnika je obavezno';
			}

			if(empty($prezime)){
				$error[] = 'Prezime korisnika je obavezno';
			}

			if(empty($mjesto)){
				$error[] = 'Mjesto je obavezno';
			}
 

			if(empty($phone)){
				$error[] = 'Kontakt broj je obavezan';
			}
 

			if(empty($username)){
				$error[] = 'Korisničko ime je obavezno';
			}
 

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

                 $error[] = 'Unesite ispravnu email adresu';

            } else {
                 
                $check_email = $this->_users->get_user_by_email($email);
                $check_username = $this->_users->get_user_by_username($username);

                if(strtolower($check_email[0]->email) == strtolower($email)){

                    $error[] = 'Email adresa postoji u sustavu';

                }

                if(strtolower($check_username[0]->username) == strtolower($username)){

                    $error[] = 'Korisničko ime postoji u sustavu';

                }
            }

            if(strlen($password) < 5){

                $error[] = 'Lozinka je prekratka, minimalna dužina je 6 znakova';

            } elseif($password != $password_repeat){

                $error[] = 'Lozinke nisu iste';

            }

 			$hash_password = Password::make($password_repeat);

			if(!isset($error)) {

				$postdata = array(
					'ime' => $ime,
 					'prezime' => $prezime,
					'mjesto' => $mjesto, 
 					'username' => $username,
					'password' => $hash_password,
					'email' => $email,
					'phone' => $phone
				);
  
				$this->_users->insert($postdata);

				$to = $email;
                $from  = 'info@bookingapp.net';
                $subject = 'Registracija na stranicu my.bookingapp.net';
                $body = " Hvala na registraciji. \n \n Vaša lozinka je: " . $password_repeat . " \n \n Prijavljujete se sa korisničkim imenom: " . $username . " na slijedećoj poveznici: \n \n \n " . DIR . "admin/login";

                Mailer::sendmail($to,$from,$subject,$body);

				Url::redirect('thankyou');
			}
		}

 
		$data['title'] = 'Registrirajte se';

		$this->view->rendertemplate('header-front',$data);
		$this->view->render('register/register',$data,$error);
		$this->view->rendertemplate('footer',$data);
	}


	public function subvencije($request = null){

 
		if(isset($_POST['submit'])){

 			$ime = $_POST['ime'];
 			$prezime = $_POST['prezime'];
			$mjesto = $_POST['mjesto'];
  			$username = $_POST['username'];
			$password = $_POST['password'];
			$password_repeat = $_POST['password_repeat'];
			$email = $_POST['email'];
 			$phone = $_POST['phone'];
 			$oib = $_POST['oib'];
 			$adresa = $_POST['adresa'];
 			$broj_kreveta = $_POST['broj_kreveta'];

			if(empty($ime)){
				$error[] = 'Ime korisnika je obavezno';
			}

			if(empty($prezime)){
				$error[] = 'Prezime korisnika je obavezno';
			}

			if(empty($mjesto)){
				$error[] = 'Mjesto je obavezno';
			}
 

			if(empty($phone)){
				$error[] = 'Kontakt broj je obavezan';
			}
 

			if(empty($oib)){
				$error[] = 'OIB je obavezan';
			}
 
			if(empty($adresa)){
				$error[] = 'Adresa je obavezna';
			}
 
			if(empty($broj_kreveta)){
				$error[] = 'Broj kreveta obavezan';
			}

			if(empty($username)){
				$error[] = 'Korisničko ime je obavezno';
			}
 

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

                 $error[] = 'Unesite ispravnu email adresu';

            } else {
                 
                $check = $this->_users->get_user_by_email($email);

                if(strtolower($check[0]->email) == strtolower($email)){

                    $error[] = 'Email adresa postoji u sustavu';

                }

            }

            if(strlen($password) < 5){

                $error[] = 'Lozinka je prekratka, minimalna dužina je 6 znakova';

            } elseif($password != $password_repeat){

                $error[] = 'Lozinke nisu iste';

            }

 			$hash_password = Password::make($password_repeat);

			if(!isset($error)) {

				$postdata = array(
					'subvencije' => 1,
					'ime' => $ime,
 					'prezime' => $prezime,
					'mjesto' => $mjesto, 
 					'username' => $username,
					'password' => $hash_password,
					'email' => $email,
					'phone' => $phone,
					'oib' => $oib,
					'adresa' => $adresa,
					'broj_kreveta' => $broj_kreveta  
				);
  
				$this->_users->insert($postdata);
				$to = $email;
                $from  = 'info@bookingapp.net';
                $subject = 'SUBVENCIJE - registracija na stranici bookingapp.net';
                $body = "Hvala na registraciji za subvencije. \n \n Ukoliko se želite prijaviti u sustav i testirati ga, Vaša lozinka je: " . $password_repeat . " \n \n Prijavljujete se sa korisničkim imenom: " . $username . " na slijedećoj poveznici: \n \n \n " . DIR . "admin/login";

                Mailer::sendmail($to,$from,$subject,$body);

				Url::redirect('thankyou');
			}
		}

 
		$data['title'] = 'SUBVENCIJE: Registrirajte se';

		$this->view->rendertemplate('header-front',$data);
		$this->view->render('register/subvencije',$data,$error);
		$this->view->rendertemplate('footer',$data);
	}


	public function thankyou($request = null){ 
   
		$data['title'] = 'Hvala na registraciji';

		$this->view->rendertemplate('header-front',$data);
		$this->view->render('register/thankyou',$data);
		$this->view->rendertemplate('footer',$data);
	}
}