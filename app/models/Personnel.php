<?php
class Personnel {

private $db;

public function __construct(){
	$this->db = new Database();
}


public function add($data){
	$this->db->query('INSERT INTO personnel(id, first_name, middle_name, last_name, account_type, switch) VALUES(:id, :first_name, :middle_name, :last_name, :account_type, :switch)');

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
}
 ?>
