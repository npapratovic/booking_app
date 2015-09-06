<?php

class Portal extends Controller{
 
 
	private $_apartments;
 	private $_cities;
 	private $_accomodationtypes;


    public function __construct() {

		parent::__construct();
  
		$this->_apartments = $this->loadModel('apartments_model');  
 		$this->_cities = $this->loadModel('cities_model');  
 		$this->_accomodationtypes = $this->loadModel('accomodationtype_model');  

	}

	public function index() {

		$data['title'] = 'Booking portal - Booking app';
 			
		$limit_apartments = 4;
		$limit_top_offer_apartments = 4;
 
		$data['latest_apartments'] = $this->_apartments->get_latest_apartments(4);
		$data['latest_apartments_for_map'] = $this->_apartments->get_latest_apartments(10);

  		$data['featured_apartments'] = $this->_apartments->get_featured_apartments(4);
	 	$data['top_offer'] = $this->_apartments->get_top_offer_apartments(4);

	 	$data['accomodationtypes'] = $this->_accomodationtypes->get_accomodationtype();
	 	$data['cities'] = $this->_cities->get_cities();

		$this->view->rendertemplate('header-portal',$data);
		$this->view->render('portal/portal',$data);
		$this->view->rendertemplate('footer-portal',$data);

	}

	public function search(){

		$data['title'] = 'Pretraga';

		$this->view->rendertemplate('header-portal',$data);
		$this->view->render('portal/search',$data);
		$this->view->rendertemplate('footer-portal',$data);
	}

	public function searchbycity($city){

		$data['apartments_by_city'] = $this->_apartments->get_latest_apartments_by_city($city);
	 	$data['cities_all'] = $this->_cities->get_cities();
		
		$cityname = $data['apartments_by_city']['0']->cityname; 
	    $typename = $data['apartments_by_city']['0']->typename;  

 		$data['title'] = 'Pretraga smještaja za grad ' .  $cityname;
 
		$this->view->rendertemplate('header-portal',$data);
		$this->view->render('portal/search',$data);
		$this->view->rendertemplate('footer-portal',$data);
		exit;
	}

	public function searchbytype($type){

		$data['apartments_by_type'] = $this->_apartments->get_latest_apartments_by_type($type);
	  	$data['cities_all'] = $this->_cities->get_cities();

 	 	$cityname = $data['apartments_by_type']['0']->cityname; 
	 	$typename = $data['apartments_by_type']['0']->typename; 

		$data['title'] = 'Pretraga smještaja: ' . $type;


		$this->view->rendertemplate('header-portal',$data);
		$this->view->render('portal/search',$data);
		$this->view->rendertemplate('footer-portal',$data);
		exit;
	}

	public function searchbycityandtype($cityandtype){ 
 
		$datacitytype = $cityandtype;
		list($type,$city) = explode(",", $datacitytype);
 
		$data['apartments_by_city_and_type'] = $this->_apartments->get_latest_apartments_by_city_and_type($city,$type);
 
 		$cityname = $data['apartments_by_city_and_type']['0']->cityname; 
	    $typename = $data['apartments_by_city_and_type']['0']->typename;  
	 	$data['cities_all'] = $this->_cities->get_cities();

  		$data['title'] = 'Pretraga: ' . $typename . ' u ' .  $cityname;


		$this->view->rendertemplate('header-portal',$data);
		$this->view->render('portal/search',$data);
		$this->view->rendertemplate('footer-portal',$data);
	}

	public function single() { 
 
		$data['title'] = 'Single ponuda';  
 
		$this->view->rendertemplate('header-portal-single',$data);
		$this->view->render('portal/single',$data);
		$this->view->rendertemplate('footer-portal-single',$data);

	}


	public function view($apartment_id) { 

 			
		$limit_apartments = 10;

		$data['row'] = $this->_apartments->get_apartment($apartment_id);

 
		$data['latest_apartments'] = $this->_apartments->get_latest_apartments($limit_apartments);
	 	$data['cities'] = $this->_cities->get_cities();
  		$data['featured_apartments'] = $this->_apartments->get_featured_apartments(4);

  		$apartmentname = $data['row']['0']->name; 

		$data['title'] = $apartmentname; 

 
		$this->view->rendertemplate('header-portal-single',$data);
		$this->view->render('portal/single',$data);
		$this->view->rendertemplate('footer-portal-single',$data);

	}
 
}