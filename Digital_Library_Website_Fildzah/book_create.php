<?php
    include ('conn.php');
    $detail = $_SESSION['account']['email_acc'];
    $query = "SELECT * FROM account WHERE email_acc = '$detail'";
    $result = mysqli_query($conn, $query);
?>


<?php
    // include ('conn.php');
    if(isset($_POST['add'])) {
        while ($data = mysqli_fetch_array($result)){
            $user = $data['id_acc'];
        } 
        $title_book = $_POST['title_book'];
        $category_book = $_POST['category_book'];
        $description_book = $_POST['description_book'];
        $jumlah = $_POST['jumlah'];
        $file_book = $_FILES['file_book']['name'];
        $cover_book = $_FILES['cover_book']['name'];

        $query = "INSERT INTO book (user,title_book,category_book,description_book,jumlah,file_book,cover_book) VALUES ('$user','$title_book','$category_book','$description_book','$jumlah','$file_book','$cover_book')";
        $result = $conn->query($query);

        if($result==TRUE){
            echo "
            <script>
                alert('Add book success');
                document.location.href = 'index.php';
            </script> ";
        }else{
            echo "
                    <script>
                        alert('Add book fail, please try again');
                        document.location.href = 'index.php';
                    </script> 
                ";
        }
    }
?>

<?php
if(isset($_FILES['file_book'])){
   $errors= array();
   $file_name = $_FILES['file_book']['name'];
   $file_tmp =$_FILES['file_book']['tmp_name'];
   $file_type=$_FILES['file_book']['type'];
   $tmp = explode('.', $file_name);
   $file_ext = end($tmp);
   
   $extensions= array("pdf");
   
   if(in_array($file_ext,$extensions)=== false){
      $errors[]="Choose a pdf file!";
   }
    
   if(empty($errors)==true){
    $folder = "fileBook/";
      move_uploaded_file($file_tmp,$folder.$file_name);

      echo "
                    <script>
                        alert('Upload file success');
                        document.location.href = 'book.php';
                    </script> 
                ";
   }else{
      print_r($errors);

   }
}
?>

<?php
if(isset($_FILES['cover_book'])){
   $errors= array();
   $file_name = $_FILES['cover_book']['name'];
   $file_tmp =$_FILES['cover_book']['tmp_name'];
   $file_type=$_FILES['cover_book']['type'];
   $tmp = explode('.', $file_name);
   $file_ext = end($tmp);
   
   $extensions= array("jpeg","jpg","png");
   
   if(in_array($file_ext,$extensions)=== false){
      $errors[]="Choose a JPEG, JPG or PNG file!";
   }
    
   if(empty($errors)==true){
    $folder = "coverBook/";
      move_uploaded_file($file_tmp,$folder.$file_name);
      echo "
                    <script>
                        alert('Upload cover success');
                        document.location.href = 'book.php';
                    </script> 
                ";
   }else{
      print_r($errors);
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>BookForm</title>
</head>
<body>
    <h2>Add Book</h2>
    <form method="post" action="" enctype="multipart/form-data">
        <p>
            <label for="title_book">Title:</label>
            <input type="text" name="title_book">
        </p> 
        <p>
            <label for = "category_book">Choose book category:</label>
            <select name = "category_book">
            <?php
                include ('conn.php');
                $query = "SELECT * FROM category";
                $result = $conn->query($query);
                while ($obj = $result->fetch_object()){
                echo "<option value= $obj->id_category> $obj->id_category-$obj->name_category</option>";
                }
            ?>
            </select>
        </p>
        <p>
            <label for="description_book">Description:</label>
            <textarea rows = 3 cols = 25 name = "description_book" text></textarea>
        </p>
        <p>
            <label for="jumlah">Jumlah:</label>
            <input type="number" name="jumlah">
        </p>  
        <p>
            <label for="file_book">Book file (.pdf):</label>
            <input type="file" name="file_book">
        </p>
        <p>
            <label for="cover_book">Book cover (.jpeg/jpg/png):</label>
            <input type="file" name="cover_book">
        </p> 
        <input type="submit" value="add" name ="add" >
        <input type="reset" value="reset" >
        <?php
            if (isset($_SESSION['type_acc'])) { 
                if($_SESSION['type_acc']['type_acc'] == "admin"){
                echo " <button><a class='aBtn' href = 'admin/home_admin.php'>back</a></button><br /><br />";

                }elseif($_SESSION['type_acc']['type_acc'] == "user"){
                echo " <button><a class='aBtn' href = 'user/home_user.php'>back</a></button><br /><br />";
                }
        }
        ?>
    </form>
</body>
</html>