<?php
class Sy {

private $db;

public function __construct(){
	$this->db = new Database();
}


public function add($data){
	$this->db->query('INSERT INTO sys(year_start, year_end, semester, switch) VALUES(:year_start, :year_end, :semester, :switch)');

	//Bind Values
	$this->db->bind(':year_start', $data['year_start']);
	$this->db->bind(':year_end', $data['year_end']);
    $this->db->bind(':semester', $data['semester']);
	$this->db->bind(':switch', $data['switch']);

	if($this->db->execute()){
		return true;
	} else {
		return false;
	}
}

public function getSysById($id){

	$this->db->query('SELECT * FROM sys WHERE id=:id');

    $this->db->bind(':id', $id);

	$results = $this->db->single();

	return $results;

}

public function getSys(){
	 $this->db->query('SELECT * FROM sys');

    $results = $this->db->resultSet();

    return $results;
}

public function hasActive(){
	$this->db->query('SELECT * FROM sys WHERE switch= "Active"');

	$row = $this->db->single();

	return $row;
}

public function chckDuplicate($year_start){
    $this->db->query('SELECT * FROM sys WHERE year_start=:year_start');

    $this->db->bind(':year_start' , $year_start);

    if($this->db->single()){
        return true;
    } else {
        return false;
    }
}

public function isActiveById($id){
	$this->db->query('SELECT * FROM sys WHERE switch = :switch AND id = :id');

	//Bind values
    $this->db->bind(':switch', 'Active');
    $this->db->bind(':id', $id);

	$row = $this->db->single();

	return $row;
}

public function activateSy($id){
	 $this->db->query('UPDATE sys SET switch=:switch WHERE id=:id');
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

public function disableSy($id){
	 $this->db->query('UPDATE sys SET switch=:switch WHERE id=:id');
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

public function updateSy($data){
	$this->db->query('UPDATE sys SET year_start=:year_start, year_end=:year_end, semester=:semester WHERE id=:id');
    //Bind values
    $this->db->bind(':year_start', $data['year_start']);
    $this->db->bind(':year_end', $data['year_end']);
    $this->db->bind(':semester', $data['semester']);
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
