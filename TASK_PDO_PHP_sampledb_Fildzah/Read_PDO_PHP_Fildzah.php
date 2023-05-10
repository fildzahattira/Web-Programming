<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read_PDO_PHP_Fildzah</title>
    <style>
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        } 
            .aBtn{
        text-decoration: none;
        color: black;
        }
        .btn {
            border: none;
            border-radius: 30px;
            background-color: coral;
        }
        
        .dropdown {
            position: relative;
            display: inline-block;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f17e7e;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        
        .dropdown-content a:hover {background-color: #ddd;}
        
        .dropdown:hover .dropdown-content {display: block;}
        
        .dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>

</head>
<body>
    <h1 class="h">TABLE CUSTOMERS</h1>
    <button class="btn"><a class="aBtn" href = "FormInsert_PDO_PHP_Fildzah.php"><i>Insert Data</i></a></button>
    <div class="dropdown"">
        <button class="btn"><i>Update Data</i></button>
        <div class="dropdown-content">
            <a href="FormUpdate_PDO_PHP_Fildzah.php">Update</a>
            <a href="FormUpdateSalesNumber_PDO_PHP_Fildzah.php">(ONLY) Update salesRepEMployeeNumber</a>
        </div>
    </div>
    <button class="btn"><a class="aBtn" href = "FormDelete_PDO_PHP_Fildzah.php"><i>Delete Data</i></a></button>
    <p></p>
        <?php
                include ('Conn_PDO_PHP_Fildzah.php');
                $pdo_conn = new connDB();
                $conn = $pdo_conn->dbConn();
                $query = "SELECT * FROM customers";
                $result = $conn->query($query);
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
                while ($obj = $result->fetch(PDO::FETCH_ASSOC)){
                    echo ("<tr>
                    <td>$obj[customerNumber]</td>
                    <td>$obj[customerName]</td>
                    <td>$obj[contactLastName]</td>
                    <td>$obj[contactFirstName]</td>
                    <td>$obj[phone]</td>
                    <td>$obj[addressLine1]</td>
                    <td>$obj[addressLine2]</td>
                    <td>$obj[city]</td>
                    <td>$obj[state]</td>
                    <td>$obj[postalCode]</td>
                    <td>$obj[country]</td>
                    <td>$obj[salesRepEmployeeNumber]</td>
                    <td>$obj[creditLimit]</td>
                    </tr>");
                }
                echo "</table>";
        ?>

  
</body>
</html>