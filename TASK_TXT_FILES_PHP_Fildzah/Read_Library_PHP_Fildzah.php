<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table, td{
            border: 1px solid black;
            border-collapse: collapse;
            text-align: left;
            padding: 3px;
            width : 150px;
        }
        th{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 3px;

        }
        img{
            padding: 5px;
            width: 150px;
        }
    </style>
    <link rel="stylesheet" href="Library_PHP_Fildzah.css">
    <title>Read(HOME)</title>
</head>
<body>
    <h1>Books Data</h1>
    <button><a href="FormInsert_Library_PHP_Fildzah.php">Insert Data</a></button>
    <button><a href="FormUpdate_Library_PHP_Fildzah.php">Update Data</a></button>
    <button><a href="FormDelete_Library_PHP_Fildzah.php">Delete Data</a></button>
    <p></p>
    <hr />

    <?php
        echo "<h3>Collection : </h3>";

        $file_name = "BooksList.txt";

        $read = file($file_name); 

        $rows = explode("\n", $file_name);
        $rowCount = count($rows);

        foreach ($read as $books){
            $books_data = explode("-", $books);

            echo "<table>";

            echo    "
                <tr>
                    <td rowspan=9>";
                    echo "<img src = './booksCover/$books_data[7].'>";
            echo "      </td>
                </tr>
                <tr>
                    <th>Code</th>
                    <td>$books_data[0]</td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td>$books_data[1]</td>
                </tr>
                <tr>
                    <th>Author</th>
                    <td>$books_data[2]</td>
                </tr>
                <tr>
                    <th>Publication Year</th>
                    <td>$books_data[3]</td>
                </tr>
                <tr>
                    <th>Page</th>
                    <td>$books_data[4]</td>
                </tr>
                <tr>
                    <th>Publisher</th>
                    <td>$books_data[5]</td>
                </tr>
                <tr>
                    <th>Category</th>
                    <td>$books_data[6]</td>
                </tr>
                

            </table>
            <br />";

            }
        echo '<a href="#">Click me for back to up!</a>';
    ?>
</body>
</html>
