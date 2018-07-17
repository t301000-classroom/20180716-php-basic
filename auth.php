<?php
    require_once __DIR__ . '/bootstrap.php';

    $email = (isset($_POST['email']) and $_POST['email'] !== '') ? $_POST['email'] : null;
    $password = (isset($_POST['password']) and $_POST['password'] !== '') ? $_POST['password'] : null;

    if ($email === null or $password === null) {
        header("Location: /");
        die();
    }


    // $sql = "SELECT * FROM users WHERE username = '{$email}' LIMIT 1";
    $sql = "SELECT * FROM users WHERE username = :username LIMIT 1";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':username', $email);
    $stmt->execute();

    $result = $stmt->fetch();
    var_dump($result);
    die();



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






