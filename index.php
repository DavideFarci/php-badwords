<?php
    // $censure = isset($_GET['censure']) ? $_GET['censure'] : '';
    $censure = $_GET['censure'] ?? ''; //Equivalente alla riga sopra
    
    // $user_text = $_GET['text'];
    $user_text = $_GET['text'] ?? '';
    
    $default_text = 'Il tuo testo è:' ;
    $default_censure = 'Il tuo testo censurato è:';
    $text_censored = str_replace($censure, '***', $user_text, $num_censored) ;
    $letters_count_text = strlen($user_text);
    $letters_count_censored = strlen($text_censored);
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
    <p>Il tuo texto ha <?= $letters_count_text ?> lettere</p>

    <h2><?= $default_censure; ?></h2>
    <p><?= $text_censored; ?></p>
    <p>Ho censurato la tua parola <?= $num_censored; ?> volta/e</p>
    <p>Il tuo testo censurato ha <?= $letters_count_censored ?> lettere</p>
</body>
</html>