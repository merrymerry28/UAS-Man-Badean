<?php
	class home{
		private $id;
		private $db;
		
		public function __construct($id = null){
			$this->id = $id;
			
			$database = new Database;
			$this->db = $database->db;
		}
        
        public function tambahevent($judul, $rincian, $tanggal, $gambar){
            return $this->db->query("INSERT INTO `even`(`idfasilitas`, `nama`, `rincian`, `gambar`) VALUES ('${judul}', '${rincian}', '${tanggal}', '${gambar}')");
        }
        
        public function getevent(){
            $daftar = $this->db->query("SELECT * FROM `event`");
            
            return $daftar;
        }
        
        public function ubahosis($id, $namaosis, $nis,  $jabatan, $kelas){
            return $this->db->query("UPDATE `osis` SET `namaosis`='${namaosis}',`nis`='${nis}',`jabatan`='${jabatan}',`kelas`='${kelas}' WHERE `idosis`   ='${id}'");
        }
        
        public function detailosis($id){
            $data = $this->db->query("SELECT * FROM `osis` WHERE idosis = '$id'");
            
            return ($this->db->affected_rows > 0) ? $data : FALSE;
        }
        
        public function hapusdataosis($id){
            return $this->db->query("DELETE FROM `osis` WHERE idosis = '$id'");
        }
        
    }
?>