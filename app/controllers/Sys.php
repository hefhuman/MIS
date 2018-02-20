<?php
class Sys extends Controller {


	public function __construct(){
		$this->syModel = $this->model('Sy');
	}

	public function add(){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			//Sanitize post array
			$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

			$data = [
				'year_start' => trim($_POST['year_start']),
				'year_end' => trim($_POST['year_end']),
				'switch' => 'Inactive'
			];

			if($this->syModel->add($data)){
				die('added');
			}else {
				$this->view('sys/addSchoolYear');
			}

		}else {

			$sy = $this->syModel->getSchoolYear();
			$data = [
				'sy' => $sy
			];

			$this->view('sys/addSchoolYear', $data);
		}
	}
}
?>