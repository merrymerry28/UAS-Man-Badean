<?php
	class alumni{
		private $id;
		private $db;
		
		public function __construct($id = null){
			$this->id = $id;
			
			$database = new Database;
			$this->db = $database->db;
		}
        
        public function tambahalumni($Gambar, $Nama, $Tempat, $Tanggal_Lahir, $Alamat, $Email, $kontak, $Pesan_Kesan){
            return $this->db->query("INSERT INTO `alumni`(`Gambar`, `Nama`, `Tempat`, `Tanggal_Lahir`, `Alamat`, `Email`, `kontak`, `Pesan_Kesan`) VALUES ('${Gambar}', '${Nama}', '${Tempat}', '${Tanggal_Lahir}', '${Alamat}', '${Email}', '${kontak}', '${Pesan_Kesan}')");
        }
        
        public function getalumni(){
            $daftar = $this->db->query("SELECT * FROM `alumni`");
            
            return $daftar;
        }
        
         public function getfotoalumni(){
            $daftar = $this->db->query("SELECT Gambar FROM `alumni`");
            
            return $daftar;
		 }
		 public function ubahalumni($id, $Gambar, $Nama, $Tempat, $Tanggal_Lahir, $Alamat, $Email, $kontak, $Pesan_Kesan){
            return $this->db->query("UPDATE `alumni` SET `Gambar`='${Gambar}', `Nama`= '${Nama}', `Tempat`= '${Tempat}', `Tanggal_Lahir`= '${Tanggal_Lahir}',`Alamat`='${Alamat}', `Email`= '${Email}', `kontak`= '${kontak}', `Pesan_Kesan`= '${Pesan_Kesan}' WHERE `Id_alumni` = '${id}'");
        }
		public function detailalumni($id){
            $data = $this->db->query("SELECT * FROM `alumni` WHERE Id_alumni = '$id'");
            
            return ($this->db->affected_rows > 0) ? $data : FALSE;
        }
        public function hapusdataalumni($id){
            return $this->db->query("DELETE FROM `alumni` WHERE Id_alumni = '$id'");
        }
        
    }
?>