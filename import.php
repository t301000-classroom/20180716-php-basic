<?php
    require_once __DIR__ . '/bootstrap.php';
    require_once __DIR__ . '/partials/header.php';

    // 登入沒？
    if (!isset($_SESSION['user'])) {
        header('Location: /');
        die();
    }

    // 管理者？
    if (!is_null($_SESSION['user']['class'])) {
        header('Location: /');
        die();
    }
?>


        <main role="main" class="container">
            <div class="row">
                <!-- 主要內容區 -->
              <div class="col-12 col-sm-9">
                <div class="row">
                  <!-- 班級名單 -->
                  <div class="col-12">
                    <h2 class="text-center">匯入名單</h2>


                    <form action="do-import.php" method="post" enctype="multipart/form-data">
                      <input type="file" name="list">
                      <button type="submit">匯入</button>
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

