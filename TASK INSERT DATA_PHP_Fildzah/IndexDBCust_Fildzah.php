<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="StyleSampleDB_Fildzah.css">
    <title>FormInsertDBCust_Fildzah</title>
</head>
<body>
    <form action = "InsertDBCust_Fildzah.php" method = "post">
        <fieldset>
            <legend><h1>Customers</h1></legend>
            <p>
                <label for = "CustomerNumber">Customer Number:</label>
                <input type = "number" name = "customerNumber" id = "CustomerNumber">
            </p>
            <p>
                <label for = "CustomerName">Customer Name:</label>
                <input type = "text" name = "customerName" id = "CustomerName">
            </p>
            <p>
                <label for = "ContactLastName">Contact Last Name:</label>
                <input type = "text" name = "contactLastName" id = "ContactLastName">
            </p>
            <p>
                <label for = "ContactFirstName">Contact First Name:</label>
                <input type = "text" name = "contactFirstName" id = "ContactFirstName">
            </p>
            <p>
                <label for = "Phone">Phone:</label>
                <input type = "text" name = "phone" id = "Phone">
            </p>
            <p>
                <label for = "AddressLine1">Address Line 1:</label>
                <input type = "text" name = "addressLine1" id = "AddressLine1">
            </p>
            <p>
                <label for = "AddressLine2">Address Line 2:</label>
                <input type = "text" name = "addressLine2" id = "AddressLine2">
            </p>
            <p>
                <label for = "City">City:</label>
                <input type = "text" name = "city" id = "City">
            </p>
            <p>
                <label for = "State">State:</label>
                <input type = "text" name = "state" id = "State">
            </p>
            <p>
                <label for = "PostalCode">Postal Code:</label>
                <input type = "text" name = "postalCode" id = "PostalCode">
            </p>
            <p>
                <label for = "Country">Country:</label>
                <input type = "text" name = "country" id = "Country">
            </p>
            <p>
                <label for = "SalesRepEmployeeNumber">SalesRepEmployee:</label>
                <select name = "salesRepEmployeeNumber">
                <option value=>Choose one</option>
                <?php
                    include ('ConnSampleDB_Fildzah.php');
                    $query = "SELECT employeeNumber,firstName,lastName FROM employees WHERE jobTitle = 'Sales Rep'";
                    $result = $mysqli->query($query);
                    while ($obj = $result->fetch_object()){
                       echo "<option value= $obj->employeeNumber> $obj->employeeNumber - $obj->firstName $obj->lastName </option>";
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
            <a href="SelectDBCust_Fildzah.php">
                <input type="button" value="Cancel" />
            </a>
        </fieldset>
    </form>
</body>
</html>