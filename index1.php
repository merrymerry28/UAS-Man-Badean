<?php
	include("login1.php");
?>
<html>
    <head>
        <title>Halaman Login</title>
    </head>
    
    <body>
        <table align="center" border="0" cellspacing="0" cellpadding="25" width="1280">
            <tr>
                <td bgcolor="#CCCCFF">
                     <center><h3><font face="arial">MADRASAH ALIYAH NURUL HUDA BADEAN BANYUWANGI</font></h3></center>
                </td>
                            <td height="500" width="250"  cellspacing="10" bgcolor="#D1DCEB">
                                <h4><center>Please, Login</center></h4>
                                
                                <?php
                                    if(isset($pesan_error)) echo $pesan_error;
                                ?>
                                
                                <form  method="POST">
                                    Id User<br><br>
                                    <input name="username" type="text" placeholder="Masukkan user Id"/><br><br>
                                    Password<br><br>
                                    <input name="password" type="password" placeholder="Masukkan password"/><br><br>   

                                    <input type="submit" value="login" name="login"/>&emsp;
                                    
                    </form>
                    <br><br><br><br>
                     <a href="index.php">Kembali Ke Halaman Utama</a>           
                </td>
                
                    
            </tr>
        
        </table>
    </body>

</html>