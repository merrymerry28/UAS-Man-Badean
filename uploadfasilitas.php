<?php

    include("configs/configDB.php");
    include("classes/dbmabadean.php");
    include("classes/dbfasilitas.php");

    $dd = new fasilitas;
    
    if(isset($_POST['input'])){
        $file =  $_FILES["gambar"];
    
    $nama  =  $file["name"];
    $pos_sementara  =  $file["tmp_name"];
    $jenis  =  $file["type"];
    $ukuran   = $file["size"];

    $pos_akhir  =  "images/".$nama;
    
    if(copy($pos_sementara,  $pos_akhir))
        echo  "Berkas  telah  di  upload  ke  ${pos_akhir}";
    else
        echo  "Berkas  Gagal  di  Upload";
    }
    

    
        if(isset($_POST["input"])){
            $nama = $_POST["nama"];
            $rincian = $_POST["rincian"];
            $gambar = $_POST["gambar"];

            
            $tbh = $dd->tambahfasilitas($nama, $rincian, $gambar);
            
            if($tbh){
                $pesan = "Data Berhasil di tambahkan";
                $tambah = $dd->getfasilitas();

                while($tampil = $tambah->fetch_array()){
                    echo "<img src='images/".$tampil["berkas"]."' width='100px' height='100px'/>";
                    echo "</br>";

                    echo $tampil["rincian"];
                }
               
            }
            else{
                $pesan = "Data gagal ditambahkan";
                
            }
        }

        
    

    
    

?>