<div class="mb-4">
    <div class="bg-secondary bg-opacity-10 border rounded-top py-1 px-3 fw-semibold">DANH MỤC</div>
    <div class="list-group rounded-0 list__dm">
        <?php
        require '../../dao/loai.php';
        $loai_array = loai_select_all();
        foreach ($loai_array as $loai) {
            $href = "$SITE_URL/hang-hoa/liet-ke.php?ma_loai=$loai[ma_loai]";
            echo "<a href='$href'>$loai[ten_loai]</a>";
        }
        ?>
    </div>
    <div class="bg-secondary bg-opacity-10 border rounded-bottom py-1 px-3">
        <form action="<?= $SITE_URL ?>/hang-hoa/liet-ke.php" class="d-flex gap-2">
            <input name="keywords" class="form-control" placeholder="Tìm kiếm..." required>
            <button class="btn btn-primary" type="submit">Lọc</button>
        </form>
    </div>
</div>