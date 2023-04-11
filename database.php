<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>АЗРФ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styleproject.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ajax-framework.js"></script>
</head>
<body>
<?php include 'header.php'; ?>
<?php $bases = new bases(); ?>
<div class="backgroundpage" style="background-color: #F4F4F4; width: 100vw;">
    <div class="map">
        <h1>ДОСТУПНЫЕ ДЛЯ СКАЧИВАНИЯ БАЗЫ ДАННЫХ</h1>
    </div>
    <div class="dbdn row">
        <?php foreach ($bases->baseItems as $base) { ?>
            <div class="items col-12">
                <img src="<?= $base['photo'] ?>">
                <div class="xlsx">
                    <a href="<?= $base['link'] ?>" download>
                        <img src="img/download.png">
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>


