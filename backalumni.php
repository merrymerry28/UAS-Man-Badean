<?php
    include("configs/configDB.php");
    include("classes/dbmabadean.php");
    include("classes/dbhomeinfo.php");
    //include("classes/database.php");
    include("classes/pengguna.php");
    include("classes/session.php");
    include("classes/dbmanbadeanalumni.php");
    //include("classes/dbmabadean.php");
    include("classes/dbalumni.php");
    

    $db = new alumni;
	
	$tambah = $db->getalumni();
    $session = new session;
    $session->cekHakAkses("admin");

	
	
?>


<html>
    <head>
        <title>Input alumni</title>
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
		
        <table cellpadding="10" width ="1800" >
            <br>
            <tr>
                <td bgcolor="#CCCCFF"></td>
                <td bgcolor="#EEF2F7">
                    <h2>Data Alumni MA Nurul Hidayah Badean</h2>
                    <form action="tablealumni.php"  method="post"  enctype="multipart/form-data"  >
                    <table border="2" cellpadding="10"> 
						<tr>
                            <td><label for="Gambar">Pilih Gambar</label></td>
                            <td><input type="file"  name="Gambar"  accept="image/*"></td>
                        </tr>
                        <tr>
                            <td>Nama </td>
                            <td><input name="Nama" type="text" ></td>
                        </tr>
                        <tr>
                            <td>Tempat Tanggal Lahir</td>
                            <td><input name="Tempat" type="text">
							<input name="Tanggal_Lahir" type="date"></td>
                        </tr>
						<tr>
                            <td>Alamat </td>
                            <td><input name="Alamat" type="text" ></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input name="Email" type="text"></td>
                        </tr>
						<tr>
                            <td>kontak </td>
                            <td><input name="kontak" type="text" ></td>
                        </tr>
                        <tr>
                            <td>Pesan_Kesan</td>
                            <td><input name="Pesan_Kesan" type="text"></td>
                        </tr>
                    </table>
                        <br>
                        <input type="submit"  value="INPUT" name="input"></form>
                    <?php
                       if(isset($pesan))echo "<p>${pesan}</p>";
                    ?>
                    
                    <?php
                        if($tambah === FALSE){
                            echo "<p>data belum tambah</p>";
                        }
                        else{
                            ?>
                        
                            <table border=1>
                                <tr>
                                    <th>No.</th>
									<th>Gambar</th>
                                    <th>Nama </th>
                                    <th>Tempat </th>
									<th>Tanggal_Lahir</th>
									<th>Alamat</th>
									<th>Email</th>
                                    <th>kontak</th>
									<th>Pesan_Kesan</th>
									<th>OPSI</th>
									
                                </tr>
                                <?php
                                $no = 0;
                                while ($alumni = $tambah->fetch_array()){
                                    ?>
                                    <tr>
                                    <td><?php echo ++$no; ?></td>
                                    <td><?php echo $alumni["Gambar"]; ?></td>
                                    <td><?php echo $alumni["Nama"]; ?></td>
                                    <td><?php echo $alumni["Tempat"]; ?></td>
									<td><?php echo $alumni["Tanggal_Lahir"]; ?></td>
                                    <td><?php echo $alumni["Alamat"]; ?></td>
                                    <td><?php echo $alumni["Email"]; ?></td>
									<td><?php echo $alumni["kontak"]; ?></td>
                                    <td><?php echo $alumni["Pesan_Kesan"]; ?></td>
                                    <td><a href="editalumni.php?Id_alumni=<?php echo $alumni["Id_alumni"]; ?>">Ubah</a> | <a href="hapusalumni.php?Id_alumni=<?php echo $alumni["Id_alumni"]; ?>">Hapus</a></td>
                                </tr>
                                <?php
                                }
                                ?>
                        <?php
                        }     
                    ?>
                </td>
            </tr>
        </table></nav>
        <br>
        <table width="1800" bgcolor="#CCCCFF">
        <tr align="center">
			<td colspan="3" height="45">
				<center>Copyright &copy; 2018 By STIKOM PGRI Banyuwangi| All Rights Reserved</center>
			</td>
            </tr></table>
        </table>
    </body>

</html>
