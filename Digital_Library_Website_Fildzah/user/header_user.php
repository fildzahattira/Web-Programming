<?php
    include '../conn.php';
    if (!isset($_SESSION['account'])) {
        echo "<script>alert('Anda harus login!')</script>";
        echo "<script>location='../index.php'</script>";
        exit();
    }

    if ($_SESSION['account']['type_acc'] != 'user') {
        echo "<script>alert('You're not user!')</script>";
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
    <title>HeaderUser</title>
</head>
<body>
    <div class ="header">
        <a href="#default" class="logo">Digital Library</a>
        <div class="header-right">
            <a href="home_user.php">Home</a>
            <a href="../logout.php">Logout</a><br />
        </div>
    </div>
</body>
</html>


