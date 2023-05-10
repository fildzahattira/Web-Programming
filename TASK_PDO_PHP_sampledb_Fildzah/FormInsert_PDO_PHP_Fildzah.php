<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormInsert_PDO_PHP_Fildzah</title>
</head>
<body>
    <form action = "Insert_PDO_PHP_Fildzah.php" method = "post">
        <fieldset>
            <legend><h1>Customers</h1></legend>
            <p>
                <label for = "CustomerNumber">Customer Number:</label>
                <input type = "number" name = "customerNumber">
            </p>
            <p>
                <label for = "CustomerName">Customer Name:</label>
                <input type = "text" name = "customerName">
            </p>
            <p>
                <label for = "ContactLastName">Contact Last Name:</label>
                <input type = "text" name = "contactLastName">
            </p>
            <p>
                <label for = "ContactFirstName">Contact First Name:</label>
                <input type = "text" name = "contactFirstName">
            </p>
            <p>
                <label for = "Phone">Phone:</label>
                <input type = "number" name = "phone">
            </p>
            <p>
                <label for = "AddressLine1">Address Line 1:</label>
                <input type = "text" name = "addressLine1">
            </p>
            <p>
                <label for = "AddressLine2">Address Line 2:</label>
                <input type = "text" name = "addressLine2">
            </p>
            <p>
                <label for = "City">City:</label>
                <input type = "text" name = "city">
            </p>
            <p>
                <label for = "State">State:</label>
                <input type = "text" name = "state">
            </p>
            <p>
                <label for = "PostalCode">Postal Code:</label>
                <input type = "number" name = "postalCode">
            </p>
            <p>
                <label for = "Country">Country:</label>
                <input type = "text" name = "country">
            </p>
            <p>
                <label for = "SalesRepEmployeeNumber">SalesRepEmployee:</label>
                <select name = "salesRepEmployeeNumber">
                <option value=>Choose one</option>
                <?php
                    include ('Conn_PDO_PHP_Fildzah.php');
                    $pdo_conn = new connDB();
                    $conn = $pdo_conn->dbConn();
                    $query = "SELECT employeeNumber,firstName,lastName FROM employees WHERE jobTitle = 'Sales Rep'";
                    $result = $conn->query($query);
                    while ($obj = $result->fetch(PDO::FETCH_ASSOC)){
                       echo "<option value= $obj[employeeNumber]> $obj[employeeNumber] - $obj[firstName] $obj[lastName] </option>";
                    }
                ?>
                </select>
            </p>
            <p>
                <label for = "CreditLimit">Credit Limit:</label>
                <input type = "number" name = "creditLimit" id = "CreditLimit">
            </p>
            <input class="submit" type="submit" name="submit" value="Submit">   
            <input class="reset" type="reset" name="reset" value="Reset">
            <a href="Read_PDO_PHP_Fildzah.php">
                <input type="button" value="Cancel" />
            </a>
        </fieldset>
    </form>
</body>
</html>