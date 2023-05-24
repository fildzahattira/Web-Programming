<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Library_PHP_Fildzah.css">
    <title>FormDelete</title>
</head>
<body>
    <h2>Delete Data</h2>
    <table>
        <form action = "Delete_Library_PHP_Fildzah.php" method = "POST"  enctype = "multipart/form-data">
            <tr>
                <td>
                        <label for = "title">
                            Choose title:
                        </label>
                        <select name = "title" required>
                        <option value=""></option>
                        <?php
                            $file_name = "BooksList.txt";

                            $read = file($file_name); 
                    
                            $rows = explode("\n", $file_name);
                            $rowCount = count($rows);
                            foreach ($read as $books){
                                $books_data = explode("-", $books);
                                echo "<option value= $books_data[1]> $books_data[1]</option>";
                                }
                        ?>
                        </select>
                </td>
                </tr>
    </table>
                    <p></p>
                        <tr>
                            <td>
                                <input type = "submit" value = "Submit"/>
                                <input type = "reset" value = "Reset"/>
                                <button><a href="Read_Library_PHP_Fildzah.php">Cancel</a></button>
                            </td>
                        </tr>
                    </form>
</body>
</html>