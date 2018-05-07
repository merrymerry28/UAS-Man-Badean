<?php

    include("configs/configDB.php");
    include("classes/dbmabadean.php");
    include("classes/dbekskul.php");

    //$db = new ekskul;
    //$ekskul = $db->getekskul();


?>
<html>
	<head>
		<title>Visi Misi</title>
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
	<?php
		echo "Today is " . date("l, d F Y ") . "<br>";
		echo "The time is " . date("H:i:s");
	?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
	<body bgcolor="#01FCEF">
	<table align="center" border="0"  width="1360" cellspacing="2" cellpadding="10">

	<nav>	
		<ul>
	<div class="tab"> <img src='logo.jpg' width='75' height='75' align="left" style='float:center;'/>
		<li><a href="index.php">Beranda</a></li>
        <li><a href="#">Profile</a>
		    <ul>
						<li><a href="visimisi.php">Visi Misi</a></li>
						<li><a href="kontak.php">Kontak</a></li>
                <li><a href="fasilitas.php">Fasilitas</a></li></ul>
		</li>
		
		<li><a href="#">Kurikulum</a>
			<ul>
				<li><a href="osis.php">Osis</a></li>
				<li><a href="prestasi.php">Prestasi</a></li>
				<li><a href="ekstrakuriuler.php">Ekstrakurikuler</a></li>
			</ul>
		</li>
		
		<li><a href="alumni.php">Alumni</a>
        </li>
        <li><a href="#">Akun</a>
            <ul>
                <li><a href="index1.php">Masuk</a></li></ul>
        </li></div>
	</ul>
</nav>
		
		<body bgcolor='black'>
			<table border="7" align="center" width="1200" cellspacing="15" cellpadding="25">
				<tr align="center" valign ="top" width='1000' height='350' background="sma-1024x720.png">
                    <td colspan ="15" height="300"><font face="broadway" size="7" ><b></b></font></td> 
                    <center><h5> <i>MADRASAH ALIYAH NURUL HUDA BADEAN BANYUWANGI</i></h5></center>
                <tr>
                    <td bgcolor="#F0F5FA" width="400" height="500" valign="top">
                        <b><h2><center>Visi Misi MA Nurul Huda Badean</center></h2></b>
                        <br><br>
                        
                         <b><h4>Visi</h4></b><br><br>
						 Terciptanya sekolah ramah anak, unggul dalam prestasi, berkarakter,berakar pada budaya bangsa, dan berwawasan lingkungan, berlandaskan IMTAQ dan IPTEK.
                         <b><h4>Misi</h4></b>
                            1.  Melaksanakan pembelajaran dan bimbingan secara efektif dan kompetitif<br>
							2.  Mendorong dan membantu siswa untuk mengenali potensi dirinya sehingga dapat dikembangkan secara optimal<br>
							3. Menumbuhkan semangat keunggulan secara intensif kepada seluruh warga sekolah<br>
							4.  Membudayakan kegiatan 7 S yaitu senyum, salam, sapa, sopan, santun, semangat dan sepenuh hati  pada seluruh warga sekolah<br>
							5. Menumbuhkan dan  melestarikan budaya lokal.<br>
							6.  Menumbuhkan penghayatan terhadap ajaran agama yang dianut sebagai landasan kearifan lokal dalam bergaul dan bertindak.<br>
							7. Mengembangkan mutu kelembagaan dan manajemen.
                        
                    </td> 

                    
                </tr>
	
                <tr align="center" valign="top">
                    <td height="150" colspan="3" bgcolor="#F0F5FA">
                        <p><b><strong><center>Follow Us :</b></strong></p></center>
                        <br>
                        <center><a href="https://www.facebook.com/https://www.facebook.com/profile.php?id=100013826490014"><img alt="facebook" border="0" 
                        src="fbicon.png" height="48" width="48" /></a>&nbsp;
                        <a href="https://www.twitter.com/chamcham_mrz"><img alt="twitter" border="0" 
                        src="Twitter-icon.png" height="48" width="48" title="Follow me" /></a>&nbsp;
                        <a href="https://www.instagram.com/sichamgz"><img alt="instagram" border="0" 
                        src="instagram-Logo-PNG-Transparent-Background-download.png" height="48" width="48" title="Follow me" /></a>&nbsp;<br><br>
                        &phone; 085737329896 <spasi><br>
                        E-mail : badean@gmail.com
                        </center>
                    </td>
                </tr>
		
                <tr align="center">
                    <td colspan="3" height="75" bgcolor="#F0F5FA">
                        <center>Copyright &copy; 2018 By STIKOM PGRI Banyuwangi| All Rights Reserved</center>
                    </td>
                </tr>
	       </table>
	   </body>
</html>