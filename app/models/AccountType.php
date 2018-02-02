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
}
 ?>
