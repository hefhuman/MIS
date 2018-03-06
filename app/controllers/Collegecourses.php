<?php
class CollegeCourses extends Controller {

	public function __construct(){
		$this->collegeCourseModel = $this->model('CollegeCourse');
		$this->departmentModel = $this->model('Department');
	}

	public function add($id){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			//Sanitize post array
			$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

			$data = [
				'course_id' => trim($_POST['course_id']),
				'course_desc' => trim($_POST['course_desc']),
				'department_code' => trim($_POST['department_code']),
				'id' => $id
			];

			if($this->collegeCourseModel->add($data)){
				redirect('collegecourses/collegeCourseList');
			}else {
				$this->view('collegecourses/add');
			}

		}else {

			$department = $this->departmentModel->getDepartmentById($id);

			$data = [
				'department' => $department,
				'id' => $id
			];

			$this->view('collegecourses/add', $data);
		}
	}

	public function collegeCourseList(){
		$collegeCourses = $this->collegeCourseModel->getCollegeCourses();

		$data = [
			'collegeCourses' => $collegeCourses
		];


		$this->view('collegecourses/collegecourseslist', $data);
	}

	public function disable($CourseID){
		if($this->collegeCourseModel->disableCollegeCourse($CourseID)){
			redirect('collegecourses/collegeCourseList');
		}else {
			die("Cannot Disable");
		}
	}

	public function enable($CourseID){
		if($this->collegeCourseModel->activateCollegeCourse($CourseID)){
			redirect('collegecourses/collegeCourseList');
		}else {
			die("Cannot Activate");
		}
	}

	public function update($id){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){

			//Sanitize post array
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
      			'id' => $id,
				'course_id' => trim($_POST['course_id']),
				'course_desc' => trim($_POST['course_desc']),
				'department_code' => trim($_POST['department_code'])
			];


			if($this->collegeCourseModel->updateCollegeCourse($data)){
				redirect('collegecourses/collegecourselist');
			}else {
				$this->view('collegecourses/updatecollegecourses');
			}

		}else {

			$collegeCoursesById = $this->collegeCourseModel->getCollegeCoursesById($id);

			$data = [
				'id' => $id,
				'collegeCoursesById' => $collegeCoursesById
			];

			$this->view('collegecourses/updatecollegecourses', $data);
		}
	}
}
?>