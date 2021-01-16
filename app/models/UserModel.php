<?php

class UserModel {
	
	private $table = 'user';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllUser()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getUserById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}

	public function tambahUser($data)
	{
		$query = "INSERT INTO user (nama,username,password) VALUES(:nama,:username,:password)";
		$this->db->query($query);
		$this->db->bind('nama',$data['nama']);
		$this->db->bind('username',$data['username']);
		$this->db->bind('password', md5($data['password']));
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function cekUsername(){
		$username = $_POST['username'];
		$this->db->query("SELECT * FROM user WHERE username = :username");
		$this->db->bind('username', $username);
		return $this->db->single();
	}

	public function updateDataUser($data)
	{
		if(empty($_POST['password'])) {
			$query = "UPDATE user SET nama=:nama WHERE id=:id";
			$this->db->query($query);
			$this->db->bind('id',$data['id']);
			$this->db->bind('nama',$data['nama']);
		} else {
			$query = "UPDATE user SET nama=:nama, password=:password WHERE id=:id";
			$this->db->query($query);
			$this->db->bind('id',$data['id']);
			$this->db->bind('nama',$data['nama']);
			$this->db->bind('password',md5($data['password']));
		}
		
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deleteUser($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function cariUser()
	{
		$key = $_POST['key'];
		$this->db->query("SELECT * FROM " . $this->table . " WHERE nama LIKE :key");
		$this->db->bind('key',"%$key%");
		return $this->db->resultSet();
	}
}