<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style_transupn_Fildzah.css">
    <title>FormDelete_kondektur_Fildzah</title>
</head>
<body>
    <form action = "Delete_kondektur_transupn_Fildzah.php" method = "post">
            <fieldset>
                <legend><h1>DELETE DATA</h1></legend>
                    <p>
                        <label for = "id_kondektur">Choose ID kondektur:</label>
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
                    <input type="submit" name="submit" value="Submit"> 
                    <input type="reset" name="reset" value="Reset">
            </fieldset>
    </form>
</body>
</html>