<?php

class Accomodationtype_Model extends Model {

	public function __construct(){
		parent::__construct();
	}	

	public function get_accomodationtype(){
		return $this->_db->select("SELECT * FROM ".PREFIX."accomodationtype ORDER BY accomodationtype_id");
	}
 
}