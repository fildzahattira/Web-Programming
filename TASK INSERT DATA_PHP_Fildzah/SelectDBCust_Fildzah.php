<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="StyleSampleDB_Fildzah.css">
    <title>TableDBCust_Fildzah</title>
</head>
<body>
    <a href = "HomeDB_Fildzah.php">Back to home</a>
    <h1 class="h">TABLE CUSTOMERS</h1>
    <button class="btn"><a class="aBtn" href = "IndexDBCust_Fildzah.php"><i>Insert Data</i></a></button>
    <p></p>
        <?php
                include ('ConnSampleDB_Fildzah.php');
                $query = "SELECT * FROM customers";
                $result = $mysqli->query($query);
                echo "<table>";
                echo "<th>CustomerNumber</th>";
                echo "<th>CustomerName</th>";
                echo "<th>ContactLastName</th>";
                echo "<th>ContactFirstName</th>";
                echo "<th>Phone</th>";
                echo "<th>AddressLine1</th>";
                echo "<th>AddressLine2</th>";
                echo "<th>City</th>";
                echo "<th>State</th>";
                echo "<th>PostalCode</th>";
                echo "<th>Country</th>";
                echo "<th>SalesRepEmployeeNumber</th>";
                echo "<th>CreditLimit</th>";
                while ($obj = $result->fetch_object()){
                    echo ("<tr>
                    <td>$obj->customerNumber</td>
                    <td>$obj->customerName</td>
                    <td>$obj->contactLastName</td>
                    <td>$obj->contactFirstName</td>
                    <td>$obj->phone</td>
                    <td>$obj->addressLine1</td>
                    <td>$obj->addressLine2</td>
                    <td>$obj->city</td>
                    <td>$obj->state</td>
                    <td>$obj->postalCode</td>
                    <td>$obj->country</td>
                    <td>$obj->salesRepEmployeeNumber</td>
                    <td>$obj->creditLimit</td>
                    </tr>");
                }
                echo "</table>";
        ?>
  
</body>
</html>