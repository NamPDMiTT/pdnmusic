<div class="mb-4">
    <div class="bg-secondary bg-opacity-10 border rounded-top py-1 px-3 fw-semibold">TÀI KHOẢN</div>
    <div class="border rounded-bottom py-1 px-3">
        <div class="text-center">
            <img class="img__info rounded-circle mb-2" src="<?= $CONTENT_URL ?>/images/users/<?= $_SESSION['user']['hinh'] ?>" alt="">
            <br>
            <h6><?= $_SESSION['user']['ho_ten'] ?></h6>
        </div>
        <div class="signup__forgot">
            <ul>
                <li><a href="<?= $SITE_URL ?>/tai-khoan/dang-nhap.php?btn_logoff">Đăng xuất</a></li>
                <li><a href="<?= $SITE_URL ?>/tai-khoan/doi-mk.php">Đổi mật khẩu</a></li>
                <li><a href="<?= $SITE_URL ?>/tai-khoan/cap-nhat-tk.php">Cập nhật tài khoản</a></li>
                <?php
                if ($_SESSION['user']['vai_tro'] == TRUE) {
                    echo "<li><a href='$ADMIN_URL/trang-chinh'>Quản trị website</a></li>";
                }
                ?>
            </ul>
        </div>
    </div>
</div>