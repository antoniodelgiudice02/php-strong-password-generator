<?php

include_once __DIR__ . '/function.php';

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

    <div class="container d-flex flex-column justify-content-center align-items-center vh-100">

        <form action="" method="GET">
            <input type="number" name='password-length' min='8' max="21">
            <button>invia</button>
        </form>


        <h1>La tua password è:</h1>

        <h2>
            <?= $password ?>
        </h2>

    </div>

</body>

</html>