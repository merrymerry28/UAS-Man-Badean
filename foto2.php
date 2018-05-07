<?php
    include("configs/configDB.php");
    include("classes/dbmabadean.php");
    include("classes/dbfasilitas.php");

    $db = new fasilitas;

    //$kode = $_GET["kode"];

    //$nama = $_POST["nama"];
    //$rincian = $_POST["rincian"];
    //$gambar = $_POST["gambar"];

    $hasil = $db->getfasilitas();

?>

<html>
    <table border=1>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama </th>
                                    <th>Rincian</th>
                                    <th>Gambar</th>
                                </tr>
                                <?php
                                $no = 0;
                                while ($fasilitas = $hasil->fetch_array()){
                                    ?>
                                    <tr>
                                    <td><?php echo ++$no; ?></td>
                                    <td><?php echo $fasilitas["nama"]; ?></td>
                                    <td><?php echo $fasilitas["rincian"]; ?></td>
                                    <td><?php echo $fasilitas["gambar"]; ?></td>
                                </tr>
                                <?php
                                }
        ?></table>
</html>