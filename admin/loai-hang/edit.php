<div class="mb-0 alert alert-success border rounded">
    <h2 class="mb-0">QUẢN LÝ LOẠI HÀNG</h2>
</div>
<?php
    if(strlen($MESSAGE)){
        echo "<h5>$MESSAGE</h5>";
    }
?>
<form action="index.php" method="post" class="needs-validation" novalidate>
    <div class="mb-3">
        <label for="auto" class="form-label fw-semibold">Mã loại</label>
        <input type="number" class="form-control shadow-sm readonly" id="auto" name="ma_loai" value="<?=$ma_loai?>" readonly>
    </div>
    <div class="mb-3">
        <label for="nameType" class="form-label fw-semibold">Tên loại</label>
        <input type="text" class="form-control shadow-sm" id="nameType" name="ten_loai" value="<?=$ten_loai?>" required>
        <div class="valid-feedback">
            Ok!
        </div>
        <div class="invalid-feedback">
            Vui lòng nhập tên loại.
        </div>
    </div>
    <div class="d-flex gap-3">
        <button name="btn_update" class="btn btn-primary">Cập nhật</button>
        <button type="reset" class="btn btn-primary">Nhập lại</button>
        <a class="btn btn-primary" href="index.php" role="button">Thêm mới</a>
        <a class="btn btn-primary" href="index.php?btn_list" role="button">Danh sách</a>
    </div>
</form>
