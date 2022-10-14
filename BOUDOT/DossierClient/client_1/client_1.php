<?php

session_start();
$_SESSION['user']['id'] = "henry123";
$_SESSION['user']['mdp'] = "prout";
if ($_SESSION['user']['id'] == "henry123" && $_SESSION['user']['mdp'] == "prout") {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>

        <h1>BIENVENU</h1>

    </body>

    </html>

<?php

}
