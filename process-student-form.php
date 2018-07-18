<?php
    require_once __DIR__ . '/bootstrap.php';

    // 登入沒？
    mustLogin();

    // 導師？
    mustBeTeacher();

    $data = isset($_POST['data']) || count($_POST['data']) !== 0 ? $_POST['data'] : null;

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
    dd($op, 1);
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
        global $db, $data;
        // 更新
        $sql = "UPDATE students SET cnum = :cnum, name = :name, gender = :gender WHERE id = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':id', $_POST['id']);
        $stmt->bindValue(':cnum', $data['cnum']);
        $stmt->bindValue(':name', $data['name']);
        $stmt->bindValue(':gender', $_POST['gender']);
        $stmt->execute();

    }
