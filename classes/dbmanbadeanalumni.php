<?php
    class login{
        private $host = DB_HOSTNAME;
        private $user = DB_USERNAME;
        private $pass = DB_PASSWORD;
        private $name = DB_NAME;

        public $db;
        public $id;
        

        public function __construct($id = null){
            
            $this->id = $id ;
            
            $this->db = new mysqli($this->host, $this->user, $this->pass, $this->name);
            
            
            
        }

        public function GetDaftaralumni(){
            $daftar = $this->db->query("SELECT * FROM `alumni`");
            
            return $daftar;
        }
        
        public function tambahalumni($Gambar, $Nama, $Tempat, $Tanggal_Lahir, $Alamat, $Email, $kontak, $Pesan_Kesan){
            return $this->db->query("INSERT INTO alumni (`Gambar`, `Nama`, `Tempat`, `Tanggal_Lahir`, `Alamat`, `Email`, `kontak`, `Pesan_Kesan`) VALUES ('${Gambar}', '${Nama}', '${Tempat}', '${Tanggal_Lahir}', '${Alamat}', '${Email}', '${kontak}', '${Pesan_Kesan}')");
        }
        
        public function ubahalumni($Id, $Gambar, $Nama, $Tempat, $Tanggal_Lahir, $Alamat, $Email, $kontak, $Pesan_Kesan){
            return $this->db->query("UPDATE `alumni` 
            SET `Gambar`= '${Gambar}',`Nama`='${Nama}',`Tempat`='${Tempat}',`Tanggal_Lahir`='${Tanggal_Lahir}',`Alamat`='{$Alamat}',`Email`='{$Email}',`kontak`='{$kontak}',`Pesan_Kesan`='{$Pesan_Kesan}' WHERE `Id_alumni` = '${Id}'");
        }
        
        public function detailalumni($Id){
			$data = $this->db->query("SELECT * FROM `alumni` WHERE Id_alumni = ${Id}");
									  
			return ($this->db->affected_rows > 0) ? $data : FALSE;
		}
        
        public function hapusdataalumni($id) {
            return $this->db->query("DELETE FROM `alumni` WHERE Id_alumni = '$Id'");
        }
        
        
    }
      
?>