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
		$this->db->query('INSERT INTO users(id, username, password, account_type, switch) VALUES(:id, :username, :password, :account_type, :switch)');

		//Bind values
		$this->db->bind(':id', $data['id']);
		$this->db->bind(':username', $data['username']);
		$this->db->bind(':password', $data['password']);
		$this->db->bind(':account_type', $data['account_type']);
		$this->db->bind(':switch', 'Active');
		if($this->db->execute()){
			return true;
		} else {
			return false;
		}
	}

	public function getUserById($id){
		$this->db->query('SELECT * FROM users WHERE id=:id');

	$this->db->bind(':id' , $id);

	$results = $this->db->single();

	return $results;

	}

	public function getUsers(){
	$this->db->query('SELECT * FROM users');

    $results = $this->db->resultSet();

    return $results;
	}

	public function disableUser($id){
	 $this->db->query('UPDATE users SET switch=:switch WHERE id=:id');
    //Bind values
    $this->db->bind(':switch', 'Inactive');
    $this->db->bind(':id', $id);
    //Execute statement or query
    if($this->db->execute()){
      return true;
    } else {
      return false;
    }
}

	public function activateUser($id){
	 $this->db->query('UPDATE users SET switch=:switch WHERE id=:id');
    //Bind values
    $this->db->bind(':switch', 'Active');
    $this->db->bind(':id', $id);
    //Execute statement or query
    if($this->db->execute()){
      return true;
    } else {
      return false;
    }
}

	public function updateUser($data){
	$this->db->query('UPDATE users SET username=:username, password=:password, account_type=:account_type WHERE id=:id');
    //Bind values
    $this->db->bind(':username', $data['username']);
    $this->db->bind(':password', $data['password']);
    $this->db->bind(':account_type', $data['account_type']);
    $this->db->bind(':id', $data['id']);
    //Execute statement or query
    if($this->db->execute()){
      return true;
    } else {
      return false;
    }
}
	}
 ?>
