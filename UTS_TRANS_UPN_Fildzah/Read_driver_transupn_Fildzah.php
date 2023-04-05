<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style_transupn_Fildzah.css">
    <title>ReadDriver_Fildzah</title>
</head>
<body>
    <a href = "Home_transupn_Fildzah.php">Back to home</a>
    <h1 class="h">DRIVER</h1>
    <button class="btn"><a style="color:purple;" href = "FormPendapatanDriver_transupn_Fildzah.php"><i>Lihat Pendapatan</i></a></button>
    <button class="btn"><a class="aBtn" href = "FormCreate_driver_transupn_Fildzah.php"><i>Insert Data</i></a></button>
    <div class="dropdown">
        <button class="btn"><i>Update Data</i></button>
        <div class="dropdown-content">
            <a href="FormUpdateAll_driver_transupn_Fildzah.php">Update ALL</a>
            <a href="FormUpdateNama_driver_transupn_Fildzah.php">Update NAMA</a>
            <a href="FormUpdateSIM_driver_transupn_Fildzah.php">Update SIM</a>
            <a href="FormUpdateAlamat_driver_transupn_Fildzah.php">Update ALAMAT</a>
        </div>
    </div>
    <button class="btn"><a class="aBtn" href = "FormDelete_driver_transupn_Fildzah.php"><i>Delete Data</i></a></button>
    <p></p>
    <?php
        include ('Conn_transupn_Fildzah.php');
        $show = "SELECT * FROM driver";
        $result = $mysqli->query($show);
        echo "<table>";
        echo "<th>ID_driver</th>";
        echo "<th>Nama</th>";
        echo "<th>No_SIM</th>";
        echo "<th>Alamat</th>";
        while($obj = $result->fetch_object()){
            echo ("<tr>
            <td>$obj->id_driver</td>
            <td>$obj->nama</td>
            <td>$obj->no_sim</td>
            <td>$obj->alamat</td>
            </tr>");
        }
        echo "</table>";
    ?>
</body>
</html>