<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="StyleSampleDB_Fildzah.css">
    <title>ProcessInsertDBProd_Fildzah</title>
</head>
<body>
    <?php 
    include ('ConnSampleDB_Fildzah.php');
    $link_prod = "SelectDBProd_Fildzah.php";
        if($_POST["submit"]=="Submit"){
            $productCode = $_POST["productCode"];
            $productName = $_POST["productName"];
            $productLine = $_POST["productLine"];
            $productScale = $_POST["productScale"];
            $productVendor = $_POST["productVendor"];
            $productDescription = $_POST["productDescription"];
            $quantityInStock = $_POST["quantityInStock"]; 
            $buyPrice = $_POST["buyPrice"];
            $MSRP = $_POST["MSRP"];

            $input = "INSERT INTO products(productCode,productName,productLine,productScale,productVendor,productDescription,quantityInStock,buyPrice,MSRP) VALUES ('$productCode','$productName','$productLine','$productScale',' $productVendor','$productDescription','$quantityInStock','$buyPrice','$MSRP')";
            //echo $input;
            $result = $mysqli->query($input);
        }
        if ($result === TRUE){
            echo "<h2>Insert data SUCCESS</h2>";
            echo "<a href = \"$link_prod\">Show Products table</a>";
        }
    ?>
</body>
</html>