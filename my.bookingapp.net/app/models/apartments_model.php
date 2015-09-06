<?php 

	class Apartments_Model extends Model {

	public function __construct(){
		parent::__construct();
	}	

	public function get_apartments ($id_user) {
		return $this->_db->select("SELECT * FROM ".PREFIX."apartments WHERE id_user =:id_user",array(':id_user' => $id_user));
	}

	public function get_latest_apartments ($limit_apartments) {
		return $this->_db->select("SELECT * FROM app_apartments ORDER BY apartment_id DESC LIMIT $limit_apartments");
	}

	public function get_latest_apartments_by_type($type) {
		return $this->_db->select(
			"SELECT ".PREFIX."accomodationtype.name AS typename, 
					".PREFIX."apartments.name AS name,  
					".PREFIX."apartments.apartment_id AS apartment_id, 
					".PREFIX."apartments.description AS description, 
					".PREFIX."apartments.img AS img, 
					".PREFIX."cities.name AS cityname,
					".PREFIX."cities.city_id AS city_id,
					".PREFIX."cities.slug AS cityslug,
					".PREFIX."accomodationtype.slug AS typeslug

			FROM ".PREFIX."apartments 
			INNER JOIN ".PREFIX."accomodationtype 
				ON ".PREFIX."apartments.tip_smjestaja = ".PREFIX."accomodationtype.accomodationtype_id 
			INNER JOIN ".PREFIX."cities 
				ON ".PREFIX."apartments.city_id = ".PREFIX."cities.city_id 
			WHERE ".PREFIX."accomodationtype.slug =:slug",array(':slug' => $type));
	}
  
 	public function get_latest_apartments_by_city($city) {
		return $this->_db->select(
			"SELECT ".PREFIX."apartments.name AS name, 
				".PREFIX."cities.name AS cityname, 
				".PREFIX."apartments.apartment_id AS apartment_id, 
				".PREFIX."apartments.description AS description, 
				".PREFIX."apartments.img AS img,
				".PREFIX."accomodationtype.name AS typename, 
				".PREFIX."cities.slug AS cityslug,
				".PREFIX."accomodationtype.slug AS typeslug 

			FROM ".PREFIX."apartments 
			INNER JOIN ".PREFIX."cities 
				ON ".PREFIX."apartments.city_id = ".PREFIX."cities.city_id 
			INNER JOIN ".PREFIX."accomodationtype 
				ON ".PREFIX."apartments.tip_smjestaja = ".PREFIX."accomodationtype.accomodationtype_id 
			WHERE ".PREFIX."cities.slug =:slug",array(':slug' => $city));
	}

	public function get_latest_apartments_by_city_and_type($city,$type) {

		return $this->_db->select(
				"SELECT ".PREFIX."cities.name AS cityname, 
						".PREFIX."cities.slug AS cityslug, 
						".PREFIX."accomodationtype.name AS typename, 
						".PREFIX."accomodationtype.slug AS typeslug, 
						".PREFIX."apartments.name AS name, 
						".PREFIX."apartments.apartment_id AS apartment_id, 
						".PREFIX."apartments.description AS description, 
						".PREFIX."apartments.img AS img 	 
				FROM ".PREFIX."apartments 
				INNER JOIN ".PREFIX."cities 
					ON ".PREFIX."apartments.city_id = ".PREFIX."cities.city_id
				INNER JOIN ".PREFIX."accomodationtype 
					ON ".PREFIX."apartments.tip_smjestaja = ".PREFIX."accomodationtype.accomodationtype_id
				WHERE ".PREFIX."accomodationtype.slug = '$type' AND ".PREFIX."cities.slug = '$city'"); 

	}

  	public function get_featured_apartments ($limit_apartments) {
		return $this->_db->select("SELECT * FROM app_apartments WHERE featured = 1 LIMIT $limit_apartments");
	}

  	public function get_top_offer_apartments ($limit_top_offer_apartments) {
		return $this->_db->select("SELECT * FROM app_apartments WHERE top_offer = 1 LIMIT $limit_top_offer_apartments");
	}

 	public function count_apartments ($id_user) {
 		return $this->_db->select("SELECT COUNT(*) AS apartment_count FROM ".PREFIX."apartments  WHERE id_user =:id_user",array(':id_user' => $id_user));
 	} 
	public function get_apartment($apartment_id) {
		return $this->_db->select(
			"SELECT * 
			FROM ".PREFIX."apartments 
			INNER JOIN ".PREFIX."users 
					ON ".PREFIX."apartments.id_user = ".PREFIX."users.id_user
			WHERE apartment_id =:apartment_id",array(':apartment_id' => $apartment_id));
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