<!doctype html>
<html lang="en">
<head>
    <title>АЗРФ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/styleproject.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/jqery.js"></script>
    <link rel="stylesheet" media="all" href="css/animate.css">
    <script src="js/wow.min.js"></script>
    <script>new WOW().init();</script>
    <script src='/js/script.js'></script>
</head>
<?php require 'lib.php'; ?>
<!--<header>-->
<!--    <div class="menu">-->
<!--        <a class="menu-triger" href="#"></a>-->
<!--        <div class="menu-popup">-->
<!--            <a class="menu-close" href="#"></a>-->
<!--            <ul>-->
<!--                <li><a href="#">О компании</a></li>-->
<!--                <li><a href="#">Услуги</a></li>-->
<!--                <li><a href="#">Прайс-лист</a></li>-->
<!--                <li><a href="#">Услуги</a></li>-->
<!--                <li><a href="#">Гарантии</a></li>-->
<!--                <li><a href="#">Контакты</a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!--</header>-->
<div class="content row">
    <div class="top">
        <a href="aboutus.php">
            о АЗРФ
        </a>
        <a href="#map">
            карта
        </a>
        <a href="command.php">
            команда
        </a>
        <a href="galery.php">
            галерея
        </a>
        <?php if (!isset($_SESSION['user_info'])) { ?>

        <?php } else { ?>
            <a href="database.php">
                базы данных
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
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="bac1 carousel-item active">

                <div class="zagolovok">
                    <h1><span style="color: white">АРКТИЧЕСКАЯ ЗОНА</span> <br> РОССИЙСКОЙ <span
                                class="fed">ФЕДЕРАЦИИ</span>
                    </h1>
                </div>
                <div class="database">
                    <h2>
                        КРУПНЕЙШАЯ БАЗА ДАННЫХ
                    </h2>
                </div>
            </div>
            <div class="bac2 carousel-item">
                <div class="zagolovok">
                    <h1>ЕНИСЕЙСКАЯ СИБИРЬ</h1>
                </div>
                <div class="database">
                    <h2>
                        КРУПНЕЙШАЯ БАЗА ДАННЫХ
                    </h2>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="page2">
    <?php if (!isset($_SESSION['user_info'])) { ?>
    <div class="register">
        <a name="form"><h1>ЗАРЕГИСТРИРУЙТЕСЬ ЛИ АВТОРИЗУЙТЕСЬ, ЧТОБЫ ПОЛУЧИТЬ ПОЛНЫЙ ДОСТУП</h1></a>
    </div>
    <div class="regform">
        <div class="col-6">
            <div class="pole d-flex justify-content-left flex-column">
                <div id="register_response"></div>
                <form action="javascript:register()" method="post">
                    <input type="text" placeholder="ФИО" id="fio_register" required>
                    <input type="text" placeholder="Еmail" id="email_register" required>
                    <input type="text" placeholder="+7(___)-___-__-__" id="phone_register" required>
                    <input type="password" placeholder="Пароль" id="password_register" required>
                    <button type="submit" class="btn btn-primary btn-lg">Регистрация</button>
                </form>
            </div>
        </div>
        <div class="col-6">
            <div class="pole d-flex flex-column justify-content-right">
                <div id="authorize_response"></div>
                <form action="javascript:authorize()" method="post">
                    <input type="text" placeholder="Еmail" id="email_auth" required>
                    <input type="password" placeholder="Пароль" id="password_auth" required>
                    <button type="submit" class="btn btn-primary btn-lg">Авторизация</button>
                </form>
            </div>
            <?php } else { ?>
                <div class="register">
                    <h1>Вы успешно авторизованы в систему!</h1>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="aboutus row">
    <div class="col-6">
        <div class="decor">
            <img src="img/Group 6.png">
        </div>
        <h1>НАША МИССИЯ</h1>
        <p class="fadeInDown wow">
            Мы собрали сервис для обеспечения и хранения Базы Данных, чтобы была возможность получить данные по всем
            необходимым запросам. Мы сократили избыточные и дублированные данные и обеспечили целостность базы
            данных.Мы
            выявили понятную модель отчета для пользователя, который не сталкивался с большими базами данных ранее.

        </p>

    </div>
    <div class="picture col-6">
        <img src="img/sea.png" height="642px">
    </div>
</div>
<div class="tab-frame">
    <div class="info">
        <input type="radio" checked name="tab" id="tab1">
        <label for="tab1">Енисейская Сибирь</label>

        <input type="radio" name="tab" id="tab2">
        <label for="tab2">Арктическая зона</label>

        <div class="tab11">
            <div class="aboutarctic">
                <h1> о Енисейской Сибири</h1>
                <p>Енисейская Сибирь – это три региона, расположенные по берегам Енисея: Красноярский край, Республика
                    Хакасия и Республика Тыва. Регионы объединяет не только географическая близость, но и общность
                    истории, культуры, традиций, а также уникальный ландшафт и единственные в своем роде памятники
                    природы, которые являются достоянием всех, кто живет в Енисейской Сибири.
                </p>
            </div>
        </div>
        <div class="tab22">
            <div class="aboutarctic">
                <h1> об Арктической зоне</h1>
                <p>Арктическая зона Российской Федерации (АЗРФ) – это северная оконечность Европейской и Азиатской
                    частей РФ, расположена вдоль побережья морей Северного Ледовитого океана: Баренцева, Карского,
                    Лаптевых, Восточно-Сибирского и Чукотского.
                    Это самая протяженная морская граница России.

                </p>
            </div>
        </div>
    </div>
</div>
<div class="map">
    <h1>СХЕМА РАЗМЕЩЕНИЯ ОПОРНЫХ ЗОН В АРКТИКЕ</h1>
</div>
<div class="map">
    <div class="picture2">
        <img src="img/map (2).png">
    </div>
        <div class="marker1"  data-title="Кольская опорная зона">
        <img src="img/marker.png">
            <p>1</p>
        </div>
    <div class="marker2"  data-title="Архангельская область">
        <img src="img/marker.png">
        <p>2</p>
    </div>
    <div class="marker3"  data-title="Ненецкая опорная зона">
        <img src="img/marker.png">
        <p>3</p>
    </div>
    <div class="marker4"  data-title="Воркутинская опорная зона">
        <img src="img/marker.png">
        <p>4</p>
    </div>
    <div class="marker5"  data-title="Ямало-Ненецкая опорная зона">
        <img src="img/marker.png">
        <p>5</p>
    </div>
    <div class="marker6"  data-title="Таймыро-Туруханская опорная зона">
        <img src="img/marker.png">
        <p>6</p>
    </div>
    <div class="marker7"  data-title="Северо-Якутская опорная зона">
        <img src="img/marker.png">
        <p>7</p>
    </div>
    <div class="marker8"  data-title="Чукотская опорная зона">
        <img src="img/marker.png">
        <p>8</p>
    </div>
</div>
<div class="command">
    <h1><a name="command"> НАША КОМАНДА </a></h1>
    <div class="rowone">
        <div class="people">
            <img src="img/arina.jpg">
            <h3>Должность</h3>
            <p>Описание</p>
        </div>
        <div class="people">
            <img src="img/sofa.jpg">
            <h3>Должность</h3>
            <p>Описание</p>
        </div>
        <div class="people">
            <img src="img/me.jpg">
            <h3>Должность</h3>
            <p>Описание</p>
        </div>
        <div class="people">
            <img src="img/ivan.jpg">
            <h3>Должность</h3>
            <p>Описание</p>
        </div>
        <div class="people">
            <img src="img/bogdan.jpg">
            <h3>Должность</h3>
            <p>Описание</p>
        </div>
        <div class="people">
            <img src="img/kapa.jpg">
            <h3>Должность</h3>
            <p>Описание</p>
        </div>
        <div class="people">
            <img src="img/sofa.jpg">
            <h3>Должность</h3>
            <p>Описание</p>
        </div>
    </div>
</div>
<div>
<?php include 'index.html'; ?>
</div>
<?php include 'footer.php'; ?>
<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        loop: true,
        margin: 10,
        nav: true,

        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
    $('.arrow-swipe').click(function () {
        owl.trigger('next.owl.carousel', [300]);
    })
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>


</body>
</html>