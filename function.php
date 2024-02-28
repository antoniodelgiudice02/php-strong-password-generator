<?php

$characters = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890!$%&/?@#*';


$characters_array = str_split($characters);
shuffle($characters_array);

$password_array = [];

$form_sent = !empty($_GET);

if ($form_sent) {
    $password_length = $_GET['password-length'];

    for ($i = 0; $i < $password_length; $i++) {
        $random_characters = array_rand($characters_array);
        $password_array[] = $characters_array[$random_characters];
    }

    $password = implode($password_array);

}

?>