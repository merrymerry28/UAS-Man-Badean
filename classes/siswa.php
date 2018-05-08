<?php
class admin
{
	private $id;
	private $db;
	
	public function __construct($id = null)
	{
		$this->id = $id;

		//instansiasi objek koneksi DB
		$database = new database;
		$this->db = $database->db;
	}

	public function tambahsiswa( $NIP, $nama, $pass)
	{

		$tambah = $this->db->query('INSERT INTO siswa VALUES(nomer,"'.$NIP.'","'.$nama.'","'.$pass.'")');
	}
	public function editDataSiswa($NIP)
	{
		$edit = $this->db->query("SELECT*FROM petugas WHERE NIP='$NIP'");
		return $edit;
	}
	public function updateDataSiswa($NIP, $nama, $pass)
	{
		$update= $this->db->query("UPDATE petugas SET NIP = '${NIP}', nama='${nama}', pass='${pass}' WHERE NIP='$NIP'");
	}

	public function hapusData($NIP)
	{
		$hapus = $this->db->query("DELETE FROM siswa WHERE NIP='$NIP'");
	}

	public function DaftarSiswa()
 	{
 		$daftar = $this->db->query("SELECT * FROM siswa");

 	    return ($this->db->affected_rows > 0) ? $daftar : FALSE;
 	}
	
}
?>