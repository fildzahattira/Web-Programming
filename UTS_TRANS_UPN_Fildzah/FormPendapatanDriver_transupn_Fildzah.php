<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style_transupn_Fildzah.css">
    <title>FormPendapatanDriver_Fildzah</title>
</head>
<body>
    <form action = "PendapatanDriver_transupn_Fildzah.php" method = "post">
        <fieldset>
            <legend><h1>PENDAPATAN DRIVER PER-BULAN</h1></legend>
                <p>
                    <label for = "id_driver">Choose ID driver:</label>
                    <select name = "id_driver">
                    <?php
                        include ('Conn_transupn_Fildzah.php');
                        $query = "SELECT id_driver,nama FROM driver";
                        $result = $mysqli->query($query);
                        while ($obj = $result->fetch_object()){
                        echo "<option value= $obj->id_driver> $obj->id_driver - $obj->nama</option>";
                        }
                    ?>
                    </select>
                </p>
                <p>
                    <label for = "bulan">Choose Bulan :</label>
                    <select name = "bulan">
                        <option value='01'>January</option>
                        <option value='02'>February</option>
                        <option value='03'>March</option>
                        <option value='04'>April</option>
                        <option value='05'>May</option>
                        <option value='06'>June</option>
                        <option value='07'>July</option>
                        <option value='08'>August</option>
                        <option value='09'>September</option>
                        <option value='10'>October</option>
                        <option value='11'>November</option>
                        <option value='12'>December</option>
                    </select>
                </p>
                <input type="submit" name="submit" value="Submit">   
                <input type="reset" name="reset" value="Reset">
        </fieldset>
    </form>
</body>
</html>