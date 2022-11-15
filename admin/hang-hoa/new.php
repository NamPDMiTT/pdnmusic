<div class="mb-0 alert alert-success border rounded">
    <h2 class="mb-0">QUẢN LÝ HÀNG HÓA</h2>
</div>
<?php
    if(strlen($MESSAGE)){
        echo "<h5>$MESSAGE</h5>";
    }
?>
<form action="index.php" method="post" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
    <div class="col-md-4">
        <label for="validationGoods01" class="form-label">Mã hàng hóa</label>
        <input type="text" name="ma_hh" class="form-control shadow-sm" id="validationGoods01" value="auto number" disabled>
    </div>
    <div class="col-md-4">
        <label for="validationGoods02" class="form-label">Tên hàng hóa</label>
        <input type="text" name="ten_hh" class="form-control shadow-sm" id="validationGoods02" required>
        <div class="valid-feedback">
            Ok!
        </div>
        <div class="invalid-feedback">
            Vui lòng nhập tên hàng hóa.
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationGoods03" class="form-label">Đơn giá</label>
        <input type="text" name="don_gia" class="form-control shadow-sm" id="validationGoods03" required>
        <div class="valid-feedback">
            Ok!
        </div>
        <div class="invalid-feedback">
            Vui lòng nhập đơn giá.
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationGoods04" class="form-label">Giảm giá</label>
        <input type="text" name="giam_gia" class="form-control shadow-sm" id="validationGoods04">
        <div class="valid-feedback">
            Ok!
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationGoods05" class="form-label">Hình ảnh</label>
        <input type="file" name="hinh" class="form-control shadow-sm" id="validationGoods05" required>
        <div class="valid-feedback">
            Ok!
        </div>
        <div class="invalid-feedback">
            Vui lòng chọn ảnh.
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationGoods06" class="form-label">Loại hàng</label>
        <select name="ma_loai" class="form-select" id="validationGoods06" required>
            <option value="">Chọn loại hàng</option>
            <?php
                foreach ($loai_select_list as $loai) {
                    echo '<option value="'.$loai['ma_loai'].'">'.$loai['ten_loai'].'</option>';
                }
            ?>
        </select>
        <div class="valid-feedback">
            Ok!
        </div>
        <div class="invalid-feedback">
            Vui lòng chọn loại hàng.
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationGoods07" class="form-label">Hàng đặc biệt</label>
        <div class="form-control d-flex gap-5 shadow-sm" id="validationGoods07">
            <div>
                <input type="radio" name="dac_biet" class="form-check-input" id="validationFormCheck1" value="0" required>
                <label class="form-check-label" for="validationFormCheck1">Đặc biệt</label>
            </div>
            <div>
                <input type="radio" name="dac_biet" class="form-check-input" id="validationFormCheck2" value="1" required checked>
                <label class="form-check-label" for="validationFormCheck2">Bình thường</label>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationGoods08" class="form-label">Ngày nhập</label>
        <input type="date" name="ngay_nhap" class="form-control shadow-sm" id="validationGoods08" required>
        <div class="valid-feedback">
            Ok!
        </div>
        <div class="invalid-feedback">
            Vui lòng nhập ngày nhập.
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationGoods09" class="form-label">Số lượt xem</label>
        <input type="number" name="so_luot_xem" class="form-control shadow-sm readonly" id="validationGoods09" value="0" readonly>
    </div>
    <div class="col-12">
        <label for="validationTextarea__Goods" class="form-label">Mô tả</label>
        <textarea name="mo_ta" class="form-control shadow-sm" id="validationTextarea__Goods"></textarea>
        <div class="valid-feedback">
            Ok!
        </div>
    </div>
    <div class="col-12">
        <div class="d-flex gap-3">
            <button name="btn_insert" class="btn btn-primary">Thêm mới</button>
            <button type="reset" class="btn btn-primary">Nhập lại</button>
            <a class="btn btn-primary" href="index.php?btn_list&page_no=0" role="button">Danh sách</a>
        </div>
    </div>
</form>