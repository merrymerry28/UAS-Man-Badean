<?php
include("configs/configDB.php");
include("classes/database.php");
include("classes/pengguna.php");
include("classes/session.php");
include("classes/dbmanbadeanalumni.php");


$session = new session;
$session->cekHakAkses("siswa");

 $dd = new Database;
   
        if(isset($_POST["input"])){
            $Gambar = $_POST["Gambar"];
            $Nama = $_POST["Nama"];
            $Tempat = $_POST["Tempat"];
            $Tanggal_Lahir = $_POST["Tanggal_Lahir"];
            $Alamat = $_POST["Alamat"];
            $Email = $_POST["Email"];
			$kontak = $_POST["kontak"];
            $Pesan_Kesan = $_POST["Pesan_Kesan"];
            
            $tbh = $dd->tambahalumni($Gambar, $Nama, $Tempat, $Tanggal_Lahir, $Alamat, $Email, $kontak, $Pesan_Kesan);
            
            if($tbh){
                $pesan = "Data Berhasil di tambahkan";
                //echo "Data Berhasil di tambahkan";
            }
            else{
                $pesan = "Data gagal ditambahkan";
                //echo "Data gagal ditambahkan";
            }
        }
    $tambah = $dd->GetDaftaralumni();
    
?>
<html>
    <head>
        <title>Input Prestasi</title>
        <style>
				body{
						background:White;
						font-family: Helvetica, sans-serif; font-size: 18px; line-height: 24px;
					}

				nav {
						margin: 9px auto; 
						text-align: center;
					}

				nav ul ul 
					{
						display: none;
					}
				nav ul li:hover > ul 
					{
						display: block;
					}
				nav ul 
					{
						background:#06DCFB; 
						padding: 0 20px;
						border-radius: 10px;  
						list-style: none;
						position: relative;
						display: inline-table;
					}
				nav ul:after 
					{
						content: ""; clear: both; display: block;
					}
				nav ul li {
							float: left;
							}
								nav ul li:hover {
								background:#01FCEF;
							}
							nav ul li:hover a {
							color: #fff ;
							}
				nav ul li a {
							display: block; padding: 25px 70px;
							color: #fff; text-decoration: none;
							}
					nav ul ul {
						background:#01FCEF; border-radius: 0px; padding: 0;
						position: absolute; top: 100td_persen;
					}
						nav ul ul li {
							float: none; 
							border-top: 1px solid #01FCEF;
							border-bottom: 1px solid #01FCEF; position: relative;
						}
							nav ul ul li a {
								padding: 15px 40px;
								color: #fff;
							}	
								nav ul ul li a:hover {
									background:#06DCFB;
								}
					nav ul ul ul {
						position: absolute; left: 100td_persen; top:0;
					}
			</style>
    </head>
    
    <body bgcolor="#01FCEF">
        	<table align="center" border="0"  width="1360" cellspacing="2" cellpadding="10">

	<nav>	
		<ul>
	<div class="tab"> <img src='logo.jpg' width='75' height='75' align="left" style='float:center;'/>
		<li><a href="backhome.php">Beranda</a></li>
        <li><a href="#">Profle</a>
		    <ul>
						<li><a href="#">Visi Misi</a></li>
						<li><a href="#">Kontak</a></li>
                <li><a href="backfasilitas.php">Fasilitas</a></li></ul>
		</li>
		
		<li><a href="#">Kurikulum</a>
			<ul>
				<li><a href="backosis.php">Osis</a></li>
				<li><a href="backprestasi.php">Prestasi</a></li>
				<li><a href="backeskul.php">Ekstrakurikuler</a></li>
			</ul>
		</li>
		
		<li><a href="kelulusan.php">Alumni</a>
		</li>
		<li><a href="Info.php">Info</a>
		</li>
        <li><a href="#">Akun</a>
            <ul>
                <li><a href="logout.php">Keluar</a></li></ul>
        </li></div>
	</ul>
</nav>
		
        <table cellpadding="10" width ="1300" >
            <br>
            <tr>
                <td bgcolor="#CCCCFF"></td>
                <td bgcolor="#EEF2F7">
                    <h2>Data Ekskul MA Nurul Hidayah Badean</h2>
                    <form action="foto.php"  method="post"  enctype="multipart/form-data"  >
                    <table border="2" cellpadding="10"> 
                        <tr>
                            <td>Nama </td>
                            <td><input name="nama" type="text" ></td>
                        </tr>
                        <tr>
                            <td>Rincian</td>
                            <td><input name="rincian" type="text"></td>
                        </tr>
                        <tr>
                            <td><label for="gambar">Pilih Gambar</label></td>
                            <td><input type="file"  name="gambar"  accept="image/*"></td>
                        </tr>
                    </table>
                        <br>
                        <input type="submit"  value="INPUT" name="input"></form>
                    <?php
                       if(isset($pesan))echo "<p>${pesan}</p>";
                    ?>

                </td>
            </tr>
       </table>
        <br>
        <table width="1300" bgcolor="#CCCCFF">
        <tr align="center">
			<td colspan="3" height="45">
				<center>Copyright &copy; 2018 By STIKOM PGRI Banyuwangi| All Rights Reserved</center>
			</td>
		</tr>
        </table>
    </body>

</html>
