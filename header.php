<!doctype html>
<html lang="en">
<head>
    <title>АЗРФ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styleproject.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
<?php require 'lib.php'; ?>
<div class="strategypage">

    <div class="top">
        <a href="index.php">
            главная
        </a>
        <a href="index.php #aboutus">
            о АЗРФ
        </a>
        <a href="#map">
            карта
        </a>
        <a href="index.php #command">
            команда
        </a>
        <a href="index.php #galery">
            галерея
        </a>
        <?php if (!isset($_SESSION['user_info'])) { ?>

        <?php } else { ?>
            <a href="database.php">
                <span class="fed">
                базы данных
                    </span>
            </a>
        <?php } ?>
        <?php if (!isset($_SESSION['user_info'])) { ?>
            <a href="index.php #form">
                <span class="toform">регистрация/авторизация</span>
            </a>
        <?php } else { ?>
            <a href="#" onclick="javascript:unauthorize()">
                <span class="toform">выйти</span>
            </a>
        <?php } ?>
    </div>
    <div class="zagolovokdb">
        <h1> ДАННЫЕ ПО СТРАТЕГИЯМ </h1>
    </div>
    </div>
</body>
</html>

