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
				'department' => trim($_POST['department'])
			];

			if($this->departmentModel->add($data)){
				die('added');
			}else {
				$this->view('departments/add');
			}

		}else {
			$this->view('departments/add');
		}
	}
}
?>