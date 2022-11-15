<div class="mb-0 alert alert-danger border rounded">
    <h2 class="mb-0">ĐỔI MẬT KHẨU</h2>
</div>
<?php
if (strlen($MESSAGE)) {
    echo "<h5 class='text-warning mt-2'>$MESSAGE</h5>";
}
?>
<form action="doi-mk.php" method="post" class="needs-validation" novalidate>
    <div class="mb-3 mt-4">
        <label for="exampleInputEmail03" class="form-label fw-semibold">Tên đăng nhập</label>
        <input type="text" class="form-control" id="exampleInputEmail03" aria-describedby="emailHelp" name="ma_kh" required>
        <div class="valid-feedback">
            Ok!
        </div>
        <div class="invalid-feedback">
            Vui lòng nhập tên đăng nhập.
        </div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword03" class="form-label fw-semibold">Mật khẩu cũ</label>
        <input type="password" class="form-control" id="exampleInputPassword03" name="mat_khau" required>
        <div class="valid-feedback">
            Ok!
        </div>
        <div class="invalid-feedback">
            Vui lòng nhập mật khẩu cũ.
        </div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword04" class="form-label fw-semibold">Mật khẩu mới</label>
        <input type="password" class="form-control" id="exampleInputPassword04" name="mat_khau2" required>
        <div class="valid-feedback">
            Ok!
        </div>
        <div class="invalid-feedback">
            Vui lòng nhập mật khẩu mới.
        </div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword05" class="form-label fw-semibold">Xác nhận mật khẩu mới</label>
        <input type="password" class="form-control" id="exampleInputPassword05" name="mat_khau3" required>
        <div class="valid-feedback">
            Ok!
        </div>
        <div class="invalid-feedback">
            Vui lòng xác nhận mật khẩu mới.
        </div>
    </div>
    <div>
        <button class="btn btn-primary" name="btn_change">Đổi mật khẩu</button>
    </div>
</form>