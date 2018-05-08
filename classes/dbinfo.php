<?php
	class event{
		private $id;
		private $db;
		
		public function __construct($id = null){
			$this->id = $id;
			
			$database = new Database;
			$this->db = $database->db;
		}
        
        public function tambahevent($nama, $rincian,  $tanggalupload, $gambar){
            return $this->db->query("INSERT INTO `event`(`judul`, `rincian`, `tanggalupload`, `gambar`) VALUES ('${nama}', '${rincian}', '${tanggalupload}', '${gambar}')");
        }
        
        public function getevent(){
            $daftar = $this->db->query("SELECT * FROM `event`");
            
            return $daftar;
        }
        
         public function getfotoevent(){
            $daftar = $this->db->query("SELECT gambar FROM `event`");
            
            return $daftar;
        }
        
        
        public function ubahevent($id, $judul, $rincian,  $gambar){
            return $this->db->query("UPDATE `event` SET `idevent`='${judul}',`judul`='${judul}',`rincian`='${rincian}',`gambar`='${gambar}' WHERE `idevent`   ='${id}'");
        }
        
        public function detailevent($id){
            $data = $this->db->query("SELECT * FROM `event` WHERE idevent = '$id'");
            
            return ($this->db->affected_rows > 0) ? $data : FALSE;
        }
        
        public function hapusevent($id){
            return $this->db->query("DELETE FROM `event` WHERE idevent = '$id'");
        }
        
    }
?>