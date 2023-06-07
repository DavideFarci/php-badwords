<?php
    $default_text = 'Il tuo testo è:' ;
    $user_text = $_GET['text'];

    $default_censure = 'Il tuo testo censurato è:';
    $censure = $_GET['censure'];
    $text_censored = str_replace($censure, '***', $user_text, $num_censored) ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h1><?= $default_text; ?></h1>
    <p><?= $user_text; ?></p>

    <h2><?= $default_censure; ?></h2>
    <p><?= $text_censored; ?></p>
    <p>Ho censurato la tua parola <?= $num_censored; ?> volta/e</p>
</body>
</html>