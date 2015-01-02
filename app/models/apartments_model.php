<?php 

	class Apartments_Model extends Model {

	public function __construct(){
		parent::__construct();
	}	

	public function get_apartments () {
		return $this->_db->select("SELECT * FROM ".PREFIX."apartments ORDER BY apartment_id");
	}
 	public function count_apartments () {
 		return $this->_db->select("SELECT COUNT(*) AS apartment_count FROM ".PREFIX."apartments");
 	}
	public function get_apartment($apartment_id) {
		return $this->_db->select("SELECT * FROM ".PREFIX."apartments WHERE apartment_id =:apartment_id",array(':apartment_id' => $apartment_id));
	} 
	public function insert($data) {
		$this->_db->insert(PREFIX."apartments",$data);
	}

	public function update($data,$where) {
		$this->_db->update(PREFIX."apartments",$data,$where);
	}

	public function delete($apartment_id) {
		$this->_db->delete(PREFIX."apartments", array('apartment_id' => $apartment_id));
	}
}