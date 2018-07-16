<?php
    $password = '123456';

    $hashed = '';
    for ($i = 0; $i < 5; $i++) {
        $hashed = password_hash($password, PASSWORD_DEFAULT);
        echo $hashed . "<br>";
    }

    $password = 'abcde';
    if (password_verify($password, $hashed)) {
        echo "mached";
    } else {
        echo "not mached";
    }



