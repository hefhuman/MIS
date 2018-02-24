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

	public function syList(){

		$isActive = false;

		$sys = $this->syModel->getSys();

		if($this->syModel->hasActive()){
		$isActive = true;
		}

		$data = [
			'sys' => $sys,
			'hasActive' => $isActive
		];


		$this->view('sys/sylist', $data);
	}

	public function disable($id){
		if($this->syModel->disableSy($id)){
			redirect('sys/sylist');
		}else {
			die("Cannot Disable");
		}
	}

	public function enable($id){
		if($this->syModel->activateSy($id)){
			redirect('sys/sylist');
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
				'year_start' => trim($_POST['year_start']),
				'year_end' => trim($_POST['year_end']),
				'switch' => 'Inactive'
			];

			if($this->syModel->updateSy($data)){
				redirect('sys/sylist');
			}else {
				$this->view('sys/updatesy');
			}

		}else {

			$sy = $this->syModel->getSchoolYear();
			$data = [
				'sy' => $sy,
				'id' => $id
			];

			$this->view('sys/updatesy', $data);
		}
		}
	}
?>