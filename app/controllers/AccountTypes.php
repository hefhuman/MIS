<?php
class AccountTypes extends Controller {


	public function __construct(){
		$this->accountTypeModel = $this->model('AccountType');
	}

	public function add(){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			//Sanitize post array
			$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

			$data = [
				'account_type' => trim($_POST['account_type'])
			];

			if($this->accountTypeModel->add($data)){
				redirect('accounttypes/atlist');
			}else {
				$this->view('accounttypes/addAccountType');
			}

		}else {
			$this->view('accounttypes/addAccountType');
		}
	}

	public function atList(){

		$accountType = $this->accountTypeModel->getAccountType();

		$data = [
			'accountType' => $accountType
		];


		$this->view('accounttypes/atlist', $data);
	}

	public function enable($id){
		if($this->accountTypeModel->activateAt($id)){
			redirect('accounttypes/atlist');
		}else {
			die("Cannot Activate");
		}
	}

	public function disable($id){
		if($this->accountTypeModel->disableAt($id)){
			redirect('accounttypes/atlist');
		}else {
			die("Cannot Disable");
		}
	}

	public function update($id){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){

			//Sanitize post array
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
				'account_type' => trim($_POST['account_type']),
				'id' => $id
			];

			if($this->accountTypeModel->updateAt($data)){
				redirect('accounttypes/atlist');
			}else {
				$this->view('accounttypes/updateat');
			}

		}else {

			$atById = $this->accountTypeModel->getAccountTypeById($id);

			$data = [
				'id' => $id,
				'account_type' => $atById
			];

			$this->view('accounttypes/updateat', $data);
		}

	}
}
?>