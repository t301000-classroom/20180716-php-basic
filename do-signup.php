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

    $player_ids = isset($_POST['player_id']) ? $_POST['player_id'] : null;

    // 沒有勾選任何人
    if (is_null($player_ids)) {
        header('Location: signup.php');
        die();
    }

    // 有勾選
    // var_dump($player_ids);
    $ids = implode(",", $player_ids);
    // var_dump($ids);
    // die();
    // $sql = "UPDATE students SET player = 1 WHERE id = 100"; //更新1筆
    // $sql = "UPDATE students SET player = 1 WHERE id IN (100, 150, 50)"; //更新多筆

    // 重設（歸零）
    $sql = "UPDATE students SET player = 0 WHERE class = :class AND player = 1";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':class', $_SESSION['user']['class']);
    $stmt->execute();

    // 確定參賽
    // $sql = "UPDATE students SET player = 1 WHERE id IN (:ids)"; // PDO 無效
    $sql = "UPDATE students SET player = 1 WHERE FIND_IN_SET(id, :ids)";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':ids', $ids);
    $stmt->execute();

    header('Location: signup.php');

