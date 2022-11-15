<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../content/css/site.css">
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>PDN Music</title>
</head>

<body>
    <div class="container my-3">
        <div class="d-grid gap-3">
            <header class="mb-0 alert alert-success border rounded">
                <h2 class="mb-0">SIÊU THỊ TRỰC TUYẾN</h2>
            </header>

            <!-- MENU -->
            <?php require 'layout/menu.php'; ?>

            <main class="d-flex">
                <div class="box__left">
                    <!-- INDEX -->
                    <?php require $VIEW_NAME; ?>
                </div>
                <div class="col-3">
                    <!--LOGIN-->
                    <?php require 'layout/dang-nhap.php'; ?>

                    <!--CATALOG-->
                    <?php require 'layout/loai-hang.php'; ?>

                    <!--FAVORITE-->
                    <?php require 'layout/top10.php'; ?>
                </div>
            </main>
            <footer class="p-2 bg-success text-success text-center bg-opacity-25 border rounded">© 2022 All Rights Reserved - PH26842</footer>
        </div>
        <!-- JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <script src="<?= $CONTENT_URL ?>/js/validate.js" type="text/javascript"></script>
    </div>
</body>

</html>