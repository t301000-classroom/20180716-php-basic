<!-- 側邊欄 -->
<div class="col-12 col-md-3">
    <div class="row flex-md-column">
        <?php
            if (!isset($_SESSION['user'])) {
                ?>
                <!-- 登入表單 -->
                <div class="card mb-2">
                    <div class="card-body">

                        <form class="form-signin" action="auth.php" method="post">
                            <div class="form-label-group">
                                <input type="text" id="inputEmail" class="form-control flex-grow-1" placeholder="Email" required name="email">
                                <label for="inputEmail">Email</label>
                            </div>
                            <div class="form-label-group">
                                <input type="password" id="inputPassword" class="form-control" placeholder="密碼" required name="password">
                                <label for="inputPassword">密碼</label>
                            </div>
                            <input type="hidden" name="op" value="login">
                            <button class="btn btn-lg btn-primary btn-block" type="submit">登入</button>
                        </form>
                    </div>
                </div>
            <?php } ?>



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
                    <a href="result.php" class="list-group-item list-group-item-action">報名結果</a>
                    <a href="signup.php" class="list-group-item list-group-item-action">
                        進行報名
                    </a>
                    <a href="import.php" class="list-group-item list-group-item-action">匯入學生名單</a>
                    <a href="edit-student.php" class="list-group-item list-group-item-action">新增學生</a>
                </div>
            </div>
        </div>

    </div>
</div>
