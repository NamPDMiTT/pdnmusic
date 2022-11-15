<!-- SLIDESHOW -->
<?php require '../layout/slideshow.php'; ?>

<div class="index__products text-center pt-3">
    <?php foreach ($items as $item) : ?>
        <a class="border border-dark rounded shadow py-3" href="../hang-hoa/chi-tiet.php?ma_hh=<?= $item['ma_hh'] ?>">
            <img class="index__img w-75" src="<?= $CONTENT_URL ?>/images/products/<?= $item['hinh'] ?>" />
            <div>
                <h5 class="text-danger m-2">$<?= number_format($item['don_gia'], 2) ?></h5>
                <h4><?= $item['ten_hh'] ?></h5>
            </div>
        </a>
    <?php endforeach; ?>
</div>