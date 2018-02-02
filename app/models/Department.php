<?php
class Department {

private $db;

public function __construct(){
	$this->db = new Database();
}


public function add($data){
	$this->db->query('INSERT INTO departments(department, switch) VALUES(:department, :switch)');

	//Bind Values
	$this->db->bind(':department', $data['department']);
	$this->db->bind(':switch', 'Active');


	if($this->db->execute()){
		return true;
	} else {
		return false;
	}
}
}
 ?>
