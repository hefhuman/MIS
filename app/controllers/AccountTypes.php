<?php
class AccountTypes extends Controller {


	public function __construct(){
		$this->AccountTypeModel = $this->model('AccountType');
	}

	public function add(){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			//Sanitize post array
			$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

			$data = [
				'account_type' => trim($_POST['account_type'])
			];

			if($this->AccountTypeModel->add($data)){
				die('added');
			}else {
				$this->view('accounttypes/addAccountType');
			}

		}else {
			$this->view('accounttypes/addAccountType');
		}
	}
}
?>