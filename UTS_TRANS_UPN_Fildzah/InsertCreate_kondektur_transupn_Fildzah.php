<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style_transupn_Fildzah.css">
    <title>InsertCreate_kondektur_Fildzah</title>
</head>
<body>
    <?php
        include ('Conn_transupn_Fildzah.php');
        $link_kondektur = "Read_kondektur_transupn_Fildzah.php";
            if($_POST["submit"]=="Submit"){
                $nama = $_POST["nama"];

                $insert = "INSERT INTO kondektur(nama) VALUES ('$nama')";
                $result = $mysqli->query($insert);
            }
            if($result == TRUE){
                echo "<h2>insert data SUCCESS</h2>";
                echo "<a href = \"$link_kondektur\">Show kondektur table</a>";
            }
    ?>
</body>
</html>