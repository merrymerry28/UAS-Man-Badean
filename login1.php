<?php
    include("configs/configDB.php");
    include("classes/dbmabadean.php");
    include("classes/pengguna.php");
    

	if(isset($_POST["username"]) OR isset($_POST["password"])){
		$username = $_POST["username"];
		$password = $_POST["password"];

		$user = new pengguna($username,$password);

		if($user->login() === FALSE){
			$pesan_error = "username dan password salah";
		}
		else{

			session_start();

			$_SESSION["username"] = $username;
			$_SESSION["password"] = $password;

			switch (strtolower($user->login())) {
				case "admin": header("location: backhome.php");
					break;
				
				case "siswa":  header("location: tampilansiswa.php");
					break;
			}
		}
	}
?>
