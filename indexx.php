<?php
    include("configs/configDB.php");
    include("classes/dbmabadean.php");
    include("classes/dbhome.php");

    $dd = new home;
    
        if(isset($_POST["input"])){
            $nama = $_POST["judul"];
            $rincian = $_POST["rincian"];
            $tanggal = $_POST["tanggaluplad"];
            $berkas = $_POST["gambar"];

            
            $tbh = $dd->tambahevent($judul, $rincian, $tanggal, $berkas);
            
            if($tbh){
                $pesan = "Data Berhasil di tambahkan";
               
            }
            else{
                $pesan = "Data gagal ditambahkan";
                
            }
        }
    

    $tambah = $dd->getevent();
    
?>


<html>
    <head>
        <title>Home</title>
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
                    <form action="uploadfasilitas.php"  method="post"  enctype="multipart/form-data">
                        <h4>Tanggal Upload</h4>
                        <input name="tanggalupload" type="date">
                        <h4>Judul Berita</h4>
                        <input name="judul"  type="text">
                        <h4>Masukkan Postingan</h4>
                        <textarea name="rincian" type="text" rows ="20" cols="100" ></textarea>
                        <br>
                        <label  for="berkas">Insert Gambar</label>
                        <input type="file"  name="berkas"  accept="image/*">
                        <input type="submit" value="kirim" name="kirim">
                    </form>
                    
                    <?php
                        if($tambah === FALSE){
                            echo "<p>data belum tambah</p>";
                        }
                        else{
                            echo "<p>data telah di  tambah </p>";
                        }
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
        </table></table>
    </body>

</html>
