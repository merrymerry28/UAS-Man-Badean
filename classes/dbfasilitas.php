<?php
	class fasilitas{
		private $id;
		private $db;
		
		public function __construct($id = null){
			$this->id = $id;
			
			$database = new Database;
			$this->db = $database->db;
		}
        
        public function tambahfasilitas($nama, $rincian,  $gambar){
            return $this->db->query("INSERT INTO `fasilitas`(`nama`, `rincian`, `gambar`) VALUES ('${nama}', '${rincian}', '${gambar}')");
        }
        
        public function getfasilitas(){
            $daftar = $this->db->query("SELECT * FROM `fasilitas`");
            
            return $daftar;
        }
        
         public function getfotofasilitas(){
            $daftar = $this->db->query("SELECT gambar FROM `fasilitas`");
            
            return $daftar;
        }
        
        public function ubahfasilitas($id, $nama, $rincian,  $gambar){
            return $this->db->query("UPDATE `fasilitas` SET `idfasilitas`='${nama}',`nama`='${nama}',`rincian`='${rincian}',`gambar`='${gambar}' WHERE `idfasilitas`   ='${id}'");
        }
        
        public function detailfasilitas($id){
            $data = $this->db->query("SELECT * FROM `fasilitas` WHERE idfasilitas = '$id'");
            
            return ($this->db->affected_rows > 0) ? $data : FALSE;
        }
        
        public function hapusfasilitas($id){
            return $this->db->query("DELETE FROM `fasilitas` WHERE idfasilitas = '$id'");
        }
        
    }
?>