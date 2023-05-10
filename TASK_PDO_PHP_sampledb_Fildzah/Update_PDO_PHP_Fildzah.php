<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update_PDO_PHP_Fildzah</title>
</head>
<body>
    <?php
    include ('Conn_PDO_PHP_Fildzah.php');
    $pdo_conn = new connDB();
    $conn = $pdo_conn->dbConn();

    if ($_SERVER["REQUEST_METHOD"] === "POST"){ 
        $customerNumber = $_POST["customerNumber"];
        $chooseDataa = $_POST["chooseData"];
        $updateDataa = $_POST["updateData"];

        $sql = "UPDATE customers SET $chooseDataa = ? WHERE customerNumber=?";
        // echo $sql;
        $conn->prepare($sql)->execute([$updateDataa, $customerNumber]);
        echo "update success"."<br />";       
    }
    ?>
        <a href="Read_PDO_PHP_Fildzah.php">
            <input type="button" value="Back to table" />
        </a>
</body>
</html>