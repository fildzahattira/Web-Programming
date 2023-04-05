<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style_transupn_Fildzah.css">
    <title>UpdateSIM_driver_Fildzah</title>
</head>
<body>
    <?php
        include ('Conn_transupn_Fildzah.php');
        $link_driver = "Read_driver_transupn_Fildzah.php";
        $no_sim = $_POST["no_sim"];
        $id_driver = $_POST["id_driver"];

        $update = "UPDATE driver SET no_sim = '$no_sim' WHERE id_driver = $id_driver";
        $result = $mysqli->query($update);

        if ($result === TRUE){
            echo "<h2>Insert data SUCCESS</h2>";
            echo "<a href = \"$link_driver\">Show driver table</a>";
        }
    ?>
</body>
</html>