<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style_transupn_Fildzah.css">
    <title>FormCreate_bus_Fildzah</title>
</head>
<body>
    <form action = "InsertCreate_bus_transupn_Fildzah.php" method = "post">
        <fieldset>
            <legend><h1>INSERT DATA</h1></legend>
                <p>
                    <label for = "plat">Plat :</label>
                    <input type = "text" name = "plat">
                </p>
                <p>
                    <label for = "status">Choose Status :</label>
                    <select name = "status">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </p>
                <input type="submit" name="submit" value="Submit">   
                <input type="reset" name="reset" value="Reset">
        </fieldset>
    </form>
</body>
</html>