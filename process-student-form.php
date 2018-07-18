<?php
    require_once __DIR__ . '/bootstrap.php';

    // 登入沒？
    if (!isset($_SESSION['user'])) {
        header('Location: /');
        die();
    }

    // 導師？
    if (is_null($_SESSION['user']['class'])) {
        header('Location: /');
        die();
    }

    $data = isset($_POST['data']) || count($_POST['data']) === 0 ? $_POST['data'] : null;

    if (is_null($data)) {
        header('Location: edit-student.php');
        die();
    }

    // var_dump($data);
    // 檢查必填欄位
    if (empty($data['cnum']) || empty($data['name'])) {
        header('Location: edit-student.php');
        die();
    }

    $op = isset($_POST['op']) ? $_POST['op'] : null;
    switch ($op) {
        case 'add':
            add();
            break;

        case 'edit':
            update();
            break;
    }

    header('Location: signup.php');
    
    function add() {
        global $db, $data;
        // 新增
        $sql = "INSERT INTO students (class, cnum, name, gender) VALUES (:class, :cnum, :name, :gender)";
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':class', $_SESSION['user']['class']);
        $stmt->bindValue(':cnum', $data['cnum']);
        $stmt->bindValue(':name', $data['name']);
        $stmt->bindValue(':gender', $_POST['gender']);
        $stmt->execute();
    }


    function update() {
        echo '更新資料';
    }
