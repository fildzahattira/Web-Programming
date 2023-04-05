<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style_transupn_Fildzah.css">
    <title>FormCreate_driver_Fildzah</title>
</head>
<body>
    <form action = "InsertCreate_driver_transupn_Fildzah.php" method = "post">
        <fieldset>
            <legend><h1>INSERT DATA</h1></legend>
                <p>
                    <label for = "nama">Nama :</label>
                    <input type = "text" name = "nama">
                </p>
                <p>
                    <label for = "no_sim">Nomor SIM :</label>
                    <input type = "text" name = "no_sim">
                </p>
                <p>
                    <label for = "alamat">Alamat :</label>
                    <input type = "text" name = "alamat">
                </p>
                <input type="submit" name="submit" value="Submit">   
                <input type="reset" name="reset" value="Reset">
        </fieldset>
    </form>
</body>
</html>