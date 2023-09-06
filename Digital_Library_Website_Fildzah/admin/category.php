<?php include 'header_admin.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Category</title>
</head>
<body>
    <div style="padding-left:13px">
    <h2>Category</h2>
    <button class="btn"><a class="aBtn" href = "category_create.php"><i>Add Category</i></a></button><br /><br />

        <?php
            // include ('../conn.php');
            $read = "SELECT * FROM category";
            $result = $conn->query($read);
            echo "<table>";
            echo "<th>ID_category</th>";
            echo "<th>Name_category</th>";
            echo "<th>Edit</th>";
            while($obj = $result->fetch_object()){
                echo ("<tr>
                <td>$obj->id_category</td>
                <td>$obj->name_category</td>
                <td><button class='btn2'><a class='aBtn' href=category_update.php?id=".$obj->id_category.">Update</a></button>   <button class='btn3'><a class='aBtn' href=category_delete.php?id=".$obj->id_category.">Delete</a></td></button> 
                </tr>");
            }
            echo "</table>";
        ?>
        <br/>
        <button><a class="aBtn" href = "home_admin.php">back</a></button><br /><br />
    </div>
</body>
</html>
