<?php
class Personnel {

private $db;

public function __construct(){
	$this->db = new Database();
}


public function add($data){
	$this->db->query('INSERT INTO personnels(PersonnelID, first_name, middle_name, last_name, account_type, switch, hasAccount) VALUES(:id, :first_name, :middle_name, :last_name, :account_type, :switch, :hasAccount)');

	//Bind Values
	$this->db->bind(':id', ucwords($data['id']));
	$this->db->bind(':first_name', ucwords($data['first_name']));
	$this->db->bind(':middle_name', ucwords($data['middle_name']));
	$this->db->bind(':last_name', ucwords($data['last_name']));
	$this->db->bind(':account_type', ucwords($data['account_type']));
	$this->db->bind(':switch', 'Active');
	$this->db->bind(':hasAccount' , 'No');


	if($this->db->execute()){
		return true;
	} else {
		return false;
	}
}

public function getPersonnelById($id){
	$this->db->query('SELECT * FROM personnels WHERE PersonnelID = :id');

	$this->db->bind(':id' , $id);

	$result = $this->db->single();

	return $result;
}

public function getPersonnel(){

	$this->db->query('SELECT * FROM personnels');

	$results = $this->db->resultSet();

	return $results;
}

public function disablePersonnel($id){
	 $this->db->query('UPDATE personnels SET switch=:switch WHERE PersonnelID=:id');
    //Bind values
    $this->db->bind(':switch', 'Inactive');
    $this->db->bind(':id', $id);
    //Execute statement or query
    if($this->db->execute()){
      return true;
    } else {
      return false;
    }
}

public function activatePersonnel($id){
	 $this->db->query('UPDATE personnels SET switch=:switch WHERE PersonnelID=:id');
    //Bind values
    $this->db->bind(':switch', 'Active');
    $this->db->bind(':id', $id);
    //Execute statement or query
    if($this->db->execute()){
      return true;
    } else {
      return false;
    }
}

public function updatePersonnel($data){
	$this->db->query('UPDATE personnels SET first_name=:first_name, middle_name=:middle_name, last_name=:last_name, account_type=:account_type WHERE PersonnelID=:id');
    //Bind Values
	$this->db->bind(':first_name', ucwords($data['first_name']));
	$this->db->bind(':middle_name', ucwords($data['middle_name']));
	$this->db->bind(':last_name', ucwords($data['last_name']));
	$this->db->bind(':account_type', ucwords($data['account_type']));
	$this->db->bind(':id', ucwords($data['id']));
    //Execute statement or query
    if($this->db->execute()){
      return true;
    } else {
      return false;
    }
}

public function accountCreated($id){
		$this->db->query('UPDATE personnels SET hasAccount = :hasAccount WHERE PersonnelID=:PersonnelID');

		$this->db->bind(':PersonnelID' , $PersonnelID);
		$this->db->bind(':hasAccount' , 'Yes');

		if($this->db->execute()){
			return true;
		} else {
			return false;
		}
	}
}
 ?>
