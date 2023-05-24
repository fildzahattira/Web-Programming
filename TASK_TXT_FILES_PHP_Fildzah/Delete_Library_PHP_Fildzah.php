<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Library_PHP_Fildzah.css">
    <title>Delete</title>
</head>
<body>
    <?php

        if ($_POST){

            $key = $_POST["title"];

            $fc=file("BooksList.txt");

            $f=fopen("BooksList.txt","w");

            foreach($fc as $line)
            {
                if (!strstr($line,$key)) 
                        fputs($f,$line); 
            }
            fclose($f);

            echo "Delete success<br/>";
    }
    $link_data = "Read_Library_PHP_Fildzah.php";
    echo "<br />";
    echo "<a href = \"$link_data\">Show collection</a>";
    ?>
</body>
</html>