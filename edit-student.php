<?php
    require_once __DIR__ . '/bootstrap.php';
    require_once __DIR__ . '/partials/header.php';
?>


        <main role="main" class="container">
            <div class="row">
                <!-- 主要內容區 -->
                <div class="col-12 col-sm-9">
                    <div class="row">


                      <!-- 新增 / 修改 學生資料 -->
                      <div class="col-12">
                        <h2 class="text-center">新增學生資料</h2>
                        <form class="form-data" action="process-student-form.php" method="post">

                          <div class="form-label-group">
                            <input type="number" id="inputStuNo" class="form-control flex-grow-1" name="data[cnum]" value="" placeholder="座號" required>
                            <label for="inputStuNo">座號</label>
                          </div>

                          <div class="form-label-group">
                            <input type="text" id="inputStuName" class="form-control flex-grow-1" name="data[name]" value="" placeholder="姓名" required>
                            <label for="inputStuName">姓名</label>
                          </div>

                          <div class="form-check form-check-inline pl-2">
                            <input class="form-check-input" type="radio" name="gender" id="genderRadioM" value="男" checked>
                            <label class="form-check-label" for="genderRadioM">男</label>
                          </div>

                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="genderRadioF" value="女">
                            <label class="form-check-label" for="genderRadioF">女</label>
                          </div>

                          <div class="text-center">
                            <button class="btn btn-lg btn-primary" type="submit">確定</button>
                            <input type="hidden" name="op" value="add">
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

