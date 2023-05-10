<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormUpdateSalesNumber_PDO_PHP_Fildzah</title>
</head>
<body>
<?php
        include ('Conn_PDO_PHP_Fildzah.php');
        $pdo_conn = new connDB();
        $conn = $pdo_conn->dbConn();
    ?>
    <form action = "UpdateSalesNumber_PDO_PHP_Fildzah.php" method = "post">
            <fieldset>
                <legend><h1>UPDATE salesRepEmployeeNumber</h1></legend>
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
                        <label for = "salesRepEmployeeNumber">Choose new salesRepEmployee:</label>
                        <select name = "salesRepEmployeeNumber">
                        <option value=>Choose one</option>
                        <?php
                            $query = "SELECT employeeNumber,firstName,lastName FROM employees WHERE jobTitle = 'Sales Rep'";
                            $result = $conn->query($query);
                            while ($obj = $result->fetch(PDO::FETCH_ASSOC)){
                                echo "<option value= $obj[employeeNumber]> $obj[employeeNumber] - $obj[firstName] $obj[lastName] </option>";
                            }
                        ?>
                        </select>
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