<?php
    include ('../conn.php');

    $query = "DELETE FROM category WHERE id_category = ".$_GET['id']."";
    if (mysqli_query($conn,$query)){
        echo "
            <script>
                alert('Delete success');
                document.location.href = 'category.php';
            </script> 
    ";
    }else {
        echo "
            <script>
                alert('Delete fail');
                document.location.href = 'category.php';
            </script> 
    ";

    }
    mysqli_close($conn);
?>
