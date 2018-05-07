<?php
      
    class Database{
        private $host = DB_HOSTNAME;
        private $user = DB_USERNAME;
        private $pass = DB_PASSWORD;
        private $name = DB_NAME;

        public $db;

        public function __construct(){
            $this->db = new mysqli($this->host, $this->user, $this->pass, $this->name);
            
        }

        public function GetDaftarprestasi(){
            $daftar = $this->db->query("SELECT * FROM `prestasi`");
            
            return $daftar;
        }
        
        public function tambahprestasi($tahun, $namaprestasi, $tanggal, $tingkat, $kelompokindividu, $namapeserta){
            return $this->db->query("INSERT INTO prestasi (`tahun`, `nama_prestasi`, `tanggal`, `tingkat`, `kelompokindividu`, `nama_peserta`) VALUES ('${tahun}', '${namaprestasi}', '${tanggal}', '${tingkat}', '${kelompokindividu}', '${namapeserta}')");
        }
    }
      
?>