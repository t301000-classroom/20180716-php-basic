<?php
    require_once __DIR__ . '/bootstrap.php';
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="./favicon.ico">

        <title>Fixed top navbar example for Bootstrap</title>

        <!-- Bootstrap core CSS -->
        <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="./assets/css/floating-labels.css" rel="stylesheet">
    </head>

    <body>

        <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Fixed navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="dropdown ml-auto">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            送承線
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">登出</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

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
                <div class="col-12 col-md-3">
                    <div class="row flex-md-column">

                        <!-- 登入表單 -->
                        <div class="card mb-2">
                            <div class="card-body">
                                <?php
                                  if (isset($_SESSION['user'])) {
                                      echo $_SESSION['user'];
                                  }

                                ?>
                                <form class="form-signin" action="auth.php" method="post">
                                    <div class="form-label-group">
                                        <input type="email" id="inputEmail" class="form-control flex-grow-1" placeholder="Email" required name="email">
                                        <label for="inputEmail">Email</label>
                                    </div>
                                    <div class="form-label-group">
                                        <input type="password" id="inputPassword" class="form-control" placeholder="密碼" required name="password">
                                        <label for="inputPassword">密碼</label>
                                    </div>
                                    <button class="btn btn-lg btn-primary btn-block" type="submit">登入</button>
                                </form>
                            </div>
                        </div>

                        <!-- 搜尋表單 -->
                        <div class="card mb-2">
                            <div class="card-body">
                                <form class="form-search">
                                    <div class="form-label-group">
                                        <input type="email" id="inputSearch" class="form-control flex-grow-1" placeholder="Search..." required>
                                        <label for="inputSearch">Search...</label>
                                    </div>
                                    <button class="btn btn-lg btn-outline-success btn-block" type="submit">搜尋</button>
                                </form>
                            </div>
                        </div>

                        <!-- 功能選單 -->
                        <div class="card">
                            <div class="card-header">功能選單</div>
                            <div class="card-body">
                                <div class="list-group list-group-flush menu-list">
                                    <a href="#" class="list-group-item list-group-item-action">報名結果</a>
                                    <a href="#" class="list-group-item list-group-item-action active">
                                        進行報名
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">匯入學生名單</a>
                                    <a href="#" class="list-group-item list-group-item-action">新增學生</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
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

