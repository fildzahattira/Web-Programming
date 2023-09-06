<?php include 'header_admin.php'; ?>

<?php
    // include ('../conn.php');
    if(isset($_POST['add'])) {
        $name_category = $_POST['name_category'];

        $query = "INSERT INTO category (name_category) VALUES ('$name_category')";
        $result = $conn->query($query);

        if($result==TRUE){
            echo "
                    <script>
                        alert('Add category success!');
                        document.location.href = 'category.php';
                    </script> 
                ";
        }else{
            echo "
                    <script>
                        alert('Registration fail, please try again');
                        document.location.href = 'category.php';
                    </script> 
                ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CategoryForm</title>
</head>
<body>
    <div style="padding-left:13px">
    <h2>Category</h2>
    <form method="post" action="">
        <p>
            <label for="name_category">Name:</label>
            <input type="text" name="name_category">
        </p> 
        <input type="submit" value="add" name ="add" >
        <button><a class="aBtn" href = "category.php">back</a></button><br /><br />

    </form>
    </div>
</body>
</html>
