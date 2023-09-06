<?php include 'header_user.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>HomeUser</title>
</head>
<body>
    <div style="padding-left:13px">
    <?php while ($data = mysqli_fetch_array($result)) : ?>
            <h2>Hello <?php echo $data['username']; ?>!</h2>
        <?php endwhile; ?>
    <h2>My Book</h2>
    <button class="btn"><a class="aBtn" href = "../book_create.php"><i>Add Data</i></a></button>
    <button class="btn2"><a class="aBtn" target="_blank" href="../export_excel.php"><i>Export data to Excel</i></a></button><br /><br />
    <form method="post" action="sort_category_user.php">
        <p>
                <label for = "sorting">Sort by category:</label>
                <select name = "sorting">
                <?php
                    include ('conn.php');
                    $query = "SELECT * FROM category";
                    $result = $conn->query($query);
                    while ($obj = $result->fetch_object()){
                    echo "<option value= $obj->id_category> $obj->id_category-$obj->name_category</option>";
                    }
                ?>
                </select>
            <input type="submit" value="sort" name ="sort" class="button buttonRegist">

        </p>
    </form>
    <?php
        // include ('conn.php');
        $detail = $_SESSION['account']['id_acc'];
        $read = "SELECT * FROM book  INNER JOIN category ON book.category_book = category.id_category INNER JOIN account ON account.id_acc = book.user WHERE user = '$detail'";
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
            <td>$obj->username</td>
            <td>$obj->title_book</td>
            <td>$obj->name_category</td>
            <td>$obj->description_book</td>
            <td>$obj->jumlah</td>
            <td><a href=../fileBook/$obj->file_book>$obj->file_book</a></td>
            <td><img src = '../coverBook/$obj->cover_book.'</td>
            <td><button class='btn2'><a class='aBtn' href=../book_update.php?id=".$obj->id_book.">Update</a></button>   <button class='btn3'><a class='aBtn' href=book_delete.php?id=".$obj->id_book.">Delete</a></td></button> 

            </tr>");
        }
        echo "</table>";
    ?>
    <br/>
    </div>
</body>
</html>