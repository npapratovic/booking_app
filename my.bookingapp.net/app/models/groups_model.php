<?php 

	class Groups_Model extends Model {

	public function __construct(){
		parent::__construct();
	}	
 

	public function get_user_groups () {
		return $this->_db->select("SELECT * FROM ".PREFIX."user_groups ORDER BY id");
	}

	public function delete($id) {
		$this->_db->delete(PREFIX."user_groups", array('id' => $id));
	}

	public function insert($data) {
		$this->_db->insert(PREFIX."user_groups",$data);
	}

	public function get_group($id) {
	   return $this->_db->select("SELECT * FROM ".PREFIX."user_groups WHERE id =:id",array(':id' => $id));
	} 

	public function update($data,$where) {
		$this->_db->update(PREFIX."user_groups",$data,$where);
	}

}