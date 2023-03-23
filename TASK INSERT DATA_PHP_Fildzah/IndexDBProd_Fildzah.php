<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="StyleSampleDB_Fildzah.css">
    <title>FormInsertDBProd_Fildzah</title>
</head>
<body>
    <form action = "InsertDBProd_Fildzah.php" method = "post">
        <fieldset>
        <legend><h1>Products</h1></legend>
            <p>
                <label for = "ProductCode">Product Code:</label>
                <input type = "text" name = "productCode">
            </p>
            <p>
                <label for = "ProductName">Product Name:</label>
                <input type = "text" name = "productName">
            </p>
            <p>
                <label for = "ProductLine">Product Line:</label>
                <select name = "productLine">
                <option value=>Choose one</option>
                <?php
                    include ('ConnSampleDB_Fildzah.php');
                    $query = "SELECT productLine FROM productlines";
                    $result = $mysqli->query($query);
                    while ($obj = $result->fetch_object()){
                       echo "<option value= \"".$obj->productLine."\">". $obj->productLine ."</option>";
                    }
                ?>
                </select>
            </p>
            <p>
                <label for = "ProductScale">Product Scale:</label>
                <input type = "text" name = "productScale">
            </p>
            <p>
                <label for = "ProductVendor">Product Vendor: </label>
                <input type = "text" name = "productVendor">
            </p>
            <p>
                <label for = "ProductDescription">Product Description:</label>
                <input type = "text" name = "productDescription">
            </p>
            <p>
                <label for = "QuantityInStock">Quantity In Stock:</label>
                <input type = "number" name = "quantityInStock">
            </p>
            <p>
                <label for = "BuyPrice">Buy Price:</label>
                <input type = "number" name = "buyPrice">
            </p>
            <p>
                <label for = "Msrp">MSRP:</label>
                <input type = "number" name = "MSRP">
            </p>
            <input class= "submit" type="submit" name="submit" value="Submit">   
            <input class= "reset" type="reset" name="reset" value="Reset">
            <a href="SelectDBProd_Fildzah.php">
                <input type="button" value="Cancel" />
            </a>
        </fieldset>
    </form>
</body>
</html>