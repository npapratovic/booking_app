<?php 

	class Users_Model extends Model {

	public function __construct(){
		parent::__construct();
	}	

	public function get_users () {
		return $this->_db->select("SELECT * FROM ".PREFIX."users ORDER BY id_user");
	}
 	public function count_users () {
 		return $this->_db->select("SELECT COUNT(*) AS user_count FROM ".PREFIX."users");
 	}

	public function get_user($id_user) {
		return $this->_db->select("SELECT * FROM ".PREFIX."users WHERE id_user =:id_user",array(':id_user' => $id_user));
	} 

	public function insert($data) {
		$this->_db->insert(PREFIX."users",$data);
	}

	public function update($data,$where) {
		$this->_db->update(PREFIX."users",$data,$where);
	}

	public function delete($id_user) {
		$this->_db->delete(PREFIX."users", array('id_user' => $id_user));
	}
 	public function get_user_by_email($email){
	return $this->_db->select(
		"SELECT email 
			FROM ".PREFIX."users 
			WHERE email = :email",array(':email' => $email));
	}

 	public function get_user_by_username($username){
	return $this->_db->select(
		"SELECT username 
			FROM ".PREFIX."users 
			WHERE username = :username",array(':username' => $username));
	}
 

}