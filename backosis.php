<?php
    
    
    include("configs/configDB.php");
    include("classes/dbmabadean.php");
    include("classes/dbosis.php");
    include("classes/pengguna.php");
    include("classes/session.php");

    $dd = new osis;
    
        if(isset($_POST["input"])){
            $namaosis = $_POST["namaosis"];
            $nis = $_POST["nis"];
            $jabatan= $_POST["jabatan"];
            $kelas = $_POST["kelas"];
            
            $tbh = $dd->tambahosis($namaosis, $nis,  $jabatan, $kelas);
            
            if($tbh){
                $pesan = "Data Berhasil di tambahkan";
               
            }
            else{
                $pesan = "Data gagal ditambahkan";
                
            }
        }
    

    $tambah = $dd->getosis();
    $session = new session;
    $session->cekHakAkses("admin");
    
?>


<html>
    <head>
        <title>Input OSIS</title>
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
                    <h2>Data Ekskul MA Nurul Hidayah Badean</h2>
                    <form method="POST"  >
                    <table border="2" cellpadding="10"> 
                        <tr>
                            <td>Nama Osis</td>
                            <td><input name="namaosis" type="text" ></td>
                        </tr>
                        <tr>
                            <td>NIS</td>
                            <td><input name="nis" type="text"></td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td><input name="jabatan" type="text"></td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td><input name="kelas" type="text"></td>
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
                                    <th>Nama Osis</th>
                                    <th>NS</th>
                                    <th>Jabatan</th>
                                    <th>Kelas</th>
                                    <th>Opsi</th>
                                </tr>
                                <?php
                                $no = 0;
                                while ($osis = $tambah->fetch_array()){
                                    ?>
                                    <tr>
                                    <td><?php echo ++$no; ?></td>
                                    <td><?php echo $osis["namaosis"]; ?></td>
                                    <td><?php echo $osis["nis"]; ?></td>
                                    <td><?php echo $osis["jabatan"]; ?></td>
                                    <td><?php echo $osis["kelas"]; ?></td>
                                    <td><a href="editosis.php?idosis=<?php echo $osis["idosis"]; ?>">Ubah</a> | <a href="hapusosis.php?idosis=<?php echo $osis["idosis"]; ?>">Hapus</a></td>
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
        <table width="1300" bgcolor="#CCCCFF">
        <tr align="center">
			<td colspan="3" height="45">
				<center>Copyright &copy; 2018 By STIKOM PGRI Banyuwangi| All Rights Reserved</center>
			</td>
            </tr></table>
        </table>
    </body>

</html>
