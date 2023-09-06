<?php
    include '../conn.php';
    // jika tidak ada session user maka ke login
    if (!isset($_SESSION['account'])) {
        echo "<script>alert('Anda harus login!')</script>";
        echo "<script>location='../index.php'</script>";
        exit();
    }
    if ($_SESSION['account']['type_acc'] != 'admin') {
        echo "<script>alert('You're not admin!')</script>";
        echo "<script>location='../index.php'</script>";
        exit();
    }
?>

<?php
        $detail = $_SESSION['account']['email_acc'];
        $query = "SELECT * FROM account WHERE email_acc = '$detail'";
        $result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <style>
        body{
            margin: 0;
        }
    </style>
    <title>HeaderAdmin</title>
</head>
<body>
    <div class ="header">
        <a href="#default" class="logo">Digital Library</a>
        <div class="header-right">
            <a href="home_admin.php">Home</a>
            <a href="category.php">Category</a>
            <a href="../logout.php">Logout</a><br />
        </div>
    </div>
</body>
</html>


