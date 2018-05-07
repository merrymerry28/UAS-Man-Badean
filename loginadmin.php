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
    //include("classes/dbekskul.php");
    include("classes/user.php");

    //$session = new Session;
    
    //$user->cekhakakses($peranuser);
    
    if(isset($_POST["username"]) OR isset($_POST["password"])){
		$username = $_POST["username"];
		$password = md5($_POST["password"]);
		
		$user = new user($username, $password);
		
		if($user->login() === FALSE){
			$pesan_error = "Username dan password tidak cocok";
		}
		else{
			// simpan session username & password
			
			session_start(); // memulai/mengulang session
			
			$_SESSION["username"] = $username;
			$_SESSION["password"] = $password;
			
			switch(strtolower($user->login())){
				case "Admin":	header("Location: backhome.php"); 		break;
				//case "pembeli":			header("Location: pembeli.php"); 	break;
				//case "penjual":			header("Location: penjual.php"); 	break;
			}
		}
	}
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
                                    if(isset($pesan_error)) echo $pesan_error;
                                ?>
                                
                                <form  method="POST">
                                    Id User<br><br>
                                    <input name="username" type="text" placeholder="Masukkan user Id"/><br><br>
                                    Password<br><br>
                                    <input name="password" type="password" placeholder="Masukkan password"/><br><br>   

                                    <input type="submit" value="login" name="login"/>&emsp;

                    </form>
                                
                </td>
            </tr>
        
        </table>
    </body>

</html>