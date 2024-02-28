<?php

// include_once __DIR__ . '/init.php';



$password_array = [];

$characters = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890!"£$%&/()=?^§<>;:_-.,@#][{}°*';

$characters_array = str_split($characters);
shuffle($characters_array);

$form_sent = !empty($_GET);

if ($form_sent) {
    $password_length = $_GET['password-length'];

    for ($i = 0; $i < $password_length; $i++) {
        $random_characters = array_rand($characters_array);
        $password_array[] = $characters_array[$random_characters];
    }

    $password = implode($password_array);

    var_dump($random_characters);
    var_dump($characters_array);
    var_dump($password_array);
    var_dump($password_length);
    var_dump($password);

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container d-flex justify-content-center align-items-center vh-100">

        <form action="" method="GET">
            <input type="number" name='password-length' min='8' max="21">
            <button>invia</button>
        </form>

    </div>

</body>

</html>