
<?php
include 'conn.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
}else{
    echo "ID not found";
    exit;
}

if (isset($_POST['submit'])) {
    $title_book = $_POST['title_book'];
    $category_book = $_POST['category_book'];
    $description_book = $_POST['description_book'];
    $jumlah = $_POST['jumlah'];
    $file_book = $_FILES['file_book']['name'];
    $cover_book = $_FILES['cover_book']['name'];
    $where = " WHERE id_book=$id";

    $query = "UPDATE book SET title_book='$title_book', category_book='$category_book', description_book='$description_book', jumlah='$jumlah' WHERE id_book=$id";

    if ($file_book){
        $query."file_book='$file_book'";
    }
    if ($cover_book){
        $query."cover_book='$cover_book'";
    }
    $query.$where;

    if ($conn->query($query) === TRUE) {
        // kalau berhasil update langsung di arahin ke index aja
        echo "
            <script>
                alert('Update success');
                document.location.href = 'index.php';
            </script> ";

    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

if (isset($_SESSION['type_acc'])) { 
    if($_SESSION['type_acc']['type_acc'] == "admin"){
        include 'admin/header_admin.php';
    }elseif($_SESSION['type_acc']['type_acc'] == "user"){
        include 'user/header_user.php'; 
    }
}

$query = "SELECT * FROM book WHERE id_book=$id";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();
} else {
    echo "Data not found";
    exit;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Book Update</title>
</head>
<body>
    <div style="padding-left:13px">
        <h2>Update Book</h2>
        <form method="POST" action="" enctype="multipart/form-data">
        <p>
            <label for="title_book">Title book:</label>
            <input type="text" name="title_book" value="<?php echo $data['title_book']; ?>">
            <br />
        </p>
        <p>
            <label for = "category_book">Choose book category:</label>
            <select name = "category_book" >
            <option value="<?php echo $data['category_book']; ?>"><?php echo $data['category_book']; ?></option>
            <?php
                include ('conn.php');
                $query = "SELECT * FROM category";
                $result = $conn->query($query);
                while ($obj = $result->fetch_object()){
                echo "<option value= $obj->id_category> $obj->id_category-$obj->name_category</option>";
                }
            ?>
            </select>
        </p>
        <p>
            <label for="description_book">Description:</label>
            <textarea rows = 3 cols = 25 name = "description_book" text><?php echo $data['description_book']; ?></textarea>
        </p>
        <p>
            <label for="jumlah">Jumlah:</label>
            <input type="number" name="jumlah" value="<?php echo $data['jumlah']; ?>">
        </p>  
        <p>
            <label for="file_book">Book file (.pdf):</label>
            <input type="file" name="file_book" value="<?php echo $data['file_book']; ?>">
        </p>
        <p>
            <label for="cover_book">Book cover (.jpeg/jpg/png):</label>
            <input type="file" name="cover_book" value="<?php echo $data['cover_book']; ?>">
        </p> 
            <input type="submit" value="update" name ="submit">
            <?php
            if (isset($_SESSION['type_acc'])) { 
                if($_SESSION['type_acc']['type_acc'] == "admin"){
                echo " <button><a class='aBtn' href = 'admin/home_admin.php'>back</a></button><br /><br />";

                }elseif($_SESSION['type_acc']['type_acc'] == "user"){
                echo " <button><a class='aBtn' href = 'user/home_user.php'>back</a></button><br /><br />";
                }
        }
        ?>
        </form>
    </div>
</body>
</html>