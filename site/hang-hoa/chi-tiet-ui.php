<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-6">
            <img src='<?= $CONTENT_URL ?>/images/products/<?= $hinh ?>' class="card-img-top w-100" alt="">
        </div>
        <div class="col-md-6">
            <div class="card-body">
                <h5 class="card-title">Mã hàng hóa: <?= $ma_hh ?></h5>
                <h5 class="card-title">Tên hàng hóa: <?= $ten_hh ?></h5>
                <h5 class="card-title">Đơn giá: $<?= number_format($don_gia, 2) ?></h5>
                <h5 class="card-title">Giảm giá: <?= $giam_gia * 100 ?>%</h5>
                <p class="card-text">Mô tả: <?= $mo_ta ?></p>
            </div>
        </div>
    </div>
</div>

<?php require 'binh-luan.php'; ?>

<?php require 'hang-cung-loai.php'; ?>