<div class="mb-0 alert alert-success border rounded">
    <h2 class="mb-0">QUẢN LÝ KHÁCH HÀNG</h2>
</div>
<?php
    if(strlen($MESSAGE)){
        echo "<h5>$MESSAGE</h5>";
    }
?>
<form action="index.php" method="post" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
    <div class="col-md-6">
        <label for="validationCustom01_2" class="form-label">Mã khách hàng</label>
        <input type="text" name="ma_kh" class="form-control shadow-sm readonly" id="validationCustom01_2" value="<?=$ma_kh?>" readonly required>
        <div class="valid-feedback">
            Ok!
        </div>
        <div class="invalid-feedback">
            Vui lòng nhập mã khách hàng.
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom02_2" class="form-label">Họ và tên</label>
        <input type="text" name="ho_ten" class="form-control shadow-sm" id="validationCustom02_2" value="<?=$ho_ten?>" required>
        <div class="valid-feedback">
            Ok!
        </div>
        <div class="invalid-feedback">
            Vui lòng nhập họ và tên.
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom03_2" class="form-label">Mật khẩu</label>
        <input type="password" name="mat_khau" class="form-control shadow-sm" id="validationCustom03_2" value="<?=$mat_khau?>" required>
        <div class="valid-feedback">
            Ok!
        </div>
        <div class="invalid-feedback">
            Vui lòng nhập mật khẩu.
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom04_2" class="form-label">Xác nhận mật khẩu</label>
        <input type="password" name="mat_khau2" class="form-control shadow-sm" id="validationCustom04_2" value="<?=$mat_khau?>" required>
        <div class="valid-feedback">
            Ok!
        </div>
        <div class="invalid-feedback">
            Vui lòng xác nhận mật khẩu.
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom05_2" class="form-label">Email</label>
        <input type="email" name="email" class="form-control shadow-sm" id="validationCustom05_2" value="<?=$email?>" required>
        <div class="valid-feedback">
            Ok!
        </div>
        <div class="invalid-feedback">
            Vui lòng nhập email.
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom06_2" class="form-label">Hình ảnh</label>
        <input name="hinh" type="hidden" value="<?=$hinh?>">
        <input type="file" name="up_hinh" class="form-control shadow-sm" id="validationCustom06_2">(<?=$hinh?>)
    </div>
    <div class="col-md-6">
        <label for="validationCustom07_2" class="form-label">Kích hoạt</label>
        <div class="form-control d-flex gap-5 shadow-sm" id="validationCustom07_2">
            <div>
                <input type="radio" class="form-check-input" id="validationFormCheck3_2" name="kich_hoat" value="0" <?=!$kich_hoat?'checked':''?> required>
                <label class="form-check-label" for="validationFormCheck3_2">Chưa kích hoạt</label>
            </div>
            <div>
                <input type="radio" class="form-check-input" id="validationFormCheck4_2" name="kich_hoat" value="1" <?=$kich_hoat?'checked':''?> required>
                <label class="form-check-label" for="validationFormCheck4_2">Kích hoạt</label>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom08_2" class="form-label">Vai trò</label>
        <div class="form-control d-flex gap-5 shadow-sm" id="validationCustom08_2">
            <div>
                <input type="radio" class="form-check-input" id="validationFormCheck5_2" name="vai_tro" value="0" <?=!$vai_tro?'checked':''?> required>
                <label class="form-check-label" for="validationFormCheck5_2">Khách hàng</label>
            </div>
            <div>
                <input type="radio" class="form-check-input" id="validationFormCheck6_2" name="vai_tro" value="1" <?=$vai_tro?'checked':''?> required>
                <label class="form-check-label" for="validationFormCheck6_2">Nhân viên</label>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="d-flex gap-3">
            <button name="btn_update" class="btn btn-primary">Cập nhật</button>
            <button type="reset" class="btn btn-primary">Nhập lại</button>
            <a href="index.php" class="btn btn-primary" role="button">Thêm mới</a>
            <a href="index.php?btn_list" class="btn btn-primary" role="button">Danh sách</a>
        </div>
    </div>
</form>