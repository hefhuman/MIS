<?php
class Facility {

private $db;

public function __construct(){
	$this->db = new Database();
}


public function add($data){
	$this->db->query('INSERT INTO facilities(type, description, facil_name, switch) VALUES(:type, :description, :facil_name, :switch)');

	//Bind Values
	$this->db->bind(':type', ucwords($data['type']));
	$this->db->bind(':description', ucwords($data['description']));
	$this->db->bind(':facil_name', ucwords($data['facil_name']));
	$this->db->bind(':switch', 'Active');


	if($this->db->execute()){
		return true;
	} else {
		return false;
	}
}

public function getFacilById($id){
    $this->db->query('SELECT * FROM facilities WHERE id=:id');

    $this->db->bind(':id' , $id);

    $results = $this->db->single();

    return $results;
}

public function getFacils(){
	 $this->db->query('SELECT * FROM facilities');

    $results = $this->db->resultSet();

    return $results;
}

public function activateFacil($id){
     $this->db->query('UPDATE facilities SET switch=:switch WHERE id=:id');
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

public function disableFacil($id){
	 $this->db->query('UPDATE facilities SET switch=:switch WHERE id=:id');
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

public function updateFacil($data){
	$this->db->query('UPDATE facilities SET type=:type, description=:description, facil_name=:facil_name WHERE id=:id');
    //Bind values
    $this->db->bind(':type', ucwords($data['type']));
    $this->db->bind(':description', ucwords($data['description']));
    $this->db->bind(':facil_name', ucwords($data['facil_name']));
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
