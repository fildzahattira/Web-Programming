<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style_transupn_Fildzah.css">
    <title>UpdateJUmlahKM_Fildzah</title>
</head>
<body>
    <?php
        include ('Conn_transupn_Fildzah.php');
        $link_transupn = "Read_transupn_transupn_Fildzah.php";
        $jumlah_km = $_POST["jumlah_km"];
        $id_trans_upn = $_POST["id_trans_upn"];

        $update = "UPDATE trans_upn SET jumlah_km = '$jumlah_km' WHERE id_trans_upn = '$id_trans_upn'";
        $result = $mysqli->query($update);

        if ($result === TRUE){
            echo "<h2>Insert data SUCCESS</h2>";
            echo "<a href = \"$link_transupn\">Show trans-upn table</a>";
        }
    ?>
</body>
</html>