<?php

class Welcome extends Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index($request = null){

		$data['title'] = 'Online aplikacija za upravljanje vašim apartmanima';

		$this->view->rendertemplate('header-front',$data);
		$this->view->render('welcome/welcome',$data);
		$this->view->rendertemplate('footer-front',$data);
	}
	
}