<div class="mb-0 alert alert-danger border rounded">
    <h2 class="mb-0">ĐĂNG KÝ THÀNH VIÊN</h2>
</div>
<?php
if (strlen($MESSAGE)) {
    echo "<h5 class='text-warning mt-2'>$MESSAGE</h5>";
}
?>
<form action="dang-ky.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
    <div class="mb-3 mt-4">
        <label for="exampleInputEmail1" class="form-label fw-semibold">Tên đăng nhập</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ma_kh" value="<?= $ma_kh ?>" required>
        <div class="valid-feedback">
            Ok!
        </div>
        <div class="invalid-feedback">
            Vui lòng nhập tên đăng nhập.
        </div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label fw-semibold">Mật khẩu</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="mat_khau" value="<?= $mat_khau ?>" required>
        <div class="valid-feedback">
            Ok!
        </div>
        <div class="invalid-feedback">
            Vui lòng nhập mật khẩu.
        </div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword2" class="form-label fw-semibold">Xác nhận mật khẩu</label>
        <input type="password" class="form-control" id="exampleInputPassword2" name="mat_khau2" value="<?= $mat_khau2 ?>" required>
        <div class="valid-feedback">
            Ok!
        </div>
        <div class="invalid-feedback">
            Vui lòng xác nhận mật khẩu.
        </div>
    </div>
    <div class="mb-3">
        <label for="exampleInputFullname1" class="form-label fw-semibold">Họ và tên</label>
        <input type="text" class="form-control" id="exampleInputFullname1" name="ho_ten" value="<?= $ho_ten ?>" required>
        <div class="valid-feedback">
            Ok!
        </div>
        <div class="invalid-feedback">
            Vui lòng nhập họ và tên.
        </div>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label fw-semibold">Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" value="<?= $email ?>" required>
        <div class="valid-feedback">
            Ok!
        </div>
        <div class="invalid-feedback">
            Vui lòng nhập email.
        </div>
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label fw-semibold">Hình ảnh</label>
        <input class="form-control" type="file" id="formFile" name="up_hinh">
    </div>
    <div>
        <button class="btn btn-primary" name="btn_register">Đăng ký</button>
    </div>
    <!--Giá trị mặc định-->
    <input name="vai_tro" value="0" type="hidden">
    <input name="kich_hoat" value="0" type="hidden">
</form>