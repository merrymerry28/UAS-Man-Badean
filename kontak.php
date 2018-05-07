<?php
    
    
    include("configs/configDB.php");
    include("classes/dbmabadean.php");
    include("classes/dbkontak.php");

    $dd = new pesan;
    
        if(isset($_POST["kirim"])){
            $nama = $_POST["nama"];
            $email = $_POST["email"];
            $psn= $_POST["pesan"];
            
            $tbh = $dd->tambahpesan($nama, $email,  $psn);
            
            if($tbh){
                $pesan = "Pesan telah dikirim";
               
            }
            else{
                $pesan = "Pesan gagal dikirim ! Coba lagi";
                
            }
        }
?>


<html>
<head><title>CONTACT</title></head>
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
<body leftmargin="100" rightmargin="100" background="a.png">
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
<hr width="200%">
<h3><marquee>Welcome To Contact</marquee></h3>
<hr width="70%">
<table width='100%' height='271'  border='1' align="center" cellpadding="5" cellspacing="5">
  <tr>
    <td width='204' rowspan='50' bgcolor='#F5F5F5' align="center"><img src='logo.jpg' width='200' height='250' style='float:center;'/></td>
    <td width='184' bgcolor='#F5F5F5'>MA badean</td>
   
  </tr>
  <tr>
    <td bgcolor='#FFF0F5'>088 643 6324</td>
   </tr>
  <tr>
    <td bgcolor='#F5F5F5' ><b>Phone. (021) 7590-9351, 7653-627</td>		
  <tr>
    <td bgcolor='#FFF0F5'><b>Fax. (021) 7591-3888</td>
  </tr>
</table>
<hr width="70%">
  <tr>

<br>
	<tr>
        <td width='200' colspan='18'><Center><h3><i><font color='Black'>Submit a Comment</font></i></h3></Center></td>
  </tr>
 
	<table width="433"border="0" align="center" cellpadding="4"cellspacing="2">
    <form method="post">
	<tr>
    <td width="118"><div align="right"><font color='Black'>Name</font></div></td>
	<td width="293"><input name="nama" type="text" id="Name" size="40"placeholder="Username Harus Sesuai"/></td>
	</tr>
        <td><div align="right"><font color='Black'>Email</font></div></td>
	<td><input name="email" type="text" id="Email" size="40"placeholder="Username Harus Sesuai"/></td>
	<tr>
	<tr>
	<td><div align="rign"><font color='Black'>Your Message</font></div></td>
	<td><textarea name="pesan" cols="30" rows="5" id="Komentar"></textarea></td>
	</tr>
	<td>&nbsp;</td>
	<td><input name="kirim" type="submit" id="kirim"></td>
	</tr></form>
	</table>
    
    <?php
                       if(isset($pesan))echo "<p><center>${pesan}</center></p>";
                    ?>
	<td>&nbsp;</td>
	<td>&nbsp;</td>


</html>