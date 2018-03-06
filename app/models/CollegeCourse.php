<?php
class CollegeCourse {

	private $db;

	public function __construct(){
		$this->db = new Database();
	}

	public function add($data){
		$this->db->query('INSERT INTO clg_courses(CourseID, CourseDesc, DepartmentCode, switch) VALUES(:CourseID, :CourseDesc, :DepartmentCode, :switch)');

	//Bind Values
	$this->db->bind(':CourseID', strtoupper($data['course_id']));
  $this->db->bind(':CourseDesc', ucwords($data['course_desc']));
  $this->db->bind(':DepartmentCode', ucwords($data['department_code']));
	$this->db->bind(':switch', 'Active');


	if($this->db->execute()){
		return true;
	} else {
		return false;
	}
	}

	public function getCollegeCourses(){
	$this->db->query('SELECT * FROM clg_courses');

	$results = $this->db->resultSet();

	return $results;
}

	public function getCollegeCoursesById($id){
		$this->db->query('SELECT * FROM clg_courses WHERE id=:id');

		$this->db->bind('id' , $id);

		$results = $this->db->single();

		return $results;
	}

	public function disableCollegeCourse($CourseID){
	 $this->db->query('UPDATE clg_courses SET switch=:switch WHERE CourseID=:CourseID');
    //Bind values
    $this->db->bind(':switch', 'Inactive');
    $this->db->bind(':CourseID', $CourseID);
    //Execute statement or query
    if($this->db->execute()){
      return true;
    } else {
      return false;
    }
}

	public function activateCollegeCourse($CourseID){
	$this->db->query('UPDATE clg_courses SET switch=:switch WHERE CourseID=:CourseID');
    //Bind values
    $this->db->bind(':switch', 'Active');
    $this->db->bind(':CourseID', $CourseID);
    //Execute statement or query
    if($this->db->execute()){
      return true;
    } else {
      return false;
    }
}

public function updateCollegeCourse($data){
	$this->db->query('UPDATE clg_courses SET CourseID=:CourseID, CourseDesc=:CourseDesc, DepartmentCode=:DepartmentCode WHERE id=:id');
    //Bind values
    $this->db->bind(':CourseID', strtoupper($data['course_id']));
    $this->db->bind(':CourseDesc', strtoupper($data['course_desc']));
    $this->db->bind(':DepartmentCode', strtoupper($data['department_code']));
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