<?php
    
    
    include("configs/configDB.php");
    include("classes/dbmabadean.php");
    include("classes/dbekskul.php");

    $dd = new ekskul;
    $id = $_GET["idekskul"];
    
    if(isset($_POST["hapus"])){
        $dlt = $dd->hapusdataekskul($id);
        
        if($dlt){
            
             header ("Location: backeskul.php");
        }
        else{
             echo "Data belum terhapus";
        }
           
        
    }

    $data = $dd->detailekskul($id);
?>


<html>
    <head>
        <title>Hapus</title>
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
                    
                    
                            <table border=1>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Ekskl</th>
                                    <th>Deskripsi</th>
                                    <th>Nama Pembina</th>
                                    <th>Kejuaraan</th>
                                    <th>Opsi</th>
                                </tr>
                                <?php
                                
                                $no = 0;
                                while ($ekskul = $data->fetch_array()){
                                    ?>
                                    <tr>
                                    <td><?php echo ++$no; ?></td>
                                    <td><?php echo $ekskul["namaekskul"]; ?></td>
                                    <td><?php echo $ekskul["Deskripsi"]; ?></td>
                                    <td><?php echo $ekskul["pembinekskul"]; ?></td>
                                    <td><?php echo $ekskul["kejuaraan"]; ?></td>
                                    <td><form method="POST"><input type ="submit" name="hapus" value="Hapus"></form></td>
                                </tr>
                                <?php
                                }
                                ?>
                        <?php
                            
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
