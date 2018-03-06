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
				'semester' => trim($_POST['semester']),
				'switch' => 'Inactive'
			];

			if(!$this->syModel->chckDuplicate($data['year_start'])){

			if($this->syModel->add($data)){
				redirect('Sys/syList');
			}else {
				$this->view('sys/addSchoolYear');
			}
		} else {
			die('School Year Already Exist');
		}

		}else {

			$sy = $this->syModel->getSys();

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
				'semester' => trim($_POST['semester']),
				'switch' => 'Inactive'
			];

			if($this->syModel->updateSy($data)){
				redirect('sys/sylist');
			}else {
				$this->view('sys/updatesy');
			}

		}else {

			$sy = $this->syModel->getSys();
			$sysById = $this->syModel->getSysById($id);
			$data = [
				'sy' => $sy,
				'syById' => $sysById,
				'id' => $id
			];

			$this->view('sys/updatesy', $data);
		}
		}
	}
?>