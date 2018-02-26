<?php
class Personnel {

private $db;

public function __construct(){
	$this->db = new Database();
}


public function add($data){
	$this->db->query('INSERT INTO personnels(id, first_name, middle_name, last_name, account_type, switch) VALUES(:id, :first_name, :middle_name, :last_name, :account_type, :switch)');

	//Bind Values
	$this->db->bind(':id', $data['id']);
	$this->db->bind(':first_name', $data['first_name']);
	$this->db->bind(':middle_name', $data['middle_name']);
	$this->db->bind(':last_name', $data['last_name']);
	$this->db->bind(':account_type', $data['account_type']);
	$this->db->bind(':switch', 'Active');


	if($this->db->execute()){
		return true;
	} else {
		return false;
	}
}

public function getPersonnelById($id){
	$this->db->query('SELECT * FROM personnels WHERE id = :id');

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
	 $this->db->query('UPDATE personnels SET switch=:switch WHERE id=:id');
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
	 $this->db->query('UPDATE personnels SET switch=:switch WHERE id=:id');
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
	$this->db->query('UPDATE personnels SET first_name=:first_name, middle_name=:middle_name, last_name=:last_name, account_type=:account_type WHERE id=:id');
    //Bind Values
	$this->db->bind(':first_name', $data['first_name']);
	$this->db->bind(':middle_name', $data['middle_name']);
	$this->db->bind(':last_name', $data['last_name']);
	$this->db->bind(':account_type', $data['account_type']);
	$this->db->bind(':id', $data['id']);
    //Execute statement or query
    if($this->db->execute()){
      return true;
    } else {
      return false;
    }
}
}
 ?>
