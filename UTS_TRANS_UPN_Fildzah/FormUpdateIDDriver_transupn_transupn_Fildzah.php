<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style_transupn_Fildzah.css">
    <title>FormUpdateIDDriver_transupn_Fildzah</title>
</head>
<body>
    <form action = "UpdateIDDriver_transupn_transupn_Fildzah.php" method = "post">
            <fieldset>
                <legend><h1>UPDATE ID Driver</h1></legend>
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
                    <input type="submit" name="submit" value="Submit"> 
                    <input type="reset" name="reset" value="Reset">
            </fieldset>
    </form>

</body>
</html>