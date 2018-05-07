<?php
    include("configs/configDB.php");
    include("classes/dbmabadean.php");
    include("classes/dbhomeinfo.php");
    //include("classes/database.php");
    include("classes/pengguna.php");
    include("classes/session.php");
    include("classes/dbmanbadeanalumni.php");

    $dd = new pengumuman;
    
    

    $tambah = $dd->getpengumuman();

    $session = new session;
    $session->cekHakAkses("admin");

?>


<html>
    <head>
        <title>Input Pengumuman</title>
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
        <li><a href="#">Profile</a>
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
		
		<li><a href="backalumni.php">Alumni</a>
		</li>
		<li><a href="backinfo.php">Berita Acara</a>
		</li>
        <li><a href="#">Akun</a>
            <ul>
                <li><a href="logout.php">Keluar</a></li></ul>
        </li></div>
	</ul>
</nav>
		
        <table align="center" cellpadding="10" width ="1300" >
            <br>
            <tr>
                <td bgcolor="#CCCCFF"></td>
                <td bgcolor="#EEF2F7">
                    <form action="uploadpengumuman.php"  method="POST"  enctype="multipart/form-data">
                        <h4>Tanggal Upload</h4>
                        <input name="tanggalupload" type="date">
                        <h4>Judul Berita</h4>
                        <input name="judul"  type="text">
                        <h4>Masukkan Postingan</h4>
                        <textarea name="rincian" type="text" rows ="20" cols="100" ></textarea>
                        <br>
                        <label  for="gambar">Insert Gambar</label>
                        <input type="file"  name="gambar"  accept="image/*">
                        <input type="submit" value="kirim" name="input">
                    </form>
                    
                    <?php
                        if($tambah === FALSE){
                            echo "<p>data belum tambah</p>";
                        }
                        else{
                            ?>
                        
                            <table border=1>
                                <tr>
                                    <th>No.</th>
                                    <th>Tanggal</th>
                                    <th>Judul </th>
                                    <th>Rincian</th>
                                    <th>Gambar</th>
                                </tr>
                                <?php
                                $no = 0;
                                while ($pg = $tambah->fetch_array()){
                                    ?>
                                    <tr>
                                    <td><?php echo ++$no; ?></td>
                                    <td><?php echo $pg["tanggalupload"]; ?></td>
                                    <td><?php echo $pg["judul"]; ?></td>
                                    <td><?php echo $pg["rincian"]; ?></td>
                                    <td><?php echo $pg["gambar"]; ?></td>
                                    <td><a href="editpengumuman.php?idpengumuman=<?php echo $pg["idpengumuman"]; ?>">Ubah</a> | <a href="hapuspengumuman.php?idpengumuman=<?php echo $pg["idpengumuman"]; ?>">Hapus</a></td>
                                </tr>
                                <?php
                                }
                                ?>
                        <?php
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
        </table>
    </body>

</html>
