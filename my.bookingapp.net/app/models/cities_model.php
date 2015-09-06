<?php

class Cities_Model extends Model {

	public function __construct(){
		parent::__construct();
	}	

	public function get_cities(){
		return $this->_db->select("SELECT * FROM ".PREFIX."cities ORDER BY city_id");
	}
 
}