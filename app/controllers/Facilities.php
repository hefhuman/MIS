<?php
class Facilities extends Controller {


	public function __construct(){
		$this->facilityModel = $this->model('Facility');
	}

	public function add(){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			//Sanitize post array
			$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

			$data = [
				'type' => trim($_POST['type']),
				'description' => trim($_POST['description']),
				'facil_name' => trim($_POST['facil_name'])
			];

			if($this->facilityModel->add($data)){
				redirect('facilities/facilList');
			}else {
				$this->view('facilities/addFacilities');
			}

		}else {
			$this->view('facilities/addFacilities');
		}
	}

	public function facilList(){


		$facilities = $this->facilityModel->getFacils();


		$data = [
			'facilities' => $facilities
		];


		$this->view('facilities/facillist', $data);
	}

	public function disable($id){
		if($this->facilityModel->disableFacil($id)){
			redirect('facilities/facillist');
		}else {
			die("Cannot Disable");
		}
	}

	public function enable($id){
		if($this->facilityModel->activateFacil($id)){
			redirect('facilities/facillist');
		}else {
			die("Cannot Activate");
		}
	}

	public function update($id){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){

			//Sanitize post array
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
				'type' => trim($_POST['type']),
				'description' => trim($_POST['description']),
				'facil_name' => trim($_POST['facil_name']),
				'id' => $id
			];

			if($this->facilityModel->updateFacil($data)){
				redirect('facilities/facillist');
			}else {
				$this->view('facilities/updatefacil');
			}

		}else {

		$facilities = $this->facilityModel->getFacilById($id);

			$data = [
				'id' => $id,
				'facilities' => $facilities
			];

			$this->view('facilities/updatefacil', $data);
		}
		}
	}
	?>