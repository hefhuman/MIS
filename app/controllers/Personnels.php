<?php 
class Personnels extends Controller {

	public function __construct(){
		$this->personnelModel = $this->model('Personnel');
		$this->accountTypeModel = $this->model('accountType');
	}

	public function add(){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			//Sanitize post array
			$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

			

			$data = [
				'id' => trim($_POST['id']),
				'first_name' => trim($_POST['first_name']),
				'middle_name' => trim($_POST['middle_name']) . '.',
				'last_name' => trim($_POST['last_name']),
				'account_type' => trim($_POST['account_type'])
			];

			if($this->personnelModel->add($data)){
				die('Added');
			} else {
				$this->view('personnels/add');
			}
		} else {
			$at = $this->accountTypeModel->getAccountType();
			$data = [
				'account_type' => $at
			];

			$this->view('personnels/add',$data);
		}
	}

	public function personnelList(){

		$personnel = $this->personnelModel->getPersonnel();

		$data = [
			'personnel' => $personnel
		];


		$this->view('personnels/personnellist', $data);
	}

	public function disable($id){
		if($this->personnelModel->disablePersonnel($id)){
			redirect('personnels/personnellist');
		}else {
			die("Cannot Disable");
		}
	}

	public function enable($id){
		if($this->personnelModel->activatePersonnel($id)){
			redirect('personnels/personnellist');
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
				'first_name' => trim($_POST['first_name']),
				'middle_name' => trim($_POST['middle_name']) . '.',
				'last_name' => trim($_POST['last_name']),
				'account_type' => trim($_POST['account_type'])
			];

			if($this->personnelModel->updatePersonnel($data)){
				redirect('personnels/personnellist');
			}else {
				$this->view('personnels/updatepersonnel');
			}

		}else {

			$at = $this->accountTypeModel->getAccountType();

			$personnelById = $this->personnelModel->getPersonnelById($id);

			$data = [
				'account_type' => $at,
				'id' => $id,
				'personnelById' => $personnelById
			];

			$this->view('personnels/updatepersonnel', $data);
		}
		}
}

?>