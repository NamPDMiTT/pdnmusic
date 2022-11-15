<div>
    <div class="bg-secondary bg-opacity-10 border rounded-top py-1 px-3 fw-semibold">TOP 10 YÊU THÍCH</div>
    <div class="border rounded-bottom py-1 px-3 top10">
        <?php
        require_once '../../dao/hang-hoa.php';
        $hh_array = hang_hoa_select_top10();
        foreach ($hh_array as $hh) {
            $href = "$SITE_URL/hang-hoa/chi-tiet.php?ma_hh=$hh[ma_hh]";
            echo "
                <div>
                    <img class='top10_img' src='$CONTENT_URL/images/products/$hh[hinh]'>
                    <a href='$href'>$hh[ten_hh]</a>
                </div>
            ";
        }
        ?>
    </div>
</div>