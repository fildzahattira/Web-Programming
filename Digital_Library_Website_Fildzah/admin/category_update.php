<?php include 'header_admin.php'; ?>

<?php
// include '../conn.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
}else{
    echo "ID not found";
    exit;
}

if (isset($_POST['submit'])) {
    $name = $_POST['name_category'];

    $query = "UPDATE category SET name_category='$name' WHERE id_category=$id";

    if ($conn->query($query) === TRUE) {
        echo "
        <script>
            alert('Update success');
            document.location.href = 'category.php';
        </script> 
    ";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

$query = "SELECT * FROM category WHERE id_category=$id";
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
    <link rel="stylesheet" href="../style.css">
    <title>Category Update</title>
</head>
<body>
    <div style="padding-left:13px">
        <h2>Update Category</h2>
        <form method="POST" action="">
            <label for="name_category">Name category:</label>
            <input type="text" name="name_category" value="<?php echo $data['name_category']; ?>">
            <br /><br />
            <input type="submit" value="update" name ="submit" class="">
            <button><a class="aBtn" href = "category.php">back</a></button><br /><br />
        </form>
    </div>
</body>
</html>
