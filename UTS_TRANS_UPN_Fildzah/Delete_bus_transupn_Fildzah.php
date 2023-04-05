<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style_transupn_Fildzah.css">
    <title>Delete_bus_Fildzah</title>
</head>
<body>
    <?php
        include ('Conn_transupn_Fildzah.php');
        $link_bus = "Read_bus_transupn_Fildzah.php";
        $id_bus = $_POST["id_bus"];

        $delete = "DELETE FROM bus WHERE id_bus = '$id_bus'";
        $result = $mysqli->query($delete);

        if ($result === TRUE){
            echo "<h2>Delete data SUCCESS</h2>";
            echo "<a href = \"$link_bus\">Show bus table</a>";
        }
    ?>
</body>
</html>