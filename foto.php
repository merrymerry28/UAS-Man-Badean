<?php

    include("configs/configDB.php");
    include("classes/dbmabadean.php");
    include("classes/dbfasilitas.php");
    
    $db = new fasilitas;

    if(isset($_POST["input"])){
            $nama = $_POST["nama"];
            $rincian = $_POST["rincian"];
            $gambar = $_FILES["gambar"]["name"];

            
            $tbh = $db->tambahfasilitas($nama, $rincian,  $gambar);
            
            if($tbh){
                $pesan = "Data Berhasil di tambahkan";
               
            }
            else{
                $pesan = "Data gagal ditambahkan";
                
            }
        }

    if (EMPTY($_FILES["gambar"]))
        die ("tak ada berkas yang di upload");
    
    //$kode = $_FLES["kode"];
    $namafile = $_FILES["gambar"] ["name"];
    $filesementara = $_FILES["gambar"] ["tmp_name"];

    if(copy($filesementara, "images/$namafile"))
    {
        print ("Berkas $namafile sudah disalin");
        print("<br>\n");
        unlink ($filesementara);
        
        $hasil = $db->getfasilitas($namafile);
        
        print("<IMG SRC ='images/$namafile'>");
    }
    else
        print("Gagal menyalin nama file");
    
?>
