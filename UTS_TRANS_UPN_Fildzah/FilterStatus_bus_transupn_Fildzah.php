<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style_transupn_Fildzah.css">
    <title>FilterStatus_bus_Fildzah</title>
</head>
<body>
            <?php
            include ('Conn_transupn_Fildzah.php');
            $link_bus = "Read_bus_transupn_Fildzah.php";
            $status = $_POST["status"];
            $show = "SELECT bus.id_bus,plat,status,km.km_sum FROM bus
            LEFT JOIN (
                SELECT id_bus, SUM(jumlah_km) AS km_sum FROM trans_upn GROUP BY id_bus
            ) km on km.id_bus = bus.id_bus WHERE status = $status";
            $result = $mysqli->query($show);
            echo "<table>";
            echo "<th>ID_bus</th>";
            echo "<th>Plat</th>";
            echo "<th>Status</th>";
            echo "<th>Total_KM</th>";
            echo "<tr>";
            while($obj = $result->fetch_object()){
                echo "<tr>";
                echo "<td>$obj->id_bus</td>";
                echo "<td>$obj->plat</td>";
                    if($obj->status==0){
                        $color = 'red';
                    }elseif($obj->status==1){
                        $color = 'green';
                    }elseif($obj->status==2){
                        $color = 'yellow';
                    }else{
                        $color = 'white';
                    }
                    $obj->status;
                    echo "<td style ='background-color:$color;'>$obj->status</td>";
                    echo "<td>$obj->km_sum KM</td>";
                    echo "</tr>";
            }
            echo "</table>";
            echo "<a href = \"$link_bus\">Back to bus table</a>";
        ?>
</body>
</html>