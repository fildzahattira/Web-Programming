<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style_transupn_Fildzah.css">
    <title>FormDelete_bus_Fildzah</title>
</head>
<body>
    <form action = "Delete_bus_transupn_Fildzah.php" method = "post">
            <fieldset>
                <legend><h1>DELETE DATA</h1></legend>
                    <p>
                        <label for = "id_bus">Choose ID Bus:</label>
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
                    <input type="submit" name="submit" value="Submit"> 
                    <input type="reset" name="reset" value="Reset">
            </fieldset>
    </form>
</body>
</html>