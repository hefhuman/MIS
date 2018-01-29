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
				'discription' => trim($_POST['discription']),
				'facil_name' => trim($_POST['facil_name'])
			];

			if($this->facilityModel->add($data)){
				die('added');
			}else {
				$this->view('facilities/addFacilities');
			}

		}else {
			$this->view('facilities/addFacilities');
		}
	}
}
?>