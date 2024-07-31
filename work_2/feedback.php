<?php

session_start();

$fullname = $_SESSION['fullname'];
$currentDate = date("Y m d H:i:s");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Thank you for your feedback</title>
    </head>

    <body>

        <h1>Hi <?php echo $fullname; ?>, thank you for your feedback on which was received <?php echo $currentDate; ?></h1>

    </body>

</html>