<?php
    $default_text = 'Il tuo testo è:' ;
    $user_text = $_GET['text'];

    $censure = $_GET['censure'];
    $default_censure = 'Il tuo testo censurato è:';
    $text_censored = str_replace($censure, '***', $user_text) ;
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
</body>
</html>