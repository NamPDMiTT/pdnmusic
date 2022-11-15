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
        <input type="text" name="ma_hh" class="form-control shadow-sm readonly" id="validationGoods01" value="<?=$ma_hh?>" readonly>
    </div>
    <div class="col-md-4">
        <label for="validationGoods02" class="form-label">Tên hàng hóa</label>
        <input type="text" name="ten_hh" class="form-control shadow-sm" id="validationGoods02" value="<?=$ten_hh?>" required>
        <div class="valid-feedback">
            Ok!
        </div>
        <div class="invalid-feedback">
            Vui lòng nhập tên hàng hóa.
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationGoods03" class="form-label">Đơn giá</label>
        <input type="text" name="don_gia" class="form-control shadow-sm" id="validationGoods03" value="<?=$don_gia?>" required>
        <div class="valid-feedback">
            Ok!
        </div>
        <div class="invalid-feedback">
            Vui lòng nhập đơn giá.
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationGoods04" class="form-label">Giảm giá</label>
        <input type="text" name="giam_gia" class="form-control shadow-sm" id="validationGoods04" value="<?=$giam_gia?>">
        <div class="valid-feedback">
            Ok!
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationGoods05" class="form-label">Hình ảnh</label>
        <input type="file" name="up_hinh" class="form-control shadow-sm" id="validationGoods05">
        <input name="hinh" type="hidden" value="<?=$hinh?>"> (<?=$hinh?>)
    </div>
    <div class="col-md-4">
        <label for="validationGoods06" class="form-label">Loại hàng</label>
        <select name="ma_loai" class="form-select" id="validationGoods06" required>
            <?php
                foreach ($loai_select_list as $loai) {
                    if($loai['ma_loai'] == $ma_loai){
                        echo '<option selected value="'.$loai['ma_loai'].'">'.$loai['ten_loai'].'</option>';
                    } else{
                        echo '<option value="'.$loai['ma_loai'].'">'.$loai['ten_loai'].'</option>';
                    }
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
                <input type="radio" name="dac_biet" class="form-check-input" id="validationFormCheck1" value="0" required <?=$dac_biet?'':'checked'?>>
                <label class="form-check-label" for="validationFormCheck1">Đặc biệt</label>
            </div>
            <div>
                <input type="radio" name="dac_biet" class="form-check-input" id="validationFormCheck2" value="1" required <?=$dac_biet?'checked':''?>>
                <label class="form-check-label" for="validationFormCheck2">Bình thường</label>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationGoods08" class="form-label">Ngày nhập</label>
        <input type="date" name="ngay_nhap" class="form-control shadow-sm" id="validationGoods08" value="<?=$ngay_nhap?>" required>
        <div class="valid-feedback">
            Ok!
        </div>
        <div class="invalid-feedback">
            Vui lòng nhập ngày nhập.
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationGoods09" class="form-label">Số lượt xem</label>
        <input type="number" name="so_luot_xem" class="form-control shadow-sm readonly" id="validationGoods09" value="<?=$so_luot_xem?>" readonly>
    </div>
    <div class="col-12">
        <label for="validationTextarea__Goods" class="form-label">Mô tả</label>
        <textarea name="mo_ta" class="form-control shadow-sm" id="validationTextarea__Goods"><?=$mo_ta?></textarea>
        <div class="valid-feedback">
            Ok!
        </div>
    </div>
    <div class="col-12">
        <div class="d-flex gap-3">
            <button name="btn_update" class="btn btn-primary">Cập nhật</button>
            <button type="reset" class="btn btn-primary">Nhập lại</button>
            <a class="btn btn-primary" href="index.php" role="button">Thêm mới</a>
            <a class="btn btn-primary" href="index.php?btn_list&page_no=0" role="button">Danh sách</a>
        </div>
    </div>
</form>