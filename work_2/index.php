<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <title>Feedback Form</title>
    </head>

    <body>
        <h1>Please fill this form here: </h1>

        <form action="/review_box.php" method="POST">

            <label for="fname">First name: </label><br>
            <input type="text" name="fname" id="fname"><br>

            <label for="lname">Last name: </label><br>
            <input type="text" name="lname" id="lname"><br>

            <label for="email">Email: </label><br>
            <input type="text" name="email" id="email"><br>

            <label for="dob">Date of Birth: </label><br>
            <input type="date" name="dob" id="dob"><br>

            <label for="gender">Gender: </label><br>
            <select name="gender" id="gender"><br>
                <option value="male">Male</option><br>
                <option value="female">Female</option><br>
            </select><br>

            <input type="checkbox" name="feedback" id="feedback">

            <label for="feedback">Feedback: </label><br>
            <textarea name="feedback" id="feedback" cols="30" rows="10"></textarea>

            <input type="submit" value="Submit">


        </form>
    </body>

</html>