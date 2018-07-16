<?php
    require_once __DIR__ . '/bootstrap.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $fake_user = [
        'username' => 'demo@gg.gg',
        'password' => password_hash('123456', PASSWORD_DEFAULT)
    ];

    $result = false;
    if ($email === $fake_user['username']) {
        $result = password_verify($password, $fake_user['password']);
    }

    if ($result) {
        $_SESSION['user'] = $email;
        header("Location: ./test.php");
        die();
    } else {
        echo "帳號或密碼錯誤";
    }






