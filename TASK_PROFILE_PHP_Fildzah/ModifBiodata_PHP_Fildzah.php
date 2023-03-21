<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="StyleModifBiodata_PHP_Fildzah.css">
    <title>ModifBiodata_PHP_Fildzah</title>
</head>
<body>
    <?php
        $photo = "FOTO (BIODATA)_Fildzah.jpeg";
        $name = "Fildzah Attira Khair";
        $nickname ="Attira";
        $birthdate = "16 March 2004";
            $BirthDate = date_create("2004-03-16");
            $Today = date_create("today");
            $diff = date_diff($BirthDate,$Today);
        $nationality = "Indonesia";
        $school = "UPN \"Veteran\" Jawa Timur";
        $major = "Informatics";
        $projects = "https://github.com/fildzahattira";
        $contact = "fildzahattira560@gmail.com";

        $socmed = ["https://instagram.com/fildzah.ak", "https://open.spotify.com/user/on2nry7f9t86kf4a7d10xkhnm?si=373a57f7798f434e"];

        $hobbys = ["Tennis","Cooking","Listen to music"];

        $favorite = array("drink" => array ("Indonesian" => "Es Dawet", "Western" => "Coca cola"),
                        "food" => array ("Indonesian" => "Pempek",
                                        "Western" => "Steak")
                    );
    ?>
    <table align="center">
        <tbody>
            <tr>
                <td colspan="3">
                    <h1 align="center">BIODATA</h1>
                </td>
            </tr>
            <tr>
                <td rowspan = "13">
                    <img class ='photo' src= "<?= $photo ?>" alt="test"/>
                </td>
            </tr>
            <tr>
                <td><b>Name</b></td>
                <td><?php echo $name ?></td>
            </tr>
            <tr>
                <td><b>Nickname</b></td>
                <td><?php echo $nickname ?></td>
            </tr>
            <tr>
                <td><b>Date of birth</b></td>
                <td><?php echo $birthdate ?></td>
            </tr>
            <tr>
                <td><b>Age</b></td>
                <td><?php echo $diff-> format(' %y years %m month %d days'); ?></td>
            </tr>
            <tr>
                <td><b>Nationality</b></td>
                <td><?php echo $nationality ?></td>
            </tr>
            <tr>
                <td><b>School</b></td>
                <td><?php echo $school ?></td>
            </tr>
            <tr>
                <td><b>Major</b></td>
                <td><?php echo $major ?></td>
            </tr>
            <tr>
                <td><b>Projects</b></td>
                <td><?php echo "<a href =".$projects.">Click me!</a>" ?></td>
            </tr>
            <tr>
                <td><b>Contact</b></td>
                <td><?php echo $contact ?></td>
            </tr>
            <tr>
                <td><b>Social Media</b></td>
                <td>
                    <?php
                        echo "Instagram : <a href =".$socmed[0].">@fildzah.ak</a>"; 
                        echo " | ";
                        echo "Spotify : <a href =".$socmed[1].">raa</a>";
                    ?>
                </td>
            </tr>
            <tr>
                <td><b>Hobby</b></td>
                <td>
                    <ul>
                            <?php
                                foreach ($hobbys as $hobby){
                                    echo "<li>$hobby</li>";
                                }
                            ?>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><b>Favorite</b></td>
                <td>
                    <?php
                    foreach ($favorite as $key => $value){
                        foreach ($value as $type => $detail){
                            echo " {$type} {$key}  : <i>{$detail}</i> <br />";
                        }
                    }
                    ?>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>