<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style_transupn_Fildzah.css">
    <title>FormUpdateSIM_driver_Fildzah</title>
</head>
<body>
    <form action = "UpdateSIM_driver_transupn_Fildzah.php" method = "post">
            <fieldset>
                <legend><h1>UPDATE NO_SIM</h1></legend>
                    <p>
                        <label for = "id_driver">Choose ID driver:</label>
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
                        <label for = "no_sim">Enter the new No_SIM :</label>
                        <input type = "text" name = "no_sim">
                    </p>
                    <input type="submit" name="submit" value="Submit"> 
                    <input type="reset" name="reset" value="Reset">
            </fieldset>
    </form>

</body>
</html>