<?php
class Users extends Controller {


	public function __construct(){
		$this->userModel = $this->model('User');
		$this->accountTypeModel = $this->model('accountType');
	}

	public function login(){
		//Check for post
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			//Sanitize post data
			$_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

			//Init data
			$data = [
				'username' => trim($_POST['username']),
				'password' => trim($_POST['password']),
				'username_err' => '',
				'password_err' =>''
			];

			//Validating username
			if(empty($data['username'])){
				$data['username_err'] = 'Please enter username';
			}

			//Validating password
			if(empty($data['password'])){
				$data['password_err'] = 'Please enter password';
			}elseif(strlen($data['password']) < 6){
				$data['password_err'] = 'Password must be atleast 6 characters';
			}

			//Make sure that errors are empty
			if(empty($data['username_err']) && empty($data['password_err'])){


				$loggedInUser = $this->userModel->login($data['username'], $data['password']);

				if($loggedInUser){

					//Create Session
					$this->createUserSession($loggedInUser);

					$this->view('pages/index');
					
				}else{
					//Load with errors
					$data['password_err'] = 'Password Incorrect';
					$data['username_err'] = 'Username Incorrect';
					$this->view('users/login', $data);
				}
			}else {
				//Load with errors
				$this->view('users/login', $data);
			}

		} else {
			$data = [
				'username' => '',
				'password' => '',
				'username_err' => '',
				'password_err' => ''
			];
			$this->view('users/login');
		}
	}


	public function createUserSession($user){
		$_SESSION['user_id'] = $user->id;
		$_SESSION['user_name'] = $user->username;
		// redirect('nix/index'); views folder then php
	}

	public function logout(){
		unset($_SESSION['user_id']);
		unset($_SESSION['user_name']);
		session_destroy();
		redirect('users/login');
	}


	public function add($id){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			//Sanitize post array
			$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

			$data = [
				'id' => trim($_POST['id']),
          'username' => trim($_POST['username']),
          'password' => trim($_POST['password']),
          'confirm_password' =>trim($_POST['confirm_password']),
          'account_type' => trim($_POST['account_type'])
        ];

        if($data['confirm_password'] == $data['password']){

        	//Add User
        	if($this->userModel->add($data)){
        		die('added');
        	}
        } else {

        	$at = $this->accountTypeModel->getAccountType();

			$data = [
				'id' => $id,
				'account_type' => $at,
			];

        	$this->view('users/add',$data);
        }

		} else{
			$at = $this->accountTypeModel->getAccountType();

			$data = [
				'id' => $id,
				'account_type' => $at,
			];

        	$this->view('users/add',$data);
		}
	}

	public function userList(){

		$users = $this->userModel->getUsers();

		$data = [
			'users' => $users
		];


		$this->view('users/userlist', $data);
	}

	public function disable($id){
		if($this->userModel->disableUser($id)){
			redirect('users/userlist');
		}else {
			die("Cannot Disable");
		}
	}

	public function enable($id){
		if($this->userModel->activateUser($id)){
			redirect('users/userlist');
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
				'username' => trim($_POST['username']),
				'password' => trim($_POST['password']),
				'account_type' => trim($_POST['account_type'])
			];

			if($this->userModel->updateUser($data)){
				redirect('users/userlist');
			}else {
				$this->view('users/updateuser');
			}

		}else {

			$at = $this->accountTypeModel->getAccountType();

			$getUsrById = $this->userModel->getUserById($id);

			$data = [
				'account_type' => $at,
				'id' => $id,
				'users' => $getUsrById
			];

			$this->view('users/updateuser', $data);
		}
		}
}

?>

<!-- echo '<script> alert("68"); </script>' ; -->