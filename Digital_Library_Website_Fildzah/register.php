<?php
    include ('conn.php');
    if(isset($_POST['submit'])){
        $username = $_POST["username"];
        $email_acc = $_POST["email_acc"];
        $password_acc = sha1($_POST["password_acc"]);
        $type_acc = $_POST["type_acc"];

        $query = "INSERT INTO account (username, email_acc, password_acc, type_acc) VALUES ('$username', '$email_acc', '$password_acc', '$type_acc')";
        $result = $conn->query($query);

        if($result==TRUE){
            echo "
                    <script>
                        alert('Registration success!');
                        document.location.href = 'index.php';
                    </script> 
                ";
        }else{
            echo "
                    <script>
                        alert('Registration fail, please try again');
                        document.location.href = 'register.php';
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
    <link rel="stylesheet" href="style.css">
    <title>RegistrationForm</title>
</head>
<body>
    <h2>Register Form</h2>
    <form method="post" action="">
        <p>
            <label for="username">Username:</label>
            <input type="text" name="username">
        </p>
        <p>
            <label for="email_acc">Email:</label>
            <input type="email" name="email_acc">
        </p> 
        <p>
            <label for="password_acc">Password:</label>
            <input type="password" name="password_acc">
        </p>
        <p>
            <label for="type_acc">Type:</label>
            <input type="radio" name="type_acc" value="admin">
            <label for="admin">admin</label>
            <input type="radio" name="type_acc" value="user">
            <label for="user">user</label>
        </p>   
        <input type="submit" value="register" name ="submit" class="">
        <input type="reset" value="reset" class="button">
    </form>
</body>
</html>
