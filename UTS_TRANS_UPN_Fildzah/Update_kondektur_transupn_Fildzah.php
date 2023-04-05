<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style_transupn_Fildzah.css">
    <title>UpdateKondektur_Fildzah</title>
</head>
<body>
    <?php
        include ('Conn_transupn_Fildzah.php');
        $link_kondektur = "Read_kondektur_transupn_Fildzah.php";
        $nama = $_POST["nama"];
        $id_kondektur = $_POST["id_kondektur"];

        $update = "UPDATE kondektur SET nama = '$nama' WHERE id_kondektur = $id_kondektur";
        $result = $mysqli->query($update);

        if ($result === TRUE){
            echo "<h2>Insert data SUCCESS</h2>";
            echo "<a href = \"$link_kondektur\">Show kondektur table</a>";
        }
    ?>
</body>
</html>