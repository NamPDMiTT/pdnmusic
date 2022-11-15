<div class="mb-4">
    <div class="bg-secondary bg-opacity-10 border rounded-top py-1 px-3 fw-semibold">TÀI KHOẢN</div>
    <div class="border rounded-bottom py-1 px-3">
        <form action="<?= $SITE_URL ?>/tai-khoan/dang-nhap.php" method="post" class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tên đăng nhập</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ma_kh" value="<?= $ma_kh ?>" required>
                <div class="valid-feedback">
                    Ok!
                </div>
                <div class="invalid-feedback">
                    Vui lòng nhập tên đăng nhập.
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="mat_khau" value="<?= $mat_khau ?>" required>
                <div class="valid-feedback">
                    Ok!
                </div>
                <div class="invalid-feedback">
                    Vui lòng nhập mật khẩu.
                </div>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="ghi_nho" checked>
                <label class="form-check-label" for="exampleCheck1">Ghi nhớ tài khoản?</label>
            </div>
            <button name="btn_login" class="btn btn-primary">Đăng nhập</button>
        </form>
        <div class="signup__forgot">
            <ul>
                <li><a href="<?= $SITE_URL ?>/tai-khoan/quen-mk.php">Quên mật khẩu</a></li>
                <li><a href="<?= $SITE_URL ?>/tai-khoan/dang-ky.php">Đăng ký thành viên</a></li>
            </ul>
        </div>
    </div>
</div>