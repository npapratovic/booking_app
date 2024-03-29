<?php 

	class Reservations_Model extends Model {

	public function __construct(){
		parent::__construct();
	}	

	public function get_reservations ($id_user) {
		return $this->_db->select("SELECT reservation_id, check_in, check_out, booking_date, payed, name, firstName, lastName FROM ".PREFIX."reservations INNER JOIN ".PREFIX."apartments ON ".PREFIX."apartments.apartment_id = ".PREFIX."reservations.id_apartment INNER JOIN ".PREFIX."guests ON ".PREFIX."guests.guest_id = ".PREFIX."reservations.id_guest WHERE ".PREFIX."reservations.id_user =:id_user",array(":id_user" => $id_user));
	}
 
 	public function count_reservations ($id_user) {
 		return $this->_db->select("SELECT COUNT(*) AS reservation_count FROM ".PREFIX."reservations WHERE id_user =:id_user",array(':id_user' => $id_user));
 	}
 
	public function get_reservation($reservation_id) {
		return $this->_db->select("SELECT * FROM ".PREFIX."reservations WHERE reservation_id =:reservation_id",array(':reservation_id' => $reservation_id));
	} 

	public function get_perapartment($id_apartment) {
		return $this->_db->select("SELECT reservation_id, check_in, check_out, booking_date, payed, name, firstName, lastName FROM ".PREFIX."reservations INNER JOIN ".PREFIX."apartments ON ".PREFIX."apartments.apartment_id = ".PREFIX."reservations.id_apartment INNER JOIN ".PREFIX."guests ON ".PREFIX."guests.guest_id = ".PREFIX."reservations.id_guest WHERE id_apartment =:id_apartment",array(':id_apartment' => $id_apartment));
	} 

	public function get_json_per_apartment($id_apartment) {
		return $this->_db->select("SELECT id_apartment, id_guest, payed, firstName, lastName, check_in AS start, check_out AS end FROM ".PREFIX."reservations INNER JOIN ".PREFIX."guests ON ".PREFIX."guests.guest_id = ".PREFIX."reservations.id_guest  WHERE id_apartment =:id_apartment",array(':id_apartment' => $id_apartment));
	}

	public function get_diff_apartments ($id_user) {
		return $this->_db->select("SELECT DISTINCT id_apartment, name FROM ".PREFIX."reservations INNER JOIN ".PREFIX."apartments ON ".PREFIX."apartments.apartment_id = ".PREFIX."reservations.id_apartment WHERE ".PREFIX."reservations.id_user =:id_user",array(":id_user" => $id_user));
	}

	public function insert($data) {
		$this->_db->insert(PREFIX."reservations",$data); 
	}

	public function update($data,$where) {
		$this->_db->update(PREFIX."reservations",$data,$where);
	}

	public function delete($reservation_id) {
		$this->_db->delete(PREFIX."reservations", array('reservation_id' => $reservation_id));
	}
}