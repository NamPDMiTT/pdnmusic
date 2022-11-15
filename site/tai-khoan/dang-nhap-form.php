<div class="mb-0 alert alert-danger border rounded">
    <h2 class="mb-0">ĐĂNG NHẬP</h2>
</div>
<?php
if (strlen($MESSAGE)) {
    echo "<h5 class='text-warning mt-2'>$MESSAGE</h5>";
}
?>
<form action="dang-nhap.php" method="post" class="needs-validation" novalidate>
    <div class="mb-3 mt-4">
        <label for="exampleInputEmail01" class="form-label fw-semibold">Tên đăng nhập</label>
        <input type="text" class="form-control" id="exampleInputEmail01" aria-describedby="emailHelp" name="ma_kh" value="<?= $ma_kh ?>" required>
        <div class="valid-feedback">
            Ok!
        </div>
        <div class="invalid-feedback">
            Vui lòng nhập tên đăng nhập.
        </div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword01" class="form-label fw-semibold">Mật khẩu</label>
        <input type="password" class="form-control" id="exampleInputPassword01" name="mat_khau" value="<?= $mat_khau ?>" required>
        <div class="valid-feedback">
            Ok!
        </div>
        <div class="invalid-feedback">
            Vui lòng nhập mật khẩu.
        </div>
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck01" name="ghi_nho" checked>
        <label class="form-check-label" for="exampleCheck01">Ghi nhớ tài khoản?</label>
    </div>
    <div>
        <button class="btn btn-primary" name="btn_login">Đăng nhập</button>
    </div>
</form>