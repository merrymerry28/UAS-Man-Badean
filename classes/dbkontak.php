<?php
	class pesan{
		private $id;
		private $db;
		
		public function __construct($id = null){
			$this->id = $id;
			
			$database = new Database;
			$this->db = $database->db;
		}
        
        public function tambahpesan($nama,  $email, $psn){
            return $this->db->query("INSERT INTO `pesan`( `nama`, `email`, `pesan`) VALUES ('${nama}', '${email}', '${psn}')");
        }
        
        public function getpesan(){
            $daftar = $this->db->query("SELECT * FROM `pesan`");
            
            return $daftar;
        }
        
        public function detailpesan($id){
            $data = $this->db->query("SELECT * FROM `pesan` WHERE id = '$id'");
            
            return ($this->db->affected_rows > 0) ? $data : FALSE;
        }
        
        public function ubahosis($id, $namaosis, $nis,  $jabatan, $kelas){
            return $this->db->query("UPDATE `osis` SET `namaosis`='${namaosis}',`nis`='${nis}',`jabatan`='${jabatan}',`kelas`='${kelas}' WHERE `idosis`   ='${id}'");
        }
        
        
        
        public function hapusdataosis($id){
            return $this->db->query("DELETE FROM `osis` WHERE idosis = '$id'");
        }
        
    }
?>