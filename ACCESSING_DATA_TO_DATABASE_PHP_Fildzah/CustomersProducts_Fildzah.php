<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLE_CUST&PRODUCTS_PHP_Fildzah</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 15px;
        }
    </style>
</head>
<body>
    <!--select table customers-->
    <?php
        include ('Conn_Fildzah.php');
        echo "<h1>TABLE CUSTOMERS</h1>";
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
        echo "<th>SalesRepEmployeeNumber</th>";
        echo "<th>Country</th>";
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

    <!--select table products-->
    <?php
        include ('Conn_Fildzah.php');
        echo "<h1>TABLE PRODUCTS</h1>";
        $query = "SELECT * FROM products";
        $result = $mysqli->query($query);
        echo "<table>";
        echo "<th>ProductCode</th>";
        echo "<th>ProductName</th>";
        echo "<th>ProductLine</th>";
        echo "<th>ProductScale</th>";
        echo "<th>ProductVendor</th>";
        echo "<th>ProductDescription</th>";
        echo "<th>QuantityInStock</th>";
        echo "<th>BuyPrice</th>";
        echo "<th>MSRP</th>";
        while ($obj = $result->fetch_object()){
            echo ("<tr>
            <td>$obj->productCode</td>
            <td>$obj->productName</td>
            <td>$obj->productLine</td>
            <td>$obj->productScale</td>
            <td>$obj->productVendor</td>
            <td>$obj->productDescription</td>
            <td>$obj->quantityInStock</td>
            <td>$obj->buyPrice</td>
            <td>$obj->MSRP</td>
            </tr>");
        }
        echo "</table>";
    ?>
</body>
</html>
