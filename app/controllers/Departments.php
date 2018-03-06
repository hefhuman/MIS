<?php
class Departments extends Controller {


	public function __construct(){
		$this->departmentModel = $this->model('Department');
	}

	public function add(){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			//Sanitize post array
			$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

			$data = [
				'department_code' => trim($_POST['department_code']),
				'department_name' => trim($_POST['department_name'])
			];

			if($this->departmentModel->add($data)){
				redirect('departments/deptList');
			}else {
				$this->view('departments/add');
			}

		}else {
			$this->view('departments/add');
		}
	}

	public function deptList(){

		$department = $this->departmentModel->getDepartment();

		$data = [
			'department' => $department
		];


		$this->view('departments/departmentlist', $data);
	}

	public function disable($id){
		if($this->departmentModel->disableDept($id)){
			redirect('departments/deptlist');
		}else {
			die("Cannot Disable");
		}
	}

	public function enable($id){
		if($this->departmentModel->activateDept($id)){
			redirect('departments/deptlist');
		}else {
			die("Cannot Activate");
		}
	}

	public function update($id){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){

			//Sanitize post array
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
				'department_code' => trim($_POST['department_code']),
				'department_name' => trim($_POST['department_name']),
				'id' => $id
			];


			if($this->departmentModel->updateDept($data)){
				redirect('departments/deptlist');
			}else {
				$this->view('departments/updatedept');
			}

		}else {

			$dptById = $this->departmentModel->getDepartmentById($id);

			$data = [
				'id' => $id,
				'dptById' => $dptById
			];

			$this->view('departments/updatedept', $data);
		}
	}
}
?>