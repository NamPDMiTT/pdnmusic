<div class="mb-0 alert alert-danger border rounded">
    <h2 class="mb-0">CẬP NHẬT TÀI KHOẢN</h2>
</div>
<?php
if (strlen($MESSAGE)) {
    echo "<h5 class='text-warning mt-2'>$MESSAGE</h5>";
}
?>
<form action="cap-nhat-tk.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
    <div class="mt-4 d-flex gap-5">
        <img class="w-50" src="<?= $CONTENT_URL ?>/images/users/<?= $hinh ?>">
        <div class="col-5">
            <div class="mb-3">
                <label for="exampleInputCodename02" class="form-label fw-semibold">Tên đăng nhập</label>
                <input type="text" class="form-control readonly" id="exampleInputCodename02" name="ma_kh" value="<?= $ma_kh ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="exampleInputFullname02" class="form-label fw-semibold">Họ và tên</label>
                <input type="text" class="form-control" id="exampleInputFullname02" name="ho_ten" value="<?= $ho_ten ?>" required>
                <div class="valid-feedback">
                    Ok!
                </div>
                <div class="invalid-feedback">
                    Vui lòng nhập họ và tên.
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput04" class="form-label fw-semibold">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput04" placeholder="name@example.com" name="email" value="<?= $email ?>" required>
                <div class="valid-feedback">
                    Ok!
                </div>
                <div class="invalid-feedback">
                    Vui lòng nhập email.
                </div>
            </div>
            <div class="mb-3">
                <label for="formFile02" class="form-label fw-semibold">Hình</label>
                <input class="form-control" type="file" id="formFile02" name="up_hinh">
            </div>
            <div>
                <button class="btn btn-primary" name="btn_update">Cập nhật</button>
            </div>
            <!--Giá trị mặc định-->
            <input name="vai_tro" value="<?= $vai_tro ?>" type="hidden">
            <input name="kich_hoat" value="<?= $kich_hoat ?>" type="hidden">
            <input name="mat_khau" value="<?= $mat_khau ?>" type="hidden">
            <input name="hinh" value="<?= $hinh ?>" type="hidden">
        </div>
    </div>
</form>