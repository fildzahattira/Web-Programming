<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP_MAIN_PHP_FILDZAH</title>
</head>
<body>
<?php
    require_once("OOP_Class_Product_PHP_Fildzah.php");

    echo "<b>--Product--</b>"."<br />";
    $product1 = new Product();
    $product1->setName("ALBUM BTS");
    $product1->setPrice(40000);
    $product1->setDiscount(25);
    echo "Name : ".$product1->getName()."<br />";
    echo "Price : ".$product1->getPrice()."<br />";
    echo "Discount : ".$product1->getDiscount()."<br />";

    echo "<b>CD Music :</b>"."<br />";
    $CDMusic1 = new CDMusic();
    $CDMusic1->setArtist("BTS");
    $CDMusic1->setGenre("Pop");
    $CDMusic1->setPrice(40000);
    $CDMusic1->setDiscount(25);
    echo "Artist : ".$CDMusic1->getArtist()."<br />";
    echo "Genre : ".$CDMusic1->getGenre()."<br />";
    echo "Price : ".$CDMusic1->getPrice()."<br />";
    echo "Price after discount : ".$CDMusic1->getDiscount()."<br />";

    echo "<b>CD Cabinet :</b>"."<br />";
    $CDCabinet1 = new CDCabinet();
    $CDCabinet1->setCapacity(100);
    $CDCabinet1->setModel("Model 1");
    $CDCabinet1->setPrice(40000);
    $CDCabinet1->setDiscount(25);
    echo "Capacity : ".$CDCabinet1->getCapacity()."<br />";
    echo "Model : ".$CDCabinet1->getModel()."<br />";
    echo "Price : ".$CDCabinet1->getPrice()."<br />";
    echo "Price after discount : ".$CDCabinet1->getDiscount()."<br />";
?>
</body>
</html>
