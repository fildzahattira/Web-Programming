<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style_transupn_Fildzah.css">
    <title>FormCreate_transupn_Fildzah</title>
</head>
<body>
    <form action = "InsertCreate_transupn_transupn_Fildzah.php" method = "post">
        <fieldset>
            <legend><h1>INSERT DATA</h1></legend>
                <p>
                    <label for = "id_kondektur">Choose ID Kondektur :</label>
                    <select name = "id_kondektur">
                    <?php
                        include ('Conn_transupn_Fildzah.php');
                        $query = "SELECT id_kondektur,nama FROM kondektur";
                        $result = $mysqli->query($query);
                        while ($obj = $result->fetch_object()){
                        echo "<option value = $obj->id_kondektur>$obj->id_kondektur - $obj->nama</option>";
                        }
                    ?>
                    </select>
                </p>
                <p>
                    <label for = "id_bus">Choose ID Bus :</label>
                    <select name = "id_bus">
                    <?php
                        include ('Conn_transupn_Fildzah.php');
                        $query = "SELECT id_bus,plat FROM bus";
                        $result = $mysqli->query($query);
                        while ($obj = $result->fetch_object()){
                        echo "<option value = $obj->id_bus>$obj->id_bus - $obj->plat</option>";
                        }
                    ?>
                    </select>
                </p>
                <p>
                    <label for = "id_driver">Choose ID Driver :</label>
                    <select name = "id_driver">
                    <?php
                        include ('Conn_transupn_Fildzah.php');
                        $query = "SELECT id_driver,nama FROM driver";
                        $result = $mysqli->query($query);
                        while ($obj = $result->fetch_object()){
                        echo "<option value = $obj->id_driver>$obj->id_driver - $obj->nama</option>";
                        }
                    ?>
                    </select>
                </p>
                <p>
                    <label for = "jumlah_km">Jumlah KM :</label>
                    <input type = "number" name = "jumlah_km">
                </p>
                <p>
                        <label for = "tanggal">Tanggal :</label>
                        <input type = "date" name = "tanggal">
                </p>
                <input type="submit" name="submit" value="Submit">   
                <input type="reset" name="reset" value="Reset">
        </fieldset>
    </form>
</body>
</html>