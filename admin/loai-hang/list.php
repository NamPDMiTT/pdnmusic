<div class="mb-0 alert alert-success border rounded">
    <h2 class="mb-0">QUẢN LÝ LOẠI HÀNG</h2>
</div>
<?php
    if(strlen($MESSAGE)){
        echo "<h5>$MESSAGE</h5>";
    }
?>
<form action="index.php" method="post" onsubmit="return deleteChecked()">
    <table class="table table-hover">
        <thead class="alert alert-success">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Mã loại</th>
                <th scope="col">Tên loại</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($items as $item) :
                    extract($item);
            ?>
            <tr>
                <th scope="row"><input type="checkbox" name="ma_loai[]" class="checkbox" value="<?=$ma_loai?>"></th>
                <td><?=$ma_loai?></td>
                <td><?=$ten_loai?></td>
                <td>
                    <a class="btn btn-primary" href="index.php?btn_edit&ma_loai=<?=$ma_loai?>" role="button">Sửa</a>
                    <a class="btn btn-primary" href="index.php?btn_delete&ma_loai=<?=$ma_loai?>" role="button" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xóa</a>
                </td>
            </tr>
            <?php
                endforeach;
            ?>
        </tbody>
    </table>
    <div class="d-flex gap-3">
        <button id="check-all" type="button" class="btn btn-primary" onclick="checkAll()">Chọn tất cả</button>
        <button id="clear-all" type="button" class="btn btn-primary" onclick="uncheckAll()">Bỏ chọn tất cả</button>
        <button id="btn-delete" name="btn_delete" class="btn btn-primary" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xóa các mục chọn</button>
        <a class="btn btn-primary" href="index.php" role="button">Nhập thêm</a>
    </div>
</form>
<script src="<?=$CONTENT_URL?>/js/pdnmusic-list.js"></script>