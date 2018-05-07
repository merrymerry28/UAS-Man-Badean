<?php
    include("configs/configDB.php");
    include("classes/dbmabadean.php");
    include("classes/dbalumni.php");
	
	

    $db = new alumni;

	 if(isset($_POST["input"])){
            $Gambar = $_FILES["Gambar"]["name"];
            $Nama = $_POST["Nama"];
			$Tempat = $_POST["Tempat"];
            $Tanggal_Lahir = $_POST["Tanggal_Lahir"];
			$Alamat = $_POST["Alamat"];
            $Email = $_POST["Email"];
			$kontak = $_POST["kontak"];
			$Pesan_Kesan = $_POST["Pesan_Kesan"];
         //   $Gambar = $_FILES["Gambar"]["Nama"];
            
            $tbh = $db->tambahalumni($Gambar, $Nama, $Tempat, $Tanggal_Lahir, $Alamat, $Email, $kontak, $Pesan_Kesan);
            
            if($tbh){
                $pesan = "Data Berhasil di tambahkan";
               
            }
            else{
                $pesan = "Data gagal ditambahkan";
                
            }
        }

    if (EMPTY($_FILES["Gambar"]))
        die ("tak ada berkas yang di upload");
    
    //$kode = $_FLES["kode"];
    $namafile = $_FILES["Gambar"] ["name"];
    $filesementara = $_FILES["Gambar"] ["tmp_name"];
	
	
	if(copy($filesementara, "images/$namafile"))
    {
        //print ("Berkas $namafile sudah disalin");
        //print("<br>\n");
        unlink ($filesementara);
        
        $hasil = $db->getfotoalumni($namafile);
        
        //print("<IMG SRC ='images/$namafile'>");
    }
    else
        print("Gagal menyalin nama file");
	
	 
	 $tambah = $db->getalumni();

   
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
		
        <center><table cellpadding="10" width ="1800" align="center">
            <br>
            <tr>
                <td bgcolor="#CCCCFF"></td>
                <td bgcolor="#EEF2F7">
                    <center><h2>Data Alumni MA Nurul Hidayah Badean</h2></center>
                  
        
        
							<center><table border="2">	
                                <?php
									$no;
                                while ($alumni = $tambah->fetch_array()){
                                    ?>
                                    <tr>
                                    <td><?php 
									$hs = $hasil->fetch_array();
									echo "<img src='images/".$hs['Gambar']."' width ='50px' height='50px'/>"; ?></td>
                                    <td><?php echo $alumni["Nama"]; ?></td>
                                    <td><?php echo $alumni["Tempat"]; ?></td>
									<td><?php echo $alumni["Tanggal_Lahir"]; ?></td>
                                    <td><?php echo $alumni["Alamat"]; ?></td>
                                    <td><?php echo $alumni["Email"]; ?></td>
									<td><?php echo $alumni["kontak"]; ?></td>
                                    <td><?php echo $alumni["Pesan_Kesan"]; ?></td>
                                </tr>
                                <?php
                                }
                                ?>
							</table></center>
                </td>
            </tr>
        </table</center></nav>
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
