<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../content/css/admin.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>PDN Music</title>
    <style>
        h5 {
            color: #ffc107;
        }
        
        .readonly {
            background-color: #e9ecef !important;
            opacity: 1;
        }
    </style>
</head>

<body>
    <div class="container mt-3 mb-5">
        <div class="d-grid gap-3">
            <header class="mb-0 alert alert-danger border rounded">
                <h2 class="mb-0">QUẢN TRỊ WEBSITE</h2>
            </header>
            <?php require 'menu.php'; ?>
            <?php require $VIEW_NAME; ?>
        </div>
    </div>
    <script src="<?=$CONTENT_URL?>/js/validate.js" type="text/javascript"></script>
</body>

</html>