<div class="border rounded mt-3">
    <h5 class="rounded-top p-3 bg-secondary text-white">Hàng cùng loại</h5>
    <ul class="hang_cung_loai">
        <?php
        $hh_cung_loai = hang_hoa_select_by_loai($ma_loai);
        foreach ($hh_cung_loai as $hh) {
            echo "<li><a href='chi-tiet.php?ma_hh=$hh[ma_hh]'>$hh[ten_hh]</a></li>";
        }
        ?>
    </ul>
</div>