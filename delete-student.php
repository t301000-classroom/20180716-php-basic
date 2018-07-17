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

    $id = isset($_GET['id']) ? (int) $_GET['id'] : null;

    // 沒有 id
    if (is_null($id)) {
        header('Location: signup.php');
        die();
    }

    // 有 id
    // $sql = "DELETE FROM students WHERE id = 123";  // 刪除1筆
    // $sql = "DELETE FROM students WHERE id IN (123, 200, 50)"; // 刪除多筆
    $sql = "DELETE FROM students WHERE id = :id"; // 刪除1筆
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();

    header('Location: signup.php');
