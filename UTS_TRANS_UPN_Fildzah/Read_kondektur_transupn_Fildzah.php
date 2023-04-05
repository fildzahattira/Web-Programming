<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style_transupn_Fildzah.css">
    <title>ReadKondektur_Fildzah</title>
</head>
<body>
    <a href = "Home_transupn_Fildzah.php">Back to home</a>
    <h1 class="h">KONDEKTUR</h1>
    <button class="btn"><a style="color:purple;" href = "FormPendapatanKondektur_transupn_Fildzah.php"><i>Lihat Pendapatan</i></a></button>
    <button class="btn"><a class="aBtn" href = "FormCreate_kondektur_transupn_Fildzah.php"><i>Insert Data</i></a></button>
    <button class="btn"><a class="aBtn" href = "FormUpdate_kondektur_transupn_Fildzah.php"><i>Update Data</i></a></button>
    <button class="btn"><a class="aBtn" href = "FormDelete_kondektur_transupn_Fildzah.php"><i>Delete Data</i></a></button>
    <p></p>
    <?php
        include ('Conn_transupn_Fildzah.php');
        $show = "SELECT * FROM kondektur";
        $result = $mysqli->query($show);
        echo "<table>";
        echo "<th>ID_kondektur</th>";
        echo "<th>Nama</th>";
        while($obj = $result->fetch_object()){
            echo ("<tr>
            <td>$obj->id_kondektur</td>
            <td>$obj->nama</td>
            </tr>");
        }
        echo "</table>";
    ?>
</body>
</html>