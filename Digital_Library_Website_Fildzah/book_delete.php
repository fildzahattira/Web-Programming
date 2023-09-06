<?php
    include ('conn.php');

    $query = "DELETE FROM book WHERE id_book = ".$_GET['id']."";
    if (mysqli_query($conn,$query)){
        echo "
            <script>
                alert('Delete success');
                document.location.href = 'index.php';
            </script> ";
    }else {
        echo "
            <script>
                alert('Delete fail');
                document.location.href = 'index.php';
            </script> 
    ";

    }
    mysqli_close($conn);
?>
