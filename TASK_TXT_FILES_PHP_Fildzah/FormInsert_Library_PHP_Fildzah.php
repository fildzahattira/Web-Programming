<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Library_PHP_Fildzah.css">
    <title>FormInsert</title>
</head>
<body>
        <legend><h2>Insert Data</h2></legend>
            <table>
                    <form action = "Insert_Library_PHP_Fildzah.php" method = "POST"  enctype = "multipart/form-data">
                        <tr>
                            <td>
                                <label for = "code">
                                    Code :
                                </label>
                            </td>
                            <td>
                                <input type = "number" name = "code" required/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for = "title">
                                    Title :
                                </label>
                            </td>
                            <td>
                                <input type = "text" name = "title" required/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for = "author">
                                    Author :
                                </label>
                            </td>
                            <td>
                                <input type = "text" name = "author" required/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for = "publicationYear">
                                        Publication Year :
                                </label>
                            </td>
                            <td>
                                <select name = "publicationYear" required>
                                <option value="">Choose Year</option>
                                    <?php
                                        $start  = 1973;
                                        $end = date('Y');
                                                                        
                                        for ($year = $start; $year<=$end; $year++) {
                                            echo "<option value = $year> $year </option>";
                                        }
                                    ?>
                                <option value="others">others</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for = "page">
                                    Page :
                                </label>
                            </td>
                            <td>
                                <input type = "number" name = "page" required/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for = "publisher">
                                    Publisher :
                                </label>
                            </td>
                            <td>
                                <input type = "text" name = "publisher" required/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for = "category">
                                        Category :
                                </label>
                            </td>
                            <td>
                                <select name = "category" required>
                                <option value="">Choose Category</option>
                                <option value="biografy">biografy</option>
                                <option value="comic">comic</option>
                                <option value="encyclopedia">encyclopedia</option>
                                <option value="novel">novel</option>
                                <option value="magazine">magazine</option>
                                <option value="others">others</option>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for = "cover">
                                    Cover :
                                </label>
                            </td>
                            <td>
                                <input type = "file" name = "cover" required/>
                            </td>
                        </tr>
            </table>
                    <p></p>
                        <tr>
                            <td>
                                <input type = "submit" value = "Submit"/>
                                <input type = "reset" value = "Reset"/>
                                <button><a href="Read_Library_PHP_Fildzah.php" class = "cancel">Cancel</a></button>
                            </td>
                        </tr>
                    </form>
</body>
</html>