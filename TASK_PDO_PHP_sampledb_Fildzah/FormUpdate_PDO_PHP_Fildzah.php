<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormUpdate_PDO_PHP_Fildzah</title>
</head>
<body>
<?php
        include ('Conn_PDO_PHP_Fildzah.php');
        $pdo_conn = new connDB();
        $conn = $pdo_conn->dbConn();
    ?>
    <form action = "Update_PDO_PHP_Fildzah.php" method = "post">
            <fieldset>
                <legend><h1>UPDATE</h1></legend>
                <p>
                        <label for = "customerNumber">Choose customerNumber:</label>
                        <select name = "customerNumber">
                        <?php
                            $query = "SELECT customerNumber FROM customers";
                            $result = $conn->query($query);
                            while ($obj = $result->fetch(PDO::FETCH_ASSOC)){
                                echo "<option value= $obj[customerNumber]> $obj[customerNumber]</option>";
                            }
                        ?>
                        </select>
                    </p>
                    <p>
                        Choose data you want to update:
                        <select name = "chooseData">
                            <option value="customerName">customerName</option>
                            <option value="contactLastName">customerLastName</option>
                            <option value="contactFirstName">customerFirstName</option>
                            <option value="phone">phone</option>
                            <option value="addressLine1">addressLine1</option>
                            <option value="addressLine2">addressLine2</option>
                            <option value="city">city</option>
                            <option value="state">state</option>
                            <option value="postalCode">postalCode</option>
                            <option value="country">country</option>
                            <option value="creditLimit">creditLimit</option>
                        </select>
                    </p>
                    <p>
                        <label for = "updateData">Enter new data:</label>
                        <input type = "text" name = "updateData">
                    </p>
                    <input type="submit" name="submit" value="Submit"> 
                    <input type="reset" name="reset" value="Reset">
                    <a href="Read_PDO_PHP_Fildzah.php">
                        <input type="button" value="Cancel" />
                    </a>
            </fieldset>
    </form>
</body>
</html>