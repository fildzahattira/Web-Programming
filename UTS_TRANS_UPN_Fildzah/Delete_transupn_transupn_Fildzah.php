<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style_transupn_Fildzah.css">
    <title>Delete_transupn_Fildzah</title>
</head>
<body>
    <?php
        include ('Conn_transupn_Fildzah.php');
        $link_transupn = "Read_transupn_transupn_Fildzah.php";
        $id_trans_upn = $_POST["id_trans_upn"];

        $delete = "DELETE FROM trans_upn WHERE id_trans_upn  = '$id_trans_upn'";
        $result = $mysqli->query($delete);

        if ($result === TRUE){
            echo "<h2>Delete data SUCCESS</h2>";
            echo "<a href = \"$link_transupn\">Show trans-upn table</a>";
        }
    ?>
</body>
</html>