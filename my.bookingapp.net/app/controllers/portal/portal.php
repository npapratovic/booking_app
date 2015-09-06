<?php

class Portal extends Controller{
 
 
	private $_apartments;
 

    public function __construct(){
		parent::__construct();

 
		$this->_apartments = $this->loadModel('apartments_model'); 
 
 
	}

	public function index($request = null){

		$data['title'] = 'Booking portal';

		$this->view->rendertemplate('header-portal',$data);
		$this->view->render('portal/portal',$data);
		$this->view->rendertemplate('footer-portal',$data);
	}



	public function single(){ 
 
		$data['title'] = 'Single ponuda';  
 
		$this->view->rendertemplate('header-portal-single',$data);
		$this->view->render('portal/single',$data);
		$this->view->rendertemplate('footer-portal-single',$data);
	}


	 
 
}