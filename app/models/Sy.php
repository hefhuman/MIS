<?php
class Sy {

private $db;

public function __construct(){
	$this->db = new Database();
}


public function add($data){
	$this->db->query('INSERT INTO sy(year_start, year_end, status) VALUES(:year_start, :year_end, :status)');

	//Bind Values
	$this->db->bind(':year_start', $data['year_start']);
	$this->db->bind(':year_end', $data['year_end']);
	$this->db->bind(':status', $data['status']);

	if($this->db->execute()){
		return true;
	} else {
		return false;
	}
}
}
 ?>
