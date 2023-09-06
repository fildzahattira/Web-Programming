<?php
include 'conn.php';

session_destroy();
echo "<script>alert('Logout success')</script>";
echo "<script>location='index.php'</script>";
?>