<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert_PDO_PHP_Fildzah</title>
</head>
<body>
    <?php 
    include ('Conn_PDO_PHP_Fildzah.php');
        if($_SERVER["REQUEST_METHOD"]==="POST"){
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
            $pdo_conn = new connDB();
            $conn = $pdo_conn->dbConn();
            $sql = "INSERT INTO  customers(customerNumber,customerName,contactLastName,contactFirstName,phone,addressLine1,addressLine2,city,state,postalCode,country,salesRepEmployeeNumber,creditLimit) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $conn->prepare($sql)->execute([$customerNumber,$customerName,$contactLastName,$contactFirstName,$phone,$addressLine1,$addressLine2,$city,$state,$postalCode,$country,$salesRepEmployeeNumber,$creditLimit]);
            echo "insert success"."<br />";
        }
    ?>
        <a href="Read_PDO_PHP_Fildzah.php">
            <input type="button" value="Back to table" />
        </a>
</body>
</html>