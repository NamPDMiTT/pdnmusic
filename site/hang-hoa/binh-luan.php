<div class="">
    <h5 class="rounded-top mb-0 p-3 bg-secondary text-white">Bình luận</h5>
    <div class="border p-3">
        <?php
        require '../../dao/binh-luan.php';
        if (exist_param("noi_dung")) {
            $ma_kh = $_SESSION['user']['ma_kh'];
            $ngay_bl = date_format(date_create(), 'Y-m-d');
            binh_luan_insert($ma_kh, $ma_hh, $noi_dung, $ngay_bl);
        }
        $binh_luan_list = binh_luan_select_by_hang_hoa($ma_hh);
        foreach ($binh_luan_list as $bl) {
            echo "<i class='pull-right'><b>$bl[ma_kh]</b>, $bl[ngay_bl]</i><br><li>$bl[noi_dung]</li>";
        }
        ?>
    </div>
    <div class="panel-footer">
        <?php
        if (!isset($_SESSION['user'])) {
            echo '
            <div class="row mx-0 py-2 bg-secondary bg-opacity-10 border rounded-bottom">
                <b class="text-danger">Đăng nhập để bình luận về sản phẩm này</b>
            </div>';
        } else {
        ?>
            <form action="<?= $_SERVER["REQUEST_URI"] ?>" method="post" class="needs-validation" novalidate>
                <div class="form-group">
                    <div class="row mx-0 py-2 bg-secondary bg-opacity-10 border rounded-bottom">
                        <div class="col-sm-10">
                            <input type=text name="noi_dung" class="form-control" placeholder="Nhập bình luận..." required />
                            <div class="valid-feedback">
                                Ok!
                            </div>
                            <div class="invalid-feedback">
                                Vui lòng nhập bình luận.
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <button class="btn btn-primary" style="width: 100%">Gửi</button>
                        </div>
                    </div>
                </div>
            </form>
        <?php } ?>
    </div>
</div>