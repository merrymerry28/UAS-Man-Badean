<?php
	class pengumuman{
		private $id;
		private $db;
		
		public function __construct($id = null){
			$this->id = $id;
			
			$database = new Database;
			$this->db = $database->db;
		}
        
        public function tambahpengumuman($tanggalupload, $judul, $rincian, $gambar){
            return $this->db->query("INSERT INTO `pengumuman`(`tanggalupload`, `judul`, `rincian`, `gambar`) VALUES ('${tanggalupload}', '${judul}', '${rincian}',  '${gambar}')");
        }
        
        public function getpengumuman(){
            $daftar = $this->db->query("SELECT * FROM `pengumuman`");
            
            return $daftar;
        }
        
         public function getfotopengumuman(){
            $daftar = $this->db->query("SELECT gambar FROM `pengumuman`");
            
            return $daftar;
        }
        
        public function ubahpengumuman($id, $tanggalupload, $judul, $rincian, $gambar){
            return $this->db->query("UPDATE `pengumuman` SET `idpengumuman`='${judul}',  `tanggalupload`='${tanggalupload}', `judul`='${judul}', `rincian`='${rincian}', `gambar`='${gambar}' WHERE `idpengumuman`   ='${id}'");
        }
        
        public function detailpengumuman($id){
            $data = $this->db->query("SELECT * FROM `pengumuman` WHERE idpengumuman = '$id'");
            
            return ($this->db->affected_rows > 0) ? $data : FALSE;
        }
        
        public function hapuspengumuman($id){
            return $this->db->query("DELETE FROM `pengumuman` WHERE idpengumuman = '$id'");
        }
        
    }
?>