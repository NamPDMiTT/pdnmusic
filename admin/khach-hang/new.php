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
        <label for="validationCustom01" class="form-label">Mã khách hàng</label>
        <input type="text" name="ma_kh" class="form-control shadow-sm" id="validationCustom01" required>
        <div class="valid-feedback">
            Ok!
        </div>
        <div class="invalid-feedback">
            Vui lòng nhập mã khách hàng.
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom02" class="form-label">Họ và tên</label>
        <input type="text" name="ho_ten" class="form-control shadow-sm" id="validationCustom02" required>
        <div class="valid-feedback">
            Ok!
        </div>
        <div class="invalid-feedback">
            Vui lòng nhập họ và tên.
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom03" class="form-label">Mật khẩu</label>
        <input type="password" name="mat_khau" class="form-control shadow-sm" id="validationCustom03" required>
        <div class="valid-feedback">
            Ok!
        </div>
        <div class="invalid-feedback">
            Vui lòng nhập mật khẩu.
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom04" class="form-label">Xác nhận mật khẩu</label>
        <input type="password" name="mat_khau2" class="form-control shadow-sm" id="validationCustom04" required>
        <div class="valid-feedback">
            Ok!
        </div>
        <div class="invalid-feedback">
            Vui lòng xác nhận mật khẩu.
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom05" class="form-label">Email</label>
        <input type="email" name="email" class="form-control shadow-sm" id="validationCustom05" required>
        <div class="valid-feedback">
            Ok!
        </div>
        <div class="invalid-feedback">
            Vui lòng nhập email.
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom06" class="form-label">Hình ảnh</label>
        <input type="file" name="hinh" class="form-control shadow-sm" id="validationCustom06">
    </div>
    <div class="col-md-6">
        <label for="validationCustom07" class="form-label">Kích hoạt</label>
        <div class="form-control d-flex gap-5 shadow-sm" id="validationCustom07">
            <div>
                <input type="radio" class="form-check-input" id="validationFormCheck3" name="kich_hoat" value="0" required>
                <label class="form-check-label" for="validationFormCheck3">Chưa kích hoạt</label>
            </div>
            <div>
                <input type="radio" class="form-check-input" id="validationFormCheck4" name="kich_hoat" value="1" checked required>
                <label class="form-check-label" for="validationFormCheck4">Kích hoạt</label>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom08" class="form-label">Vai trò</label>
        <div class="form-control d-flex gap-5 shadow-sm" id="validationCustom08">
            <div>
                <input type="radio" class="form-check-input" id="validationFormCheck5" name="vai_tro" value="0" required>
                <label class="form-check-label" for="validationFormCheck5">Khách hàng</label>
            </div>
            <div>
                <input type="radio" class="form-check-input" id="validationFormCheck6" name="vai_tro" value="1" checked required>
                <label class="form-check-label" for="validationFormCheck6">Nhân viên</label>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="d-flex gap-3">
            <button name="btn_insert" class="btn btn-primary">Thêm mới</button>
            <button type="reset" class="btn btn-primary">Nhập lại</button>
            <a href="index.php?btn_list" class="btn btn-primary" role="button">Danh sách</a>
        </div>
    </div>
</form>