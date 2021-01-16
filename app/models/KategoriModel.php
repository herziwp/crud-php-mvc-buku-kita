<?php

class KategoriModel {
	
	private $table = 'kategori';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllKategori()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getKategoriById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}

	public function tambahKategori($data)
	{
		$query = "INSERT INTO kategori (nama_kategori) VALUES(:nama_kategori)";
		$this->db->query($query);
		$this->db->bind('nama_kategori',$data['nama_kategori']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function updateDataKategori($data)
	{
		$query = "UPDATE kategori SET nama_kategori=:nama_kategori WHERE id=:id";
		$this->db->query($query);
		$this->db->bind('id',$data['id']);
		$this->db->bind('nama_kategori',$data['nama_kategori']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deleteKategori($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function cariKategori()
	{
		$key = $_POST['key'];
		$this->db->query("SELECT * FROM " . $this->table . " WHERE nama_kategori LIKE :key");
		$this->db->bind('key',"%$key%");
		return $this->db->resultSet();
	}
}