<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style_transupn_Fildzah.css">
    <title>FormUpdateAll_transupn_Fildzah</title>
</head>
<body>
    <form action = "UpdateAll_transupn_transupn_Fildzah.php" method = "post">
            <fieldset>
                <legend><h1>UPDATE ALL</h1></legend>
                    <p>
                        <label for = "id_trans_upn">Choose ID trans_upn:</label>
                        <select name = "id_trans_upn">
                        <?php
                            include ('Conn_transupn_Fildzah.php');
                            $query = "SELECT id_trans_upn FROM trans_upn";
                            $result = $mysqli->query($query);
                            while ($obj = $result->fetch_object()){
                            echo "<option value= $obj->id_trans_upn> $obj->id_trans_upn</option>";
                            }
                        ?>
                        </select>
                    </p>
                    <p>
                        <label for = "id_kondektur">Enter the new ID kondektur:</label>
                        <select name = "id_kondektur">
                        <?php
                            include ('Conn_transupn_Fildzah.php');
                            $query = "SELECT id_kondektur FROM kondektur";
                            $result = $mysqli->query($query);
                            while ($obj = $result->fetch_object()){
                            echo "<option value= $obj->id_kondektur> $obj->id_kondektur</option>";
                            }
                        ?>
                        </select>
                    </p>
                    <p>
                        <label for = "id_bus">Enter the new ID bus:</label>
                        <select name = "id_bus">
                        <?php
                            include ('Conn_transupn_Fildzah.php');
                            $query = "SELECT id_bus FROM bus";
                            $result = $mysqli->query($query);
                            while ($obj = $result->fetch_object()){
                            echo "<option value= $obj->id_bus> $obj->id_bus</option>";
                            }
                        ?>
                        </select>
                    </p>
                    <p>
                        <label for = "id_driver">Enter the new ID driver:</label>
                        <select name = "id_driver">
                        <?php
                            include ('Conn_transupn_Fildzah.php');
                            $query = "SELECT id_driver FROM driver";
                            $result = $mysqli->query($query);
                            while ($obj = $result->fetch_object()){
                            echo "<option value= $obj->id_driver> $obj->id_driver</option>";
                            }
                        ?>
                        </select>
                    </p>
                    <p>
                        <label for = "jumlah_km">Enter the new Jumlah KM:</label>
                        <input type = "number" name = "jumlah_km">
                    </p>
                    <p>
                        <label for = "tanggal">Enter the new Tanggal :</label>
                        <input type = "date" name = "tanggal">
                    </p>
                    <input type="submit" name="submit" value="Submit"> 
                    <input type="reset" name="reset" value="Reset">
            </fieldset>
    </form>

</body>
</html>