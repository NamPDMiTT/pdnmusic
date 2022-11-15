<div class="mb-0 alert alert-success border rounded">
    <h2 class="mb-0">TỔNG HỢP BÌNH LUẬN</h2>
</div>
<form action="index.php" method="post">
    <table class="table table-hover">
        <thead class="alert alert-success">
            <tr>
                <th scope="col">Hàng hóa</th>
                <th scope="col">Số bình luận</th>
                <th scope="col">Mới nhất</th>
                <th scope="col">Cũ nhất</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($items as $item) :
                    extract($item);
            ?>
            <tr>
                <td><?=$ten_hh?></td>
                <td><?=$so_luong?></td>
                <td><?=$cu_nhat?></td>
                <td><?=$moi_nhat?></td>
                <td>
                    <a class="btn btn-primary" href="../binh-luan/index.php?ma_hh=<?=$ma_hh?>" role="button">Chi tiết</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</form>