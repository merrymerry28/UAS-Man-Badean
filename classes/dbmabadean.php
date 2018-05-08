<?php
      
    class Database{
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

        public function GetDaftarprestasi(){
            $daftar = $this->db->query("SELECT * FROM `prestasi`");
            
            return $daftar;
        }
        
        public function tambahprestasi($tahun, $namaprestasi, $tanggal, $tingkat, $kelompokindividu, $namapeserta){
            return $this->db->query("INSERT INTO prestasi (`tahun`, `nama_prestasi`, `tanggal`, `tingkat`, `kelompokindividu`, `nama_peserta`) VALUES ('${tahun}', '${namaprestasi}', '${tanggal}', '${tingkat}', '${kelompokindividu}', '${namapeserta}')");
        }
        
        public function ubahprestasi($id, $tahun, $namaprestasi, $tanggal, $tingkat, $kelompokindividu, $namapeserta){
            return $this->db->query("UPDATE `prestasi` 
            SET `tahun`= '${tahun}',`nama_prestasi`='${namaprestasi}',`tanggal`='${tanggal}',`tingkat`='${tingkat}',`kelompokindividu`='{$kelompokindividu}',`nama_peserta`='{$namapeserta}' WHERE `id_prestasi` = '${id}'");
        }
        
        public function detailprestasi($id){
			$data = $this->db->query("SELECT * FROM `prestasi` WHERE id_prestasi = ${id}");
									  
			return ($this->db->affected_rows > 0) ? $data : FALSE;
		}
        
        public function hapusdataprestasi($id) {
            return $this->db->query("DELETE FROM `prestasi` WHERE id_prestasi = '$id'");
        }
        
        
    }
      
?>