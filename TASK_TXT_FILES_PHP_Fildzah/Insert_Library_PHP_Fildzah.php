<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Library_PHP_Fildzah.css">
    <title>Insert</title>
</head>
<body>
   <?php

   if(isset($_FILES['cover'])){
      $errors= array();
      $file_name = $_FILES['cover']['name'];
      $file_size =$_FILES['cover']['size'];
      $file_tmp =$_FILES['cover']['tmp_name'];
      $file_type=$_FILES['cover']['type'];
      $tmp = explode('.', $file_name);
      $file_ext = end($tmp);
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="Choose a JPEG, JPG or PNG file!";
      }
      
      if($file_size > 2097152){
         $errors[]="File size max 2 MB !";
      }
      
      if(empty($errors)==true){
      $folder = "booksCover/";
         move_uploaded_file($file_tmp,$folder.$file_name);
         echo "Upload file success";
      }else{
         print_r($errors);
      }
   }

   if ($_POST){
   $booksData = $_POST["code"]."-".$_POST["title"]."-".$_POST["author"]."-".$_POST["publicationYear"]."-".$_POST["page"]."-".$_POST["publisher"]."-".$_POST["category"]."-".$file_name."\n";

   $fileName = "BooksList.txt";

   if (file_put_contents($fileName, $booksData, FILE_APPEND)){
      echo " & Upload to txt file success";
   }else {
      echo "Upload to txt file fail";
   }
   }

   $link_data = "Read_Library_PHP_Fildzah.php";
   echo "<br />";
   echo "<a href = \"$link_data\">Show collection</a>";
   ?>
</body>
</html>