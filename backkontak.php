<?php
    
    
    include("configs/configDB.php");
    include("classes/dbmabadean.php");
    include("classes/dbkontak.php");
    
    
    $dd = new pesan;
    

    $tampil = $dd->getpesan();
    
    
?>


<html>
    <head>
        <title>Input</title>
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
                    <h2>Pesan</h2>
                    
                            <table border=1>
                                <tr>
                                    <th>No.</th>
                                    <th>nama</th>
                                    <th>email</th>
                                    <th>pesan</th>
                                    <th>Opsi</th>
                                </tr>
                                <?php
                                $no = 0;
                                while ($pesan = $tampil->fetch_array()){
                                    ?>
                                    <tr>
                                    <td><?php echo ++$no; ?></td>
                                    <td><?php echo $pesan["nama"]; ?></td>
                                    <td><?php echo $pesan["email"]; ?></td>
                                    <td><?php echo $pesan["pesan"]; ?></td>
                                    <td><a href="editprestasi.php?id_prestasi=<?php echo $prestasi["id_prestasi"]; ?>">Ubah</a> | <a href="hapus.php?id_prestasi=<?php echo $prestasi["id_prestasi"]; ?>">Hapus</a></td>
                            </tr>
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
