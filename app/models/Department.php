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

public function getDepartmentById($id){
  $this->db->query('SELECT * FROM departments WHERE id = :id');

  $this->db->bind(':id' , $id);

  $results = $this->db->single();

  return $results;
}

public function getDepartment(){
	$this->db->query('SELECT * FROM departments');

	$results = $this->db->resultSet();

	return $results;
}

public function disableDept($id){
	 $this->db->query('UPDATE departments SET switch=:switch WHERE id=:id');
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

public function activateDept($id){
	$this->db->query('UPDATE departments SET switch=:switch WHERE id=:id');
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

public function updateDept($data){
	$this->db->query('UPDATE departments SET department=:department WHERE id=:id');
    //Bind values
    $this->db->bind(':department', $data['department']);
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
