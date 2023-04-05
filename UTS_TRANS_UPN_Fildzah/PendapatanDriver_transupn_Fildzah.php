<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style_transupn_Fildzah.css">
    <title>PendapatanDriver_Fildzah</title>
</head>
<body>
    <?php
        include ('Conn_transupn_Fildzah.php');
        $link_driver = "Read_driver_transupn_Fildzah.php";
        $id_driver = $_POST["id_driver"];
        $bulan = $_POST["bulan"];

        $pendapatan = "SELECT SUM(jumlah_km) AS km_sum, SUM(jumlah_km)*3000 AS pendapatan_sum FROM trans_upn WHERE id_driver = '$id_driver' AND MONTH(tanggal) = '$bulan' GROUP BY MONTH(tanggal)";
        $result = $mysqli->query($pendapatan);

        echo "<h3>ID driver : ".$id_driver."</h3>";
        echo "<h3>Bulan : ".$bulan."</h3>";

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<h3>Total kilometer :"." ".$row["km_sum"]." KM"."</h3>";
                echo "<h3>Total pendapatan :"." "."Rp".$row["pendapatan_sum"]."</h3>";
            }
        } else {
            echo "TIDAK ADA PENGHASILAN";
            echo"<br />";
            echo "<a href = \"$link_driver\">Back to driver table</a>";
            exit();
        }
            echo "<h3>Detail :</h3>";
            $detail = "SELECT * FROM trans_upn WHERE id_driver = '$id_driver' AND MONTH(tanggal) = '$bulan'";
            $result2 = $mysqli->query($detail);
            echo "<table>";
            echo "<th>ID_Trans_UPN</th>";
            echo "<th>ID_Kondektur</th>";
            echo "<th>ID_Bus</th>";
            echo "<th>ID_Driver</th>";
            echo "<th>Jumlah_KM</th>";
            echo "<th>tanggal</th>";
            while($obj = $result2->fetch_object()){
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
            echo "<a href = \"$link_driver\">Back to driver table</a>";
    ?>
</body>
</html>