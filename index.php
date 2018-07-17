<?php
    require_once __DIR__ . '/bootstrap.php';
    require_once __DIR__ . '/partials/header.php';
?>


        <main role="main" class="container">
            <div class="row">
                <!-- 主要內容區 -->
                <div class="col-12 col-sm-9">
                    <div class="row">
                        <!-- 班級名單 -->
                        <div class="col-12">
                            <h2 class="text-center">Hello</h2>
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

