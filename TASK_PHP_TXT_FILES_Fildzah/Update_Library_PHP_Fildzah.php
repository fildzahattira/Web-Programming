<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Library_PHP_Fildzah.css">
    <title>Update</title>
</head>
<body>
    <?php
        if ($_POST){
            $booksData = $_POST["update"];

            $fileName = "BooksList.txt";
            $read = file($fileName); 

            if (file_put_contents($fileName, $booksData)){
                echo "Update file success<br />";
            }else {
            }
        }

        $link_data = "Read_Library_PHP_Fildzah.php";
        echo "<br />";
        echo "<a href = \"$link_data\">Show collection</a>";
    ?>
</body>
</html>
