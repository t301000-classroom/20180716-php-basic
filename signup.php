<?php
    require_once __DIR__ . '/bootstrap.php';
    require_once __DIR__ . '/partials/header.php';

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

    // $sql = "SELECT * FROM students WHERE class='701' ORDER BY cnum";
    $sql = "SELECT * FROM students WHERE class=:class ORDER BY cnum";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':class', $_SESSION['user']['class']);
    $stmt->execute();

    $list = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // var_dump($list);
    // die();


?>


        <main role="main" class="container">
            <div class="row">
                <!-- 主要內容區 -->
                <div class="col-12 col-sm-9">
                    <div class="row">
                        <!-- 班級名單 -->
                        <div class="col-12">
                            <h2 class="text-center"><?= $_SESSION['user']['class'] ?> 報名</h2>
                            <form>
                            <table class="table table-hover">
                              <thead>
                                <tr class="text-center">
                                  <th scope="col">報名</th>
                                  <th scope="col">座號</th>
                                  <th scope="col">姓名</th>
                                  <th scope="col">性別</th>
                                  <th scope="col" class="w-auto text-left">編輯</th>
                                </tr>
                              </thead>
                              <tbody>

                                <?php foreach($list as $student) { ?>

                                <tr class="text-center">
                                  <th scope="row">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                  </th>
                                  <td class="align-middle"><?php echo $student['cnum']; ?></td>
                                  <td class="align-middle"><?= $student['name'] ?></td>
                                  <td class="align-middle"><?= $student['gender'] ?></td>
                                  <td class="text-left">
                                    <div class="btn-group btn-group-sm" role="group">
                                      <a class="btn btn-outline-primary">修改</a>
                                      <a href="delete-student.php?id=<?= $student['id'] ?>" class="btn btn-outline-danger">刪除</a>
                                    </div>
                                  </td>
                                </tr>

                                <?php } ?>






                              </tbody>
                            </table>
                            <div class="text-center">
                              <button type="submit" class="btn btn-primary btn-lg">確定</button>
                            </div>
                          </form>

                        </div>
                    </div>
                </div>

                <!-- 側邊欄 -->
                <?php require_once __DIR__ . '/partials/sidebar.php'; ?>
            </div>
        </main>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="./assets/jquery/jquery-3.3.1.slim.min.js"></script>
        <script src="./assets/popper/popper.min.js"></script>
        <script src="./assets/bootstrap/js/bootstrap.min.js"></script>

    </body>
</html>

