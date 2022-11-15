<div class="mb-0 alert alert-success border rounded">
    <h2 class="mb-0">CHI TIẾT BÌNH LUẬN</h2>
</div>
<?php
    if(strlen($MESSAGE)){
        echo "<h5>$MESSAGE</h5>";
    }
?>
<form action="index.php?ma_hh=<?=$ma_hh?>" method="post" onsubmit="return deleteChecked()">
    <h3>HÀNG HÓA: <?=$items[0]['ten_hh']?></h3>
    <table class="table table-hover">
        <thead class="alert alert-success">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nội dung</th>
                <th scope="col">Ngày bình luận</th>
                <th scope="col">Người bình luận</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($items as $item) :
                   extract($item);
            ?>
            <tr>
                <th scope="row"><input type="checkbox" name="ma_bl[]" value="<?=$ma_bl?>"></th>
                <td><?=$noi_dung?></td>
                <td><?=$ngay_bl?></td>
                <td><?=$ma_kh?></td>
                <td>
                    <a class="btn btn-primary" href="index.php?btn_delete&ma_bl=<?=$ma_bl?>&ma_hh=<?=$ma_hh?>" role="button" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xóa</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="d-flex gap-3">
        <button id="check-all" class="btn btn-primary" type="button" onclick="checkAll()">Chọn tất cả</button>
        <button id="clear-all" class="btn btn-primary" type="button" onclick="uncheckAll()">Bỏ chọn tất cả</button>
        <button id="btn-delete" name="btn_delete" class="btn btn-primary" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xóa các mục chọn</button>
    </div>
</form>
<script src="<?=$CONTENT_URL?>/js/pdnmusic-list.js"></script>