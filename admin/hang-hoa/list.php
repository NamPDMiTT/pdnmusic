<div class="mb-0 alert alert-success border rounded">
    <h2 class="mb-0">QUẢN LÝ HÀNG HÓA</h2>
</div>
<?php
if (strlen($MESSAGE)) {
    echo "<h5>$MESSAGE</h5>";
}
?>
<ul class="nav justify-content-center">
    <li class="border m-2 rounded-5">
        <a class="nav-link" href="?btn_list&page_no=0">|&lt;</a>
    </li>
    <li class="border m-2 rounded-5">
        <a class="nav-link" href="?btn_list&page_no=<?= $_SESSION['page_no'] - 1?>">&lt;&lt;</a>
    </li>
    <li class="border m-2 rounded-5">
        <a class="nav-link" href="?btn_list&page_no=<?= $_SESSION['page_no'] + 1?>">&gt;&gt;</a>
    </li>
    <li class="border m-2 rounded-5">
        <a class="nav-link" href="?btn_list&page_no=<?= $_SESSION['page_count'] - 1?>">&gt;|</a>
    </li>
</ul>
<form action="index.php" method="post" onsubmit="return deleteChecked()">
    <table class="table table-hover">
        <thead class="alert alert-success">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Mã hàng hóa</th>
                <th scope="col">Tên hàng hóa</th>
                <th scope="col">Đơn giá</th>
                <th scope="col">Giảm giá</th>
                <th scope="col">Lượt xem</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($items as $item) :
                extract($item);
            ?>
                <tr>
                    <th scope="row"><input type="checkbox" name="ma_hh[]" value="<?= $ma_hh ?>"></th>
                    <td><?= $ma_hh ?></td>
                    <td><?= $ten_hh ?></td>
                    <td>$<?= number_format($don_gia, 2) ?></td>
                    <td><?= number_format($giam_gia * 100) ?>%</td>
                    <td><?= $so_luot_xem ?></td>
                    <td>
                        <a class="btn btn-primary" href="index.php?btn_edit&ma_hh=<?= $ma_hh ?>" role="button">Sửa</a>
                        <a class="btn btn-primary" href="index.php?btn_delete&ma_hh=<?= $ma_hh ?>" role="button" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="d-flex gap-3">
        <button id="check-all" class="btn btn-primary" type="button" onclick="checkAll()">Chọn tất cả</button>
        <button id="clear-all" class="btn btn-primary" type="button" onclick="uncheckAll()">Bỏ chọn tất cả</button>
        <button id="btn-delete" class="btn btn-primary" name="btn_delete" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xóa các mục chọn</button>
        <a class="btn btn-primary" href="index.php" role="button">Nhập thêm</a>
    </div>
</form>
<script src="<?= $CONTENT_URL ?>/js/pdnmusic-list.js"></script>