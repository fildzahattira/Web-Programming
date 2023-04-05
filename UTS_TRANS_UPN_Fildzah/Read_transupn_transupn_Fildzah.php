<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style_transupn_Fildzah.css">
    <title>ReadTransUPN_Fildzah</title>
</head>
<body>
    <a href = "Home_transupn_Fildzah.php">Back to home</a>
    <h1 class="h">TRANS-UPN</h1>
    <button class="btn"><a class="aBtn" href = "FormCreate_transupn_transupn_Fildzah.php"><i>Insert Data</i></a></button>
    <div class="dropdown">
        <button class="btn"><i>Update Data</i></button>
        <div class="dropdown-content">
            <a href="FormUpdateAll_transupn_transupn_Fildzah.php">Update ALL</a>
            <a href="FormUpdateIDKondektur_transupn_transupn_Fildzah.php">Update ID KONDEKTUR</a>
            <a href="FormUpdateIDBus_transupn_transupn_Fildzah.php">Update ID BUS</a>
            <a href="FormUpdateIDDriver_transupn_transupn_Fildzah.php">Update ID DRIVER</a>
            <a href="FormUpdateJumlahKM_transupn_transupn_Fildzah.php">Update JUMLAH KM</a>
            <a href="FormUpdateTanggal_transupn_transupn_Fildzah.php">Update TANGGAL</a>
        </div>
    </div>
    <button class="btn"><a class="aBtn" href = "FormDelete_transupn_transupn_Fildzah.php"><i>Delete Data</i></a></button>
    <p></p>
    <?php
        include ('Conn_transupn_Fildzah.php');
        $show = "SELECT * FROM trans_upn";
        $result = $mysqli->query($show);
        echo "<table>";
        echo "<th>ID_Trans_UPN</th>";
        echo "<th>ID_Kondektur</th>";
        echo "<th>ID_Bus</th>";
        echo "<th>ID_Driver</th>";
        echo "<th>Jumlah_KM</th>";
        echo "<th>Tanggal</th>";
        while($obj = $result->fetch_object()){
            echo ("<tr>
            <td>$obj->id_trans_upn</td>
            <td>$obj->id_kondektur</td>
            <td>$obj->id_bus</td>
            <td>$obj->id_driver</td>
            <td>$obj->jumlah_km</td>
            <td>$obj->tanggal</td>
            </tr>");
        }
        echo "</table>";
    ?>
</body>
</html>