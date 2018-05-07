<?php
    
    
    include("configs/configDB.php");
    include("classes/dbmabadean.php");
    include("classes/dbhomeinfo.php");

    $dd = new pengumuman;
    $id = $_GET["idpengumuman"];



        if(isset($_POST["ubah"])){
            
            $tanggal = $_POST["tanggalupload"];
            $judul = $_POST["judul"];
            $rincian = $_POST["rincian"];
            $gambar = $_FILES["gambar"]["name"];
            
            $edit = $dd->ubahpengumuman($id, $tanggal, $judul, $rincian, $gambar);     if($edit){
                header ("Location: backhome.php");
            }
            else 
                echo "Data tidak ada yang berubah";
        }
     
?>


<html>
    <head>
        <title>Edit</title>
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
		<li><a href="revisi.php">Beranda</a></li>
		<li><a href="#">Profil</a>
		</li>
		<li><a href="#">Kurikulum</a>
			<ul>
				<li><a href="#">Osis</a></li>
				<li><a href="#">Prestasi</a></li>
				<li><a href="#">Ekstrakurikuler</a></li>
			</ul>
		</li>
		<li><a href="Contact.php">Contact</a>
		    <ul>
						<li><a href="Info.php">Profile</a></li>
						<li><a href="#">Kontak</a></li>
			</ul>
		</li>
		<li><a href="kelulusan.php">Alumni</a>
		</li>
		<li><a href="Info.php">Info</a>
		</li>
	</ul>
</nav>
		
        <table cellpadding="10" width ="1300" >
            <br>
            <tr>
                <td bgcolor="#CCCCFF"></td>
                <td bgcolor="#EEF2F7">
                    <h2>Data Prestasi MA Nurul Hidayah Badean</h2>
                    <form method="POST"  >
                    <table border="2" cellpadding="10"> 
                        <tr>
                            <td>Tanggal Upload</td>
                            <td><input name="tanggalupload" type="date"></td>
                        </tr>
                         <tr>
                            <td>Nama </td>
                            <td><input name="judul" type="text" ></td>
                        </tr>
                        <tr>
                            <td>Rincian</td>
                            <td><textarea name="rincian" type="text" rows ="20" cols="100" ></textarea></td>
                        </tr>
                        
                        <tr>
                            <td><label for="gambar">Pilih Gambar</label></td>
                            <td><input type="file"  name="gambar"  accept="image/*"></td>
                        </tr></table>
                    <br>
                        <input type="submit"  value="Ubah" name="ubah"></form>
                    
                    
                    
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
