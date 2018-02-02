<?php
class Facility {

private $db;

public function __construct(){
	$this->db = new Database();
}


public function add($data){
	$this->db->query('INSERT INTO facilities(type, discription, facil_name, switch) VALUES(:type, :discription, :facil_name, :switch)');

	//Bind Values
	$this->db->bind(':type', $data['type']);
	$this->db->bind(':discription', $data['discription']);
	$this->db->bind(':facil_name', $data['facil_name']);
	$this->db->bind(':switch', 'Active');


	if($this->db->execute()){
		return true;
	} else {
		return false;
	}
}
}
 ?>
