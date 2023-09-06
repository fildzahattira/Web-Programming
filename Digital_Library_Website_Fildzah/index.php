<?php
    include ('conn.php');
    
    if (isset($_SESSION['type_acc'])) { 
        if($_SESSION['type_acc']['type_acc'] == "admin"){
            echo "
                    <script>
                        document.location.href = 'admin/home_admin.php';
                    </script> 
                ";
        }elseif($_SESSION['type_acc']['type_acc'] == "user"){
            echo "
                    <script>
                        document.location.href = 'user/home_user.php';
                    </script> 
                ";
        }
    }

    if(isset($_POST['login'])){
        $email_acc = $_POST['email_acc'];
        $password_acc = sha1($_POST["password_acc"]);

        $get_acc = $conn->query("SELECT * FROM account WHERE email_acc='$email_acc' AND password_acc='$password_acc'");
        $check_acc = $get_acc->fetch_assoc();

        if(empty($check_acc)){
            echo "
                        <script>
                            alert('Login fail, wrong email/password');
                            document.location.href = 'index.php';
                        </script> 
                    ";
        }else{
            $_SESSION['type_acc'] = $check_acc;
            $_SESSION['account'] = $check_acc;
            if($check_acc['type_acc'] == "admin"){
                echo "
                        <script>
                            alert('Welcome admin!');
                            document.location.href = 'admin/home_admin.php';
                        </script> 
                    ";
            }elseif($check_acc['type_acc'] == "user"){
                echo "
                        <script>
                            alert('Welcome user!');
                            document.location.href = 'user/home_user.php';
                        </script> 
                    ";
            }
        }
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="">
        <p>
            <label for="email_acc">Email:</label>
            <input type="email" name="email_acc">
        </p> 
        <p>
            <label for="password_acc">Password:</label>
            <input type="password" name="password_acc">
        </p>
        <input type="submit" value="login" name ="login" class="button buttonRegist">
        <p>dont have account?<a href="register.php">register here!</a></p>

    </form>
</body>
</html>