<?php
     function login($nama, $pass)
    {
    
      if ($_POST["nama"] == $nama && $_POST["pass"] == $pass){
       
        //$_SESSION["nama"] = $nama; 
        
        header("Location: backhome.php"); 
    } 
    else {
        
        echo '<p>Username Atau Password Tidak Benar</p>';
    }
        
    }

?>