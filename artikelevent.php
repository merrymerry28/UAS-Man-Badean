<?php

    include("configs/configDB.php");
    include("classes/dbmabadean.php");
    include("classes/dbinfo.php");

    $dd = new event;
    $id = $_GET["idevent"];

    $tampil = $dd->detailevent($id);

    $gambar = $dd->getfotoevent();
    

        
        
    


?>
<html>
<body bgcolor="snow">
    <title>Artikel</title>
    
    <table align="center" cellpadding="50" width="1300" cellspacing="10">
	<br>
	<tr>
		<td bgcolor="#CCCCFF"></td>
		<td bgcolor="EEF2F7">
    
    <?php
        while($art = $tampil->fetch_array()){
            echo "<center><b><h2>".$art["judul"]."</h2></b></center>";
            echo "<br><br>";
            echo "<p style='text-align:justify;text-indent:50'/>".$art["rincian"];
            echo "<br><br>";
            echo "<center><IMG SRC ='images/".$art['gambar']."' width='400px' height='350px'/></center><br><br><br>";
        }
    ?>
    
</body>
</html>