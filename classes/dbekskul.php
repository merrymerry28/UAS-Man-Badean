<?php
	class ekskul{
		private $id;
		private $db;
		
		public function __construct($id = null){
			$this->id = $id;
			
			$database = new Database;
			$this->db = $database->db;
		}
        
        public function tambahekskul($namaekskul, $deskripsi,  $pembinaekskul, $kejuaraan){
            return $this->db->query("INSERT INTO `ekskul`(`namaekskul`, `Deskripsi`, `pembinekskul`, `kejuaraan`) VALUES ('${namaekskul}', '${deskripsi}', '${pembinaekskul}','${kejuaraan}')");
        }
        
        public function getekskul(){
            $daftar = $this->db->query("SELECT * FROM `ekskul`");
            
            return $daftar;
        }
        
        public function ubahekskul($id, $namaekskul, $deskripsi, $pembinaekskul, $kejuaraan){
            return $this->db->query("UPDATE `ekskul` SET `namaekskul`='${namaekskul}', `Deskripsi`= '${deskripsi}', `pembinekskul`= '${pembinaekskul}', `kejuaraan`= '${kejuaraan}' WHERE idekskul = '$id'");
        }
        
        public function detailekskul($id){
            $data = $this->db->query("SELECT * FROM `ekskul` WHERE idekskul = '$id'");
            
            return ($this->db->affected_rows > 0) ? $data : FALSE;
        }
        
        public function hapusdataekskul($id){
            return $this->db->query("DELETE FROM `ekskul` WHERE idekskul = '$id'");
        }
        
    }
?>