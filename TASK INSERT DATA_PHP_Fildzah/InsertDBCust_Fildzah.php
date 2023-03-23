<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="StyleSampleDB_Fildzah.css">
    <title>ProcessInsertDBCust_Fildzah</title>
</head>
<body>
    <?php 
    include ('ConnSampleDB_Fildzah.php');
    $link_cust = "SelectDBCust_Fildzah.php";
        if($_POST["submit"]=="Submit"){
            $customerNumber = $_POST["customerNumber"];
            $customerName = $_POST["customerName"];
            $contactLastName = $_POST["contactLastName"];
            $contactFirstName = $_POST["contactFirstName"];
            $phone = $_POST["phone"];
            $addressLine1 = $_POST["addressLine1"];
            $addressLine2 = $_POST["addressLine2"]; 
            $city = $_POST["city"];
            $state = $_POST["state"];
            $postalCode = $_POST["postalCode"];
            $country = $_POST["country"];
            $salesRepEmployeeNumber = $_POST["salesRepEmployeeNumber"];
            $creditLimit = $_POST["creditLimit"];

            if($salesRepEmployeeNumber !== '') {
                $salesRepEmployeeNumber = $_POST["salesRepEmployeeNumber"];
            } else {
                $salesRepEmployeeNumber = "NULL";
            }

            $input = "INSERT INTO  customers(customerNumber,customerName,contactLastName,contactFirstName,phone,addressLine1,addressLine2,city,state,postalCode,country,salesRepEmployeeNumber,creditLimit) VALUES ('$customerNumber','$customerName','$contactLastName','$contactFirstName','$phone','$addressLine1','$addressLine2','$city','$state','$postalCode','$country',$salesRepEmployeeNumber,'$creditLimit')";
            // echo $input;
            $result = $mysqli->query($input);
        }
        if ($result === TRUE){
            echo "<h2>Insert data SUCCESS</h2>";
            echo "<a href = \"$link_cust\">Show Customers table</a>";
        }
    ?>
</body>
</html>