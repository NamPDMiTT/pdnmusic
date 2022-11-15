<div class="mb-0 alert alert-success border rounded">
    <h2 class="mb-0">QUẢN LÝ KHÁCH HÀNG</h2>
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
                <th scope="col">Mã khách hàng</th>
                <th scope="col">Họ và tên</th>
                <th scope="col">Email</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Vai trò</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($items as $item) :
                    extract($item);
            ?>
            <tr>
                <th scope="row"><input type="checkbox" name="ma_kh[]" value="<?=$ma_kh?>"></th>
                <td><?=$ma_kh?></td>
                <td><?=$ho_ten?></td>
                <td><?=$email?></td>
                <td><img src="<?="$CONTENT_URL/images/users/" . $hinh?>" class="img_admin" alt=""></td>
                <td><?=$vai_tro?'Nhân viên':'Khách hàng'?></td>
                <td>
                    <a class="btn btn-primary" href="index.php?btn_edit&ma_kh=<?=$ma_kh?>" role="button">Sửa</a>
                    <a class="btn btn-primary" href="index.php?btn_delete&ma_kh=<?=$ma_kh?>" role="button" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xóa</a>
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
<script src="<?=$CONTENT_URL?>/js/pdnmusic-list.js"></script>