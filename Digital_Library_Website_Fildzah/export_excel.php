<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=export_buku_dari_id_acc_".$_SESSION['account']['id_acc'].".xls");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
</head>
<body>
    <div style="padding-left:13px">
    <?php
        include ('conn.php');
        $detail = $_SESSION['account']['id_acc'];

        $read = "SELECT * FROM book";

        if ($_SESSION['account']['type_acc'] != 'admin') {
            $read = "SELECT * FROM book WHERE user = '$detail'";
            
        }
        
        $result = $conn->query($read);
        echo "<table>";
        echo "<th>ID_book</th>";
        echo "<th>User</th>";
        echo "<th>Title</th>";
        echo "<th>Category</th>";
        echo "<th>Description</th>";
        echo "<th>Jumlah</th>";
        echo "<th>File</th>";
        echo "<th>Cover</th>";
        echo "<th>Edit</th>";

        while($obj = $result->fetch_object()){
            echo ("<tr>
            <td>$obj->id_book</td>
            <td>$obj->user</td>
            <td>$obj->title_book</td>
            <td>$obj->category_book</td>
            <td>$obj->description_book</td>
            <td>$obj->jumlah</td>
            <td><a href=../fileBook/$obj->file_book>$obj->file_book</a></td>
            <td><img src = '../coverBook/$obj->cover_book.'</td>
            <td><button class='btn2'><a class='aBtn' href=book_update.php?id=".$obj->id_book.">Update</a></button>   <button class='btn3'><a class='aBtn' href=book_delete.php?id=".$obj->id_book.">Delete</a></td></button> 

            </tr>");
        }
        echo "</table>";
    ?>
    </div>
</body>
</html>