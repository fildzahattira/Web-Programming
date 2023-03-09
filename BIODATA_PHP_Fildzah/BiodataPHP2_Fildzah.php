<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata_PHP_Fildzah</title>
</head>
<body>
    <h1>BIODATA FORM</h1>
    <form action="ProsesBiodataPHP2.php" method="POST">
        <fieldset>
            <legend>Personal</legend>
                <p>
                    <label>Name:</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="fullname">
                </p>
                <p>
                    <label>Nickname:</label>
                    <input type="text" name="nickname">
                </p>
                <p>
                    <label>Birth of date:</label>
                    <input type="date" name="birthdate">
                </p>
                <p>
                    <label>Gender:</label>
                    <input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="Female">Female
                </p>
        </fieldset>
        <br />
        <fieldset>
            <legend>School Detail</legend>
                <p>
                    <label>School name:</label>
                    <input type="text" name="schoolname">
                </p>
                <p>
                    <label>Major:</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="schoolmajor">
                </p>
                <p>
                    <label>Projects:</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;
                    <input type="url" name="projects">
                </p>
        </fieldset>
        <br />
        <fieldset>
            <legend>Contact Detail</legend>
                <p>
                    <label>Email:</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="email" name="email">
                </p>
                <p>
                    <label>Instagram:</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="url" name="instagram">
                </p>
        </fieldset>
        <br />
        <input type="submit" value="Submit">
    </form>
</body>
</html>