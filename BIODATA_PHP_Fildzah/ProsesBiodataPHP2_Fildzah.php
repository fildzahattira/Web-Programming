<?php
    #Biodata_PHP_Fildzah
    echo "<h1>BIODATA</h1>";
    echo "<b>Name :</b> ";
    echo $_POST["fullname"];
    echo "<br />";
    echo "<b>Nickname :</b> ";
    echo $_POST["nickname"];
    echo "<br />";

    echo "<b>Birth of Date :</b> ";
    echo $_POST["birthdate"];
    echo "<br />";
        $Bbirthdate = date_create($_POST["birthdate"]);
        $today = date_create("today");
        $diff = date_diff($Bbirthdate,$today);
        echo " <b>(</b>";
        echo " Age : ";
        echo $diff -> format ('%y years %m month %d days');
        echo "<b>)</b>";
    echo "<br />";
    echo "<b>Gender :</b> ";
    echo $_POST["gender"];
    echo "<br />";
    echo "<hr />";
    echo "<b>School :</b> ";
    echo $_POST["schoolname"];
    echo "<br />";
    echo "<b>Major :</b>";
    echo $_POST["schoolmajor"];
    echo "<br />";
    echo "<b>Projects :</b> ";
    echo $_POST["projects"];
    echo "<br />";
    echo "<hr />";
    echo "<b>Email :</b> ";
    echo $_POST["email"];
    echo "<br />";
    echo "<b>Instagram :</b> ";
    echo $_POST["instagram"];
?>