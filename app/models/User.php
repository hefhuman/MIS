<?php
class User {

	private $db;

	public function __construct(){
		$this->db = new Database();
	}

	public function login($username, $password){
		$this->db->query('SELECT * FROM users WHERE username = :username');
		$this->db->bind(':username', $username);

		$row = $this->db->single();

		$hashed_password = $row->password;

		if((password_verify($password, $hashed_password) || $password == $hashed_password) && $row->account_type == 'Administrator'){
			return $row;
		}elseif(password_verify($password, $hashed_password) || $password == $hashed_password && $row->account_type == 'Admin Registrar'){
			echo '<script> window.location.href="google.com"; </script>';
		}elseif(password_verify($password,$hashed_password) || $password == $hashed_password && $row->account_type == 'Admin Accounting'){
			echo '<script> window.location.href="google.com"; </script>';
		}elseif(password_verify($password, $hashed_password) || $password == $hashed_password && $row->account_type == 'Admin Scheduler'){
			echo '<script> window.location.href="google.com"; </script>';
		}
	}

	public function add($data){
		$this->db->query('INSERT INTO users(id, username, password, account_type) VALUES(:id, :username, :password, :account_type)');

		//Bind values
		$this->db->bind(':id', $data['id']);
		$this->db->bind(':username', $data['username']);
		$this->db->bind(':password', $data['password']);
		$this->db->bind(':account_type', $data['account_type']);

		if($this->db->execute()){
			return true;
		} else {
			return false;
		}
	}
	}
 ?>
