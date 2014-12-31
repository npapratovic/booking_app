<?php 

	class Apartments_Model extends Model {

	public function __construct(){
		parent::__construct();
	}	

	public function get_apartments () {
		return $this->_db->select("SELECT * FROM ".PREFIX."apartments ORDER BY id");
	}

	public function get_apartment($id) {
		return $this->_db->select("SELECT * FROM ".PREFIX."apartments WHERE id =:id",array(':id' => $id));
	} 
	public function insert($data) {
		$this->_db->insert(PREFIX."apartments",$data);
	}

	public function update($data,$where) {
		$this->_db->update(PREFIX."apartments",$data,$where);
	}

	public function delete($id) {
		$this->_db->delete(PREFIX."apartments", array('id' => $id));
	}
}