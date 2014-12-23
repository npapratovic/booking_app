<?php 

	class Guests_Model extends Model {

	public function __construct(){
		parent::__construct();
	}	

	public function get_guests () {
		return $this->_db->select("SELECT * FROM ".PREFIX."guests ORDER BY id");
	}

	public function get_guest($id) {
		return $this->_db->select("SELECT * FROM ".PREFIX."guests WHERE id =:id",array(':id' => $id));
	} 
	public function insert($data) {
		$this->_db->insert(PREFIX."guests",$data);
	}

	public function update($data,$where) {
		$this->_db->update(PREFIX."guests",$data,$where);
	}

	public function delete($id) {
		$this->_db->delete(PREFIX."guests", array('id' => $id));
	}
}