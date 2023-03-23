<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="StyleSampleDB_Fildzah.css">
    <title>TableDBprod_Fildzah</title>
</head>
<body>
    <a href = "HomeDB_Fildzah.php">Back to home</a>
    <h1>TABLE PRODUCTS</h1>
    <button class="btn"><a class="aBtn" href = "IndexDBProd_Fildzah.php"><i>Insert Data</i></a></button>
    <p></p>
        <?php
                include ('ConnSampleDB_Fildzah.php');
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