<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Library_PHP_Fildzah.css">
    <title>FormUpdate</title>
</head>
<body>
    <h2>Update your data down here</h2>
    <p><b>Clue : </b>Code-Title-Author-Publication Year-Page-Publisher-Cover file name</p>
    <?php
        if (file_exists("BooksList.txt")){
            $file = "BooksList.txt";
            $update = file_get_contents($file);
        }
    ?>
    <form action = "Update_Library_PHP_Fildzah.php" method = "POST">
            <textarea rows = 25 cols = 120 name = "update" text><?php echo "$update"; ?></textarea>
        <input type = "submit" value = "Submit"/>
        <button><a href="Read_Library_PHP_Fildzah.php" class = "cancel">Cancel</a></button>
    </form>
</body>
</html>