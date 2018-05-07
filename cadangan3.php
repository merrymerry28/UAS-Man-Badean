<?php
  //session_start();
   // $nama= "admin";
   // $pass = "123";
    

    //if (isset($_POST["login"])) {
    //if ($_POST["nama"] == $nama && $_POST["pass"] == $pass){
       
       // $_SESSION["nama"] = $nama; 
        
       // header("Location: backhome.php"); 
    //} else {
        
       // echo '<p>Username Atau Password Tidak Benar</p>';
   // }
    //}    
    //else { 
        
   // }
    include("configs/configDB.php");
    include("classes/dbmabadean.php");
    include("classes/dbekskul.php");
    include("classes/session.php");

    $session = new Session;
    
    $user->cekhakakses($peranuser);
    
?>

<html>
    <head>
    
        <title>Halaman Login</title>
    </head>
    
    <body>
        <table align="left" border="0"  cellspacing="0" cellpadding="25" width="1280">
            <tr>
                <td bgcolor="#CCCCFF">
                     <center><h3><font face="arial">MADRASAH ALIYAH NURUL HUDA BADEAN BANYUWANGI</font></h3></center>
                </td>
                            <td height="500" width="250"  cellspacing="10" bgcolor="#D1DCEB">
                                <h4><center>Please, Login</center></h4>
                                
                                <?php
                                    if(isset($user))
                                ?>
                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                    Id User<br><br>
                                    <input name="username" type="text" placeholder="Masukkan user Id"  id="nama"/><br><br>
                                    Password<br><br>
                                    <input name="pass" type="password" placeholder="Masukkan password" id="pass"/><br><br>   

                                    <input type="submit" value="login" name="login"/>&emsp;

                    </form>
                                
                </td>
            </tr>
        
        </table>
    </body>

</html>