<?php
class Sy {

private $db;

public function __construct(){
	$this->db = new Database();
}


public function add($data){
	$this->db->query('INSERT INTO sys(year_start, year_end, switch) VALUES(:year_start, :year_end, :switch)');

	//Bind Values
	$this->db->bind(':year_start', $data['year_start']);
	$this->db->bind(':year_end', $data['year_end']);
	$this->db->bind(':switch', $data['switch']);

	if($this->db->execute()){
		return true;
	} else {
		return false;
	}
}
}
 ?>
