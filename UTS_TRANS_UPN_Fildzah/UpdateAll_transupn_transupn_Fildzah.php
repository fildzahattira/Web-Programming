<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style_transupn_Fildzah.css">
    <title>UpdateAll_transupn_Fildzah</title>
</head>
<body>
    <?php
        include ('Conn_transupn_Fildzah.php');
        $link_transupn = "Read_transupn_transupn_Fildzah.php";
        $id_kondektur = $_POST["id_kondektur"];
        $id_bus = $_POST["id_bus"];
        $id_driver = $_POST["id_driver"];
        $jumlah_km = $_POST["jumlah_km"];
        $tanggal = $_POST["tanggal"];
        $id_trans_upn = $_POST["id_trans_upn"];

        $update = "UPDATE trans_upn SET id_kondektur = '$id_kondektur', id_bus = '$id_bus', id_driver = '$id_driver', jumlah_km = '$jumlah_km', tanggal = '$tanggal' WHERE id_trans_upn = '$id_trans_upn'";
        // echo $update;
        $result = $mysqli->query($update);

        if ($result === TRUE){
            echo "<h2>Insert data SUCCESS</h2>";
            echo "<a href = \"$link_transupn\">Show trans-upn table</a>";
        }
    ?>
</body>
</html>