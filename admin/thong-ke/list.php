<div class="mb-0 alert alert-success border rounded">
    <h2 class="mb-0">THỐNG KÊ HÀNG HÓA TỪNG LOẠI</h2>
</div>
<form action="">
    <table class="table table-hover">
        <thead class="alert alert-success">
            <tr>
                <th scope="col">Loại hàng</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Giá cao nhất</th>
                <th scope="col">Giá thấp nhất</th>
                <th scope="col">Giá trung bình</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($items as $item) :
                    extract($item);
            ?>
            <tr>
                <td><?=$ten_loai?></td>
                <td><?=$so_luong?></td>
                <td>$<?=number_format($gia_min,2)?></td>
                <td>$<?=number_format($gia_max,2)?></td>
                <td>$<?=number_format($gia_avg,2)?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="col-12">
        <a class="btn btn-primary" href="index.php?chart" role="button">Xem biểu đồ</a>
    </div>
</form>