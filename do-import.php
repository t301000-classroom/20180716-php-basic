<?php
    require_once __DIR__ . '/bootstrap.php';

    // 登入沒？
    if (!isset($_SESSION['user'])) {
        header('Location: /');
        die();
    }


    // 沒有檔案
    if (!isset($_FILES['list'])) {
        header('Location: import.php');
        die();
    }

    // 有檔案
    $file = $_FILES['list'];
    // var_dump($file);

    $origin_name = $file['name'];
    $tmp_array = explode('.', $origin_name);
    $ext = end($tmp_array);

    // 不是 csv 檔
    if ($ext !== 'csv') {
        header('Location: import.php');
        die();
    }

    // 處理 csv 檔
    $tmp_file = $file['tmp_name'];
    $handler = fopen($tmp_file, 'r');
    // 取出第1行標題，不處理
    $line_array = fgetcsv($handler, 1000);

    // $sql = "INSERT INTO students (class, cnum, name, gender) VALUES ('$class', $cnum, '$name', '$gender')";
    $sql = "INSERT INTO students (class, cnum, name, gender) VALUES (:class, :cnum, :name, :gender)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':class', $class);
    $stmt->bindParam(':cnum', $cnum);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':gender', $gender);

    while($line_array = fgetcsv($handler, 1000)) {
        // var_dump($line_array);
        // $class = $line_array[0];
        // $cnum = (int) $line_array[1];
        // $name = $line_array[2];
        // $gender = $line_array[3];
        list($class, $cnum, $name, $gender) = $line_array;
        $cnum = (int) $cnum;

        $stmt->execute();
    }

    header('Location: import.php');



