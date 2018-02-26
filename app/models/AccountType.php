<?php
class AccountType {

private $db;

public function __construct(){
	$this->db = new Database();
}


public function add($data){
	$this->db->query('INSERT INTO account_types(account_type, switch) VALUES(:account_type, :switch)');

	//Bind Values
	$this->db->bind(':account_type', $data['account_type']);
	$this->db->bind(':switch', 'Active');


	if($this->db->execute()){
		return true;
	} else {
		return false;
	}
}

public function getAccountTypeById($id){
  $this->db->query('SELECT * FROM account_types WHERE id = :id');

  $this->db->bind(':id' , $id);

  $results = $this->db->single();

  return $results;
}

public function getAccountType(){

	$this->db->query('SELECT * FROM account_types');

	$results = $this->db->resultSet();

	return $results;
}

public function hasActive(){
	$this->db->query('SELECT * FROM account_types WHERE switch= "Active"');

	$row = $this->db->single();

	return $row;

}

public function activateAt($id){
	$this->db->query('UPDATE account_types SET switch=:switch WHERE id=:id');
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

public function disableAt($id){
	 $this->db->query('UPDATE account_types SET switch=:switch WHERE id=:id');
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

public function updateAt($data){
	$this->db->query('UPDATE account_types SET account_type=:account_type WHERE id=:id');
    //Bind values
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
