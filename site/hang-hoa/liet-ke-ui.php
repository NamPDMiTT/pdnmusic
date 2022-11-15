<!-- SLIDESHOW -->
<?php require '../layout/slideshow.php'; ?>

<div class="index__products text-center pt-3">
    <?php foreach ($items as $item) :
        extract($item);
    ?>
        <a class="border border-dark rounded shadow py-3" href="chi-tiet.php?ma_hh=<?= $ma_hh ?>">
            <img class="w-75 index__img" src="<?= $CONTENT_URL ?>/images/products/<?= $hinh ?>">
            <div>
                <h5 class="text-danger m-2">$<?= number_format($don_gia, 2) ?></h5>
                <h4><?= $ten_hh ?></h5>
            </div>
        </a>
    <?php endforeach; ?>
</div>