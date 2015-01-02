<?php 

	class Guests_Model extends Model {

	public function __construct(){
		parent::__construct();
	}	

	public function get_guests () {
		return $this->_db->select("SELECT * FROM ".PREFIX."guests ORDER BY guest_id");
	}
 	public function count_guests () {
 		return $this->_db->select("SELECT COUNT(*) AS guest_count FROM ".PREFIX."guests");
 	}
	public function get_guest($guest_id) {
		return $this->_db->select("SELECT * FROM ".PREFIX."guests WHERE guest_id =:guest_id",array(':guest_id' => $guest_id));
	} 
	public function insert($data) {
		$this->_db->insert(PREFIX."guests",$data);
	}

	public function update($data,$where) {
		$this->_db->update(PREFIX."guests",$data,$where);
	}

	public function delete($guest_id) {
		$this->_db->delete(PREFIX."guests", array('guest_id' => $guest_id));
	}
}