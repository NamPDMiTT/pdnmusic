<div class="mb-0 alert alert-danger border rounded">
    <h2 class="mb-0">QUÊN MẬT KHẨU</h2>
</div>
<?php
if (strlen($MESSAGE)) {
    echo "<h5 class='text-warning mt-2'>$MESSAGE</h5>";
}
?>
<form action="quen-mk.php" method="post" class="needs-validation" novalidate>
    <div class="mb-3 mt-4">
        <label for="exampleInputEmail02" class="form-label fw-semibold">Tên đăng nhập</label>
        <input type="text" class="form-control" id="exampleInputEmail02" aria-describedby="emailHelp" name="ma_kh" required>
        <div class="valid-feedback">
            Ok!
        </div>
        <div class="invalid-feedback">
            Vui lòng nhập tên đăng nhập.
        </div>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput02" class="form-label fw-semibold">Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput02" placeholder="name@example.com" name="email" required>
        <div class="valid-feedback">
            Ok!
        </div>
        <div class="invalid-feedback">
            Vui lòng nhập email.
        </div>
    </div>
    <div>
        <button class="btn btn-primary" name="btn_forgot">Tìm lại mật khẩu</button>
    </div>
</form>