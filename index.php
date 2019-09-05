<?php
//Две строчки ниже для защиты форм от спам-ботов
session_start();
$_SESSION['sf_key'] = md5(substr( session_id(), mt_rand(0,10), mt_rand(3,10) ) . time() );

header('Content-Type: text/html; charset=utf-8');
header('X-UA-Compatible: IE=edge');
include 'functions.php';

$title = 'Gobopro';
$desc = 'Демонстрации проекций на любых поверхностях';
$url = SI_CurrentPageURL();
$image = SI_CurrentPageImage();


?>

<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru" class="loading">


<head>

    <!-- Meta information (content-type + mobile mod) -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="format-detection" content="telephone=no">
    <meta name="cmsmagazine" content="2f345f737ed0d95e9259d18f5edc8cd7">
    <meta name="tagline" content="http://hello-brand.ru/">


    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png" type="image/png">
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">


    <!-- CSS styles -->
    <link rel="stylesheet" href="css/jquery.fancybox.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/swiper.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">


    <!-- OGP -->
    <meta property="og:title" content="<?php echo $title; ?>"/>
    <meta property="og:description" content="<?php echo $desc; ?>"/>
    <meta property="og:url" content="<?php echo $url; ?>">
    <meta property="og:image" content="<?php echo $image; ?>">


    <!-- Page title -->
    <title><?php echo $title; ?> | <?php echo $desc; ?></title>


</head>


<body id="main">
<div id="global-wrapper">
    <!--===================================================== Loader -->
        <div class="loader">
            <div class="pseudo-table">
                <div class="pseudo-table-cell align-center">

                    <img src="images/logo.png" alt=" ">

                    <div class="loader-text">
                        Загрузка
                    </div>

                </div>
            </div>
        </div>

    <!--===================================================== Action -->
    <div class="action-block">
        <div class="action-title">
            Акция!
        </div>
        <div class="action-text">
            Бесплатная
            доставка
            по России
        </div>
    </div>

    <!--===================================================== Header -->
    <header class="layout-header">
        <div class="container">
            <div class="row position">

                <!-- Logo -->
                <div class="col-1-3">
                    <a href="#" class="logo si-jump">
                        <img src="images/logo.png" alt=" ">
                    </a>
                </div>

                <!-- Phone block -->
                <div class="col-2-3">
                    <div class="si-phone">
                        <a href="mailto:info@gobopro-x55.ru" class="mail-link hidden-xs">info@gobopro-x55.ru</a>
                        <a href="tel:+74997558887" class="phone-link">8 499 755-888-7</a>
                    </div>
                    <a href="#" class="open-consult-modal consult" data-extra="1"><span>Заказать консультацию</span></a>
                    <div class="nav-block hidden-xs">
                        <div class="show-menu second-screen-block">
                            <span class="icon-sandwich"></span>
                        </div>
                        <div class="nav-item"></div>
                    </div>
                </div>

                <div class="global-nav hidden-xs">
                    <div class="pseudo-table">
                        <div class="pseudo-table-cell nav-overlay">
                            <ul class="nav" id="global-menu">
                                <li><a class="si-jump global-nav-link"  href="#install">Установка</a></li>
                                <li><a class="si-jump global-nav-link" href="#quality">Гарантия</a></li>
                                <li><a class="si-jump global-nav-link" href="#free-second">Доставка</a></li>
                                <li><a class="si-jump global-nav-link" href="#review">Отзывы</a></li>
                                <li><a class="si-jump global-nav-link" href="#sertificate">О компании</a></li>
                            </ul>
                            <a href="tel:+74997558887" class="phone-link">8 499 755-888-7</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--===================================================== section heading -->
    <section class="section-heading" id="heading">
        <div class="container">
            <div class="header-img hidden-xs"></div>

            <h1>
                GoboPro X55 <br>
                за 15 555 руб.
            </h1>

            <div class="sub_title">
                Универсальный мощный<br>
                гобо проектор для уличной<br>
                рекламы
            </div>


            <div class="hidden-xs">
                <a href="#" class="btn open-project-modal gradient-button" data-extra="1">
                    Заказать проектор
                </a>

                <a href="images/procation/procation-1.png" class="procation" data-fancybox="group">
                    Примеры проекций
                </a>
                <a href="images/procation/procation-2.png" data-fancybox="group"></a>
                <a href="images/procation/procation-3.jpg" data-fancybox="group"></a>
                <a href="images/procation/procation-4.png" data-fancybox="group"></a>
                <a href="images/procation/procation-5.jpg" data-fancybox="group"></a>
                <a href="images/procation/procation-6.jpeg" data-fancybox="group"></a>
                <a href="images/procation/procation-7.jpg" data-fancybox="group"></a>
                <a href="images/procation/procation-8.jpeg" data-fancybox="group"></a>
                <a href="images/procation/procation-9.jpg" data-fancybox="group"></a>
                <a href="images/procation/procation-10.png" data-fancybox="group"></a>
                <a href="images/procation/procation-11.png" data-fancybox="group"></a>
                <a href="images/procation/procation-12.png" data-fancybox="group"></a>
                <a href="images/procation/procation-13.jpg" data-fancybox="group"></a>

                <div class="wrapper-desc">
                    <div class="desc-block">
                        <div class="title">
                            до 55 м
                        </div>
                        <span>
                        расстояние
                    </span>
                    </div>
                    <div class="desc-block">
                        <div class="title">
                            55 Вт
                        </div>
                        <span>
                        мощность
                    </span>
                    </div>
                    <div class="desc-block">
                        <div class="title">
                            до -40 °c
                        </div>
                        <span>
                       гарантированно работает
                    </span>
                    </div>
                    <div class="desc-block">
                        <div class="title">
                            1 год

                        </div>
                        <span>
                      гарантии
                    </span>
                    </div>
                </div>
                <p class="last open-characteristic-modal">
                    полные характеристики
                </p>
            </div>

        </div>

        <div class="header-img visible-xs"></div>

        <div class="container margin-top visible-xs">
            <a href="#" class="btn open-project-modal gradient-button" data-extra="1">
                Заказать проектор
            </a>

            <a href="images/procation/procation-1.png" class="procation" data-fancybox="group">
                Примеры проекций
            </a>
            <a href="images/procation/procation-2.png" data-fancybox="group"></a>
            <a href="images/procation/procation-3.jpg" data-fancybox="group"></a>
            <a href="images/procation/procation-4.png" data-fancybox="group"></a>
            <a href="images/procation/procation-5.jpg" data-fancybox="group"></a>
            <a href="images/procation/procation-6.jpeg" data-fancybox="group"></a>
            <a href="images/procation/procation-7.jpg" data-fancybox="group"></a>
            <a href="images/procation/procation-8.jpeg" data-fancybox="group"></a>
            <a href="images/procation/procation-9.jpg" data-fancybox="group"></a>
            <a href="images/procation/procation-10.png" data-fancybox="group"></a>
            <a href="images/procation/procation-11.png" data-fancybox="group"></a>
            <a href="images/procation/procation-12.png" data-fancybox="group"></a>
            <a href="images/procation/procation-13.jpg" data-fancybox="group"></a>

            <div class="wrapper-desc">
                <div class="desc-block">
                    <div class="title">
                        до 55 м
                    </div>
                    <span>
                        расстояние
                    </span>
                </div>
                <div class="desc-block">
                    <div class="title">
                        55 Вт
                    </div>
                    <span>
                        мощность
                    </span>
                </div>
                <div class="desc-block">
                    <div class="title">
                        до -40 °c
                    </div>
                    <span>
                       гарантированно работает
                    </span>
                </div>
                <div class="desc-block">
                    <div class="title">
                        1 год

                    </div>
                    <span>
                      гарантии
                    </span>
                </div>
            </div>
            <p class="last open-characteristic-modal">
                полные характеристики
            </p>
        </div>
    </section>

    <!--===================================================== section sub_header -->
    <section class="section-sub_header" id="sub_header">

        <div class="wrapper-place-slider hidden-xs">

            <!-- Swiper -->
            <div class="swiper-container place-slider">
                <div class="swiper-wrapper">

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="place-wrapper i-1"></div>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="place-wrapper i-2"></div>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="place-wrapper i-3"></div>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="place-wrapper i-4"></div>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="place-wrapper i-5"></div>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="place-wrapper i-6"></div>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="place-wrapper i-7"></div>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="place-wrapper i-8"></div>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="place-wrapper i-9"></div>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="place-wrapper i-10"></div>
                    </div>
                </div>
            </div>

            <!-- Add Arrows -->
            <div class="swiper-button-next place-next">
                <img src="images/left-icon.png" alt=" ">
            </div>
            <div class="swiper-button-prev place-prev">
                <img src="images/right-icon.png" alt=" ">
            </div>
        </div>

        <div class="wrapper-place-slider visible-xs">

            <!-- Swiper -->
            <div class="swiper-container place-mobile-slider">
                <div class="swiper-wrapper">

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="place-wrapper i-1"></div>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="place-wrapper i-2"></div>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="place-wrapper i-3"></div>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="place-wrapper i-4"></div>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="place-wrapper i-5"></div>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="place-wrapper i-6"></div>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="place-wrapper i-7"></div>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="place-wrapper i-8"></div>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="place-wrapper i-9"></div>
                    </div>

                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="place-wrapper i-10"></div>
                    </div>
                </div>
            </div>

            <!-- Add Arrows -->
            <div class="swiper-button-next place-next">
                <img src="images/left-icon.png" alt=" ">
            </div>
            <div class="swiper-button-prev place-prev">
                <img src="images/right-icon.png" alt=" ">
            </div>
        </div>
    </section>

    <!--===================================================== section project -->
    <section class="section-project" id="project">
        <div class="container">
            <img class="line" data-src="images/line.jpg" alt=" ">

            <div class="project-text">
                Проектор GoboPro X55 подходит для 99% способов применения: от привлечения пешеходного трафика и праздников до организации знаков безопасности на производствах. Он лёгок в монтаже и смене изображений, не требует специальной настройки, оборудования или навыков для своей работы.
            </div>
            <div class="wrapper-logo-slider hidden-xs">

                <!-- Swiper -->
                <div class="swiper-container logo-slider">
                    <div class="swiper-wrapper">

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <div class="logo-wrapper i-1">
                                <img data-src="images/logos/slide-logo-1.png" alt=" ">
                            </div>
                        </div>

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <div class="logo-wrapper i-2">
                                <img data-src="images/logos/slide-logo-2.png" alt=" ">
                            </div>
                        </div>

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <div class="logo-wrapper i-3">
                                <img data-src="images/logos/slide-logo-3.png" alt=" ">
                            </div>
                        </div>

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <div class="logo-wrapper i-4">
                                <img data-src="images/logos/slide-logo-4.png" alt=" ">
                            </div>
                        </div>

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <div class="logo-wrapper i-5">
                                <img data-src="images/logos/slide-logo-5.png" alt=" ">
                            </div>
                        </div>

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <div class="logo-wrapper i-6">
                                <img data-src="images/logos/slide-logo-6.png" alt=" ">
                            </div>
                        </div>

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <div class="logo-wrapper i-7">
                                <img data-src="images/logos/slide-logo-7.png" alt=" ">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="swiper-pagination logo-pagination"></div>

                <!-- Add Arrows -->
                <div class="swiper-button-next logo-next">
                    <img src="images/right-icon-sldier.png" alt=" ">
                </div>
                <div class="swiper-button-prev logo-prev">
                    <img src="images/left-icon-sldier.png" alt=" ">
                </div>
            </div>

            <div class="wrapper-logo-slider visible-xs">

                <!-- Swiper -->
                <div class="swiper-container logo-mobile-slider">
                    <div class="swiper-wrapper">

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <div class="logo-wrapper i-1">
                                <img data-src="images/logos/slide-logo-1.png" alt=" ">
                            </div>
                        </div>

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <div class="logo-wrapper i-2">
                                <img data-src="images/logos/slide-logo-2.png" alt=" ">
                            </div>
                        </div>

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <div class="logo-wrapper i-3">
                                <img data-src="images/logos/slide-logo-3.png" alt=" ">
                            </div>
                        </div>

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <div class="logo-wrapper i-4">
                                <img data-src="images/logos/slide-logo-4.png" alt=" ">
                            </div>
                        </div>

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <div class="logo-wrapper i-5">
                                <img data-src="images/logos/slide-logo-5.png" alt=" ">
                            </div>
                        </div>

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <div class="logo-wrapper i-6">
                                <img data-src="images/logos/slide-logo-6.png" alt=" ">
                            </div>
                        </div>

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <div class="logo-wrapper i-7">
                                <img data-src="images/logos/slide-logo-7.png" alt=" ">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="swiper-pagination logo-pagination logo-mobile"></div>

                <!-- Add Arrows -->
                <div class="swiper-button-next logo-next">
                    <img src="images/right-icon-sldier.png" alt=" ">
                </div>
                <div class="swiper-button-prev logo-prev">
                    <img src="images/left-icon-sldier.png" alt=" ">
                </div>
            </div>
        </div>
    </section>

    <!--===================================================== section install -->
    <section class="section-install" id="install">
        <div class="container">
            <h2>
                Легко устанавливать и настраивать
            </h2>

            <div class="install-wrapper">
                <div class="install-block">
                    <div class="number">
                        01/
                    </div>
                    <div class="title">
                        Установка гобо слайда
                    </div>
                    <div class="text">
                        Вставьте слайд с изображением в проектор. Не нужно дополнительно настраивать линзу.
                    </div>
                </div>
                <div class="install-block">
                    <div class="number">
                        02/
                    </div>
                    <div class="title">
                        Монтаж
                    </div>
                    <div class="text">
                        Установите гобо проектор в выбранном месте и подключите в питанию 220 Вольт.
                    </div>
                </div>
                <div class="install-block">
                    <div class="number">
                        03/
                    </div>
                    <div class="title">
                        Чёткая проекция
                    </div>
                    <div class="text">
                        Включите проектор с помощью пульта управления и наслаждайтесь чёткой проекцией.
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-1-2 col-xs-1">
                    <div class="under-block">
                        <div class="under-img">
                            <div class="img-1">
                                <?php include('svg/export.svg'); ?>
                            </div>
                        </div>
                        <div class="under-text">
                            В комплекте есть <span>всё необходимое
                            для самостоятельного монтажа</span>.
                        </div>
                    </div>
                </div>
                <div class="col-1-2 col-xs-1">
                    <div class="under-block">
                        <div class="under-img">
                            <div class="img-2">
                                <?php include('svg/vision.svg'); ?>
                            </div>
                        </div>
                        <div class="under-text">
                            <span>Автоматическая фокусировка
                            изображений</span> от 3 до 5 метров
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1-2 col-xs-1">
                    <div class="under-block">
                        <div class="under-img">
                            <div class="img-3">
                                <?php include('svg/ventilator.svg'); ?>
                            </div>
                        </div>
                        <div class="under-text">
                            В проектор встроен <span>вентилятор
                            для эффективного охлаждения</span>.
                        </div>
                    </div>
                </div>
                <div class="col-1-2 col-xs-1">
                    <div class="under-block margin-zero">
                        <div class="under-img">
                            <div class="img-4">
                                <?php include('svg/rotate.svg'); ?>
                            </div>
                        </div>
                        <div class="under-text">
                            <span>Изменяйте направление вращения</span>
                            проекции с пульта управления.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--===================================================== section video -->
    <section class="section-video" id="video">
        <div class="container">
            <h2>
                Видео-инструкция по установке
            </h2>
            <div class="tabs-block video-block align-center" data-tab-block="t-price">

                <ul class="nav nav-tabs">
                    <li class="tab-link active" data-tab="t-price-1" data-tab-block="t-price">
                        Как установить?
                    </li>

                    <li class="tab-link" data-tab="t-price-2" data-tab-block="t-price">
                        Как настроить?
                    </li>

                    <li class="tab-link" data-tab="t-price-3" data-tab-block="t-price">
                        Как изменить изображение?
                    </li>
                </ul>

                <div class="tabs-content-container">

                    <!-- ================================================ price tab 1-->
                    <div class="tab-content active" data-tab="t-price-1" data-tab-block="t-price">
                        <a href="https://www.youtube.com/watch?v=XOIfBhSmoOc&amp;autoplay=1" class="review-item"
                           data-fancybox="review">

                            <div class="play-block">
                                <div class="play-icon">
                                    <?php include('svg/play.svg'); ?>
                                </div>
                                <div class="text">
                                    Смотреть видео
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- ================================================ price tab 2-->
                    <div class="tab-content" data-tab="t-price-2" data-tab-block="t-price">
                        <a href="https://www.youtube.com/watch?v=XOIfBhSmoOc&amp;autoplay=1" class="review-item"
                           data-fancybox="review">
                            <div class="play-block">
                                <div class="play-icon">
                                    <?php include('svg/play.svg'); ?>
                                </div>
                                <div class="text">
                                    Смотреть видео
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- ================================================ price tab 3-->
                    <div class="tab-content" data-tab="t-price-3" data-tab-block="t-price">
                        <a href="https://www.youtube.com/watch?v=XOIfBhSmoOc&amp;autoplay=1" class="review-item"
                           data-fancybox="review">
                            <div class="play-block">
                                <div class="play-icon">
                                    <?php include('svg/play.svg'); ?>
                                </div>
                                <div class="text">
                                    Смотреть видео
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--===================================================== section what -->
    <section class="section-what" id="what">
        <div class="container">

            <h2>
                Что такое гобо слайд?
            </h2>

            <p>
                Для работы проектора и создания чёткой проекции Вам понадобится стеклянный слайд с напечатанным на нём изображением. Мы изготовим его за 1 день.
            </p>

            <div class="wrapper-what-slider">

                <!-- Swiper -->
                <div class="swiper-container what-slider">
                    <div class="swiper-wrapper">

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <div class="what-wrapper">
                                <img data-src="images/slide-img.png" alt=" ">
                            </div>
                        </div>

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <div class="what-wrapper">
                                <img data-src="images/slide-img.png" alt=" ">
                            </div>
                        </div>

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <div class="what-wrapper">
                                <img data-src="images/slide-img.png" alt=" ">
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Add Arrows -->
                <div class="swiper-button-next what-next">
                    <?php include('svg/right.svg'); ?>
                </div>
                <div class="swiper-button-prev what-prev">
                    <?php include('svg/left.svg'); ?>
                </div>
            </div>

            <div class="row">
                <div class="col-1-2 col-xs-1">
                    <div class="what-block">
                        <div class="what-img i-1">
                            <?php include('svg/history-button.svg'); ?>
                        </div>
                        <div class="what-text">
                            <div class="title">
                                Долговечность
                            </div>
                            <div class="text">
                                Мы используем стёкла с качественным цветным напылением для работы в условиях интенсивного нагрева от мощных ламп. Гарантируем насыщенность цветов логотипа на протяжении всего срока службы проектора.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1-2 col-xs-1">
                    <div class="what-block">
                        <div class="what-img i-1">
                            <?php include('svg/rgb.svg'); ?>
                        </div>
                        <div class="what-text">
                            <div class="title">
                                Любые цвета
                            </div>
                            <div class="text">
                                Мы подберём оптимальное сочетание цветов для привлечения внимания к деталям с учётом особенностей световой проекции. Мало цветов? Изготовим полноцветный гобо-слайд любого цвета и сложности
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1-2 col-xs-1">
                    <div class="what-block">
                        <div class="what-img i-1">
                            <?php include('svg/drag.svg'); ?>
                        </div>
                        <div class="what-text">
                            <div class="title">
                                Детализация
                            </div>
                            <div class="text">
                                Наши опытные специалисты произведут макет с Вашим изображением на высокоточном оборудовании, которое позволяет отразить Вашу задумку до мельчайших деталей.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1-2 col-xs-1">
                    <div class="what-block">
                        <div class="what-img i-1">
                            <?php include('svg/spotlight.svg'); ?>
                        </div>
                        <div class="what-text">
                            <div class="title">
                                Без ограничений<br>
                                по тёмным областям
                            </div>
                            <div class="text">
                                Стандартная форма проекции -  круг, но иногда нужна другая форма. Наши производственные возможности позволяют создать проекцию любой формы: ромбы, звёзды, символы, пиктограмы и т.д. - всё это доступно Вам.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="button-block">
                <div class="present-block">
                    <div class="present-img">
                        <?php include('svg/giftbox.svg'); ?>
                    </div>
                    <div class="present-text">
                        Одноцветный слайд в подарок
                        <span>Дополнительные цвета: 1500 руб. за цвет.</span>
                    </div>
                </div>
                <a href="#" class="right">
                    Требования к макету
                </a>
            </div>
        </div>
    </section>


    <!--===================================================== section free -->
    <section class="section-free" id="free">
        <div class="container">
            <div class="row">
                <div class="col-2-3 col-xs-1">
                    <h3>
                        Бесплатно подготовим для вас<br> визуализацию будущей проекции<br> под ваш макет.
                    </h3>
                </div>
                <div class="col-1-3 col-xs-1">
                    <a href="#" class="btn open-project-modal border-gradient" data-extra="2">
                        <span>Заказать проектор</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--===================================================== section quality -->
    <section class="section-quality" id="quality">
        <div class="container">

            <div class="title visible-xs">
                Гарантируем качество
            </div>
            <div class="row">
                <div class="col-1-3 col-xs-1">
                    <div class="years">
                        1 год
                    </div>
                </div>
                <div class="col-2-3 col-xs-1">
                    <div class="title hidden-xs">
                        Гарантируем качество
                    </div>

                    <div class="sub_title">
                        гарантии
                    </div>
                    <div class="line"></div>
                    <div class="text">
                        Гарантия сохраняется при самостоятельном монтаже. При наступлении гарантийного случая
                    </div>
                    <div class="text">
                        мы бесплатно устраним все неполадки и вернём проектор вам.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--===================================================== section free -->
    <section class="section-free" id="free-second">
        <div class="container">
            <div class="row">
                <div class="col-2-3 col-xs-1">
                    <h3 class="second">
                        Мы проверяем работоспособность и<br>
                        качество проекции каждого проектора.<br>
                        По итогам проверки мы сделаем<br>
                        фото-отчёт и пришлём его вам.
                    </h3>
                </div>
                <div class="col-1-3 col-xs-1">
                    <a href="#" class="btn open-project-modal border-gradient" data-extra="3">
                        <span>Заказать проектор</span>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!--===================================================== section sertificate -->
    <section class="section-sertificate" id="sertificate">
        <div class="container">

            <h3>
                Сертификаты
            </h3>

            <div class="row hidden-xs">
                <div class="col-1-2">
                    <a class="img-sertificate" href="images/sertificate/sertificate-1.jpg" data-fancybox="sertificate">
                        <img data-src="images/sertificate/sertificate-1.jpg" alt=" ">
                    </a>
                </div>
                <div class="col-1-2">
                    <a class="img-sertificate" href="images/sertificate/sertificate-2.jpg" data-fancybox="sertificate">
                        <img data-src="images/sertificate/sertificate-2.jpg" alt=" ">
                    </a>
                </div>

            </div>

            <div class="wrapper-sertificate-slider visible-xs">

                <!-- Swiper -->
                <div class="swiper-container sertificate-slider">
                    <div class="swiper-wrapper">

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <a class="img-sertificate" href="images/sertificate/sertificate-1.jpg" data-fancybox="sertificate1">
                                <img data-src="images/sertificate/sertificate-1.jpg" alt=" ">
                            </a>
                        </div>

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <a class="img-sertificate" href="images/sertificate/sertificate-2.jpg" data-fancybox="sertificate1">
                                <img data-src="images/sertificate/sertificate-2.jpg" alt=" ">
                            </a>
                        </div>

                    </div>
                </div>

                <!-- Add Arrows -->
                <div class="swiper-button-next sertificate-next">
                    <img src="images/left-icon.png" alt=" ">
                </div>
                <div class="swiper-button-prev sertificate-prev">
                    <img src="images/right-icon.png" alt=" ">
                </div>
            </div>

            <img src="images/sticker.png" alt=" " class="sticker">
        </div>
    </section>

    <!--===================================================== section compare -->
    <section class="section-compare" id="compare">
        <h2>
            Сравните наш проектор и обычный
        </h2>
        <a href="https://www.youtube.com/watch?v=XOIfBhSmoOc&amp;autoplay=1" class="review-item"
           data-fancybox="review">

            <div class="play-block">
                <div class="play-icon">
                    <?php include('svg/play.svg'); ?>
                </div>
                <div class="text">
                    Смотреть видео
                </div>
            </div>
        </a>
    </section>

    <!--===================================================== section question -->
    <section class="section-question" id="question">
        <div class="container">

            <h2>
                Частые вопросы
            </h2>

            <div class="questions-block">

                <!-- ========================= single partners -->
                <div class="question-item">
                    <div class="question">
                        <div class="question-arrow-holder plus">
                            +
                        </div>
                        <div class="question-arrow-holder minus">
                            -
                        </div>
                        <div class="question-text">
                            Изменяется ли проекция от высоты монтажа?
                        </div>

                    </div>

                    <div class="answer">
                        <p>
                            Размер проекции определяет расстояние от проектора до плоскости. Для GoboPro X55 каждый дополнительный метр расстояния увеличивает максимальный диаметр изображения на 40 см.
                        </p>
                    </div>
                </div>

                <!-- ========================= single partners -->
                <div class="question-item">
                    <div class="question">
                        <div class="question-arrow-holder plus">
                            +
                        </div>
                        <div class="question-arrow-holder minus">
                            -
                        </div>
                        <div class="question-text">
                            Зависит ли сила свечения от мощности?
                        </div>

                    </div>

                    <div class="answer">
                        <p>
                            Да, сила света зависит от мощности проектора, но не только. Ещё она зависит от угла, под которым свет распространяется в направлении проекции. В GoboPro X55 мы совместили оптимальное соотношение этих показателей для эффективного использования проектора в большинстве случаев.
                        </p>
                    </div>
                </div>

                <!-- ========================= single partners -->
                <div class="question-item">
                    <div class="question">
                        <div class="question-arrow-holder plus">
                            +
                        </div>
                        <div class="question-arrow-holder minus">
                            -
                        </div>
                        <div class="question-text">
                            Что будет, если проектор разобьётся в процессе доставки?
                        </div>

                    </div>

                    <div class="answer">
                        <p>
                            Упаковка GoboPro X55 надежно защищает проектор при транспортировке. Риск повреждения минимален. Но мы предусмотрели решение для такой нештатной ситуации: Вы получите новый проектор, а разбирательство с перевозчиком мы возьмём на себя.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--===================================================== section review -->
    <section class="section-review" id="review">
        <div class="container">
            <h2>
                Отзывы
            </h2>
            <div class="row hidden-xs">
                <div class="col-1-3">
                    <a class="img-sertificate" href="images/sertificate.png" data-fancybox="product">
                        <img data-src="images/sertificate.png" alt=" ">
                    </a>
                </div>
                <div class="col-1-3">
                    <a class="img-sertificate" href="images/sertificate.png" data-fancybox="product">
                        <img data-src="images/sertificate.png" alt=" ">
                    </a>
                </div>
                <div class="col-1-3">
                    <a class="img-sertificate" href="images/sertificate.png" data-fancybox="product">
                        <img data-src="images/sertificate.png" alt=" ">
                    </a>
                </div>
            </div>

            <div class="wrapper-review-slider visible-xs">

                <!-- Swiper -->
                <div class="swiper-container review-slider">
                    <div class="swiper-wrapper">

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <a class="img-sertificate i-2" href="images/sertificate.png" data-fancybox="product">
                                <img data-src="images/sertificate.png" alt=" ">
                            </a>
                        </div>

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <a class="img-sertificate i-2" href="images/sertificate.png" data-fancybox="product">
                                <img data-src="images/sertificate.png" alt=" ">
                            </a>
                        </div>

                    </div>
                </div>

                <!-- Add Arrows -->
                <div class="swiper-button-next review-next">
                    <img src="images/left-icon.png" alt=" ">
                </div>
                <div class="swiper-button-prev review-prev">
                    <img src="images/right-icon.png" alt=" ">
                </div>
            </div>
        </div>
    </section>

    <!--===================================================== section form-consult -->
    <section class="section-form form-consult" id="form-consult">
        <div class="container">

            <div class="after-block"></div>

            <h2>
                Закажите консультацию
                специалиста
            </h2>

            <p>
                Ответим за 15 минут
            </p>

            <form method="post" class="send-form" autocomplete="off">
                <div class="row">
                    <div class="col-1-3 col-xs-1">
                        <input type="text" name="client_name" class="client-name" placeholder="Ваше имя*">
                    </div>

                    <div class="col-1-3 col-xs-1">
                        <input type="tel" name="client_phone" class="client-phone" placeholder="Ваш телефон*">
                    </div>

                    <div class="col-1-3 col-xs-1">
                        <div class="btn-holder">
                            <button type="submit" class="btn border-gradient"><span>Заказать консультацию <div class="agree">Я принимаю условия передачи информации</div></span> </button>
                            <!--<div class="g-recaptcha" id="g-recaptcha"></div>-->
                        </div>
                    </div>
                </div>

                <input type="hidden" name="send_type" class="send-type" value="3">
                <input type="hidden" name="send_extra" class="send-extra" value="1">
				<input type="hidden" name="key" value="<?php echo $_SESSION['sf_key'] ?>">
				<?php //Поле выше для защиты формы от спам-ботов ?>

            </form>

        </div>
    </section>

    <!--===================================================== Footer -->
    <footer class="layout-footer">
        <div class="container">
            <div class="row">

                <!-- company info block -->
                <div class="col-1-2">
                   <div class="logo-block">
                       <a href="#" class="logo">
                           <img src="images/logo.png" alt=" ">
                       </a>
                       <div class="logo-text hidden-xs">
                           <div class="title">
                               ООО "ГобоПро"
                           </div>
                           <div class="text">
                               Россия, Москва, 1-й Варшавский проезд, д. 2, стр. 6
                           </div>
                           <div class="text">
                               ОГРН: 1234567890123
                           </div>
                       </div>
                   </div>
                </div>

                <!-- Phone block -->
                <div class="col-1-2 align-right">
                    <div class="si-phone">
                        <a href="tel:+74997558887" class="phone-link dark">8 499 755 888 7</a>
                        <a href="#" class="btn open-consult-modal consult" data-extra="2"><span>Заказать консультацию</span></a>
                    </div>
                    <a href="mailto:info@gobopro-x55.ru" class="mail-link hidden-xs dark">info@gobopro-x55.ru</a>
                    <a href="#" class="data open-text-modal" data-id="1">
                        Условия персональных данных
                    </a>
                </div>
            </div>

            <div class="copyright-holder row">
                <div class="col-1-2">

                </div>


            </div>
        </div>
    </footer>

    <!--===================================================== Hello, brand! -->
    <section class="section-brand">
        <a href="http://hello-brand.ru/" class="brand" target="_blank" rel="nofollow noopener">
            <span>©2019. Все права защищены.</span> Оформлено и разработано  "Hello, brand!"
        </a>
    </section>


    <!--===================================================== Modals -->
    <!-- Overlay(s) -->
    <div class="si-overlay"></div>
    <div class="si-overlay-2"></div>

    <div class="nav-block visible-xs">
        <div class="show-mobile-menu second-screen-block">
            <span class="icon-sandwich"></span>
            <span class="text">Закрыть</span>
        </div>
        <div class="nav-item"></div>
    </div>

    <div class="global-mobile-nav">
        <div class="pseudo-table">
            <div class="pseudo-table-cell nav-overlay">
                <ul class="nav" id="global-menu">
                    <li><a class="si-jump global-nav-link"  href="#install">Установка</a></li>
                    <li><a class="si-jump global-nav-link" href="#quality">Гарантия</a></li>
                    <li><a class="si-jump global-nav-link" href="#free-second">Доставка</a></li>
                    <li><a class="si-jump global-nav-link" href="#review">Отзывы</a></li>
                    <li><a class="si-jump global-nav-link" href="#sertificate">О компании</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Wrappers -->
    <div class="si-modals-wrapper-2"></div>

    <div class="si-modals-wrapper">

        <!--============================================== success modal -->
        <div class="si-success-modal si-success-modal-1">
            <a href="#" class="si-close"></a>

            <div class="modal-container dark-block align-center">

                <div class="si-success-modal-title">
                    Спасибо!
                </div>

                <div class="success-time">
                    Ваша заявка отправлена
                </div>

                <div class="success-line"></div>

                <p class="success-last">
                    Наш менеджер свяжется с Вами
                    в ближайшее время.
                </p>

            </div>
        </div>

        <!--============================================== characteristic modal -->
        <div class="si-modal characteristic-modal">
            <a href="#" class="si-close"></a>

            <div class="modal-container">

                <div class="modal-form-title">
                    Полные характеристики
                </div>

<!--                    <div class="row">-->
                        <div class="left">
                            <img data-src="images/characteristic-img-1.png" alt=" " class="characteristic-img">
                            <div class="characteristic-block i-1">
                                <div class="characteristic-icon">
                                    <img src="images/characteristic/characteristic-icon-1.png" alt=" ">
                                </div>
                                <div class="characteristic-text">
                                    Работает до -40 °C
                                </div>
                            </div>
                            <div class="characteristic-block i-2">
                                <div class="characteristic-icon">
                                    <img src="images/characteristic/characteristic-icon-2.png" alt=" ">
                                </div>
                                <div class="characteristic-text">
                                    Защита от дождя и снега
                                </div>
                            </div>
                            <div class="characteristic-block i-3">
                                <div class="characteristic-icon">
                                    <img src="images/characteristic/characteristic-icon-3.png" alt=" ">
                                </div>
                                <div class="characteristic-text">
                                    Оригинальный светодиод OSRAM
                                </div>
                            </div>
                            <div class="characteristic-block i-4">
                                <div class="characteristic-icon">
                                    <img src="images/characteristic/characteristic-icon-4.png" alt=" ">
                                </div>
                                <div class="characteristic-text">
                                    Высокий световой поток 8525 Лм
                                </div>
                            </div>
                            <div class="characteristic-block i-5">
                                <div class="characteristic-icon">
                                    <img src="images/characteristic/characteristic-icon-5.png" alt=" ">
                                </div>
                                <div class="characteristic-text">
                                    Просветленная оптика
                                </div>
                            </div>
                            <div class="characteristic-block i-6">
                                <div class="characteristic-icon">
                                    <img src="images/characteristic/characteristic-icon-6.png" alt=" ">
                                </div>
                                <div class="characteristic-text">
                                    Вращение изоброжения в разные
                                    стороны
                                </div>
                            </div>
                        </div>
                        <div class="right">
                            <img data-src="images/characteristic-img-2.png" alt=" " class="characteristic-img img-1">
                            <div class="characteristic-block i-7">
                                <div class="characteristic-icon">
                                    <img src="images/characteristic/characteristic-icon-7.png" alt=" ">
                                </div>
                                <div class="characteristic-text">
                                    Простой монтаж
                                </div>
                            </div>
                            <div class="characteristic-block i-8">
                                <div class="characteristic-icon">
                                    <img src="images/characteristic/characteristic-icon-8.png" alt=" ">
                                </div>
                                <div class="characteristic-text">
                                    Гарантия 1 год
                                </div>
                            </div>
                            <div class="characteristic-block i-9">
                                <div class="characteristic-icon">
                                    <img src="images/characteristic/characteristic-icon-9.png" alt=" ">
                                </div>
                                <div class="characteristic-text">
                                    Честная мощность 55 Вт
                                </div>
                            </div>
                            <div class="characteristic-block i-10">
                                <div class="characteristic-icon">
                                    <img src="images/characteristic/characteristic-icon-10.png" alt=" ">
                                </div>
                                <div class="characteristic-text">
                                    Активное охлаждение
                                </div>
                            </div>
                            <div class="characteristic-block i-11">
                                <div class="characteristic-icon">
                                    <img src="images/characteristic/characteristic-icon-11.png" alt=" ">
                                </div>
                                <div class="characteristic-text">
                                    Устойчив к перепадам напряжения
                                    100-240В
                                </div>
                            </div>
                        </div>
<!--                    </div>-->

            </div>
        </div>

        <!--============================================== phone modal -->
        <div class="si-modal consult-modal">
            <a href="#" class="si-close"></a>

            <div class="modal-container dark-block align-center">

                <div class="modal-form-title">
                    Закажите консультацию
                </div>

                <div class="modal-time">
                    Оставьте заявку и наш менеджер свяжется с Вами в ближайшее время
                </div>

                <form method="post" class="send-form" autocomplete="off">
                    <div class="row">

                        <input type="text" name="client_name" class="client-name" placeholder="Ваше имя*">

                        <input type="tel" name="client_phone" class="client-phone" placeholder="Ваш телефон*">

                    </div>

                    <input type="hidden" name="send_type" class="send-type" value="1">
                    <input type="hidden" name="send_extra" class="send-extra" value="1">
                    <input type="hidden" name="key" value="<?php echo $_SESSION['sf_key'] ?>">
                    <?php //Поле выше для защиты формы от спам-ботов ?>

                    <div class="btn-holder">
                        <button type="submit" class="btn border-gradient">Заказать консультацию <div class="agree">Я принимаю условия передачи информации</div></button>
                        <!--<div class="g-recaptcha" id="g-recaptcha"></div>-->
                    </div>

                </form>

            </div>
        </div>

        <!--============================================== phone modal -->
        <div class="si-modal project-modal">
            <a href="#" class="si-close"></a>

            <div class="modal-container dark-block align-center">

                <div class="modal-form-title">
                    Закажите проектор
                </div>

                <div class="modal-time">
                    Оставьте заявку и наш менеджер свяжется с Вами в ближайшее время
                </div>

                <form method="post" class="send-form" autocomplete="off">
                    <div class="row">

                        <input type="text" name="client_name" class="client-name" placeholder="Ваше имя*">

                        <input type="tel" name="client_phone" class="client-phone" placeholder="Ваш телефон*">

                        <input type="email" name="client_mail" class="client-mail" placeholder="Ваш email*">

                        <input type="text" name="client_address" class="client-address" placeholder="Ваше адрес*">

                    </div>

                    <input type="hidden" name="send_type" class="send-type" value="2">
                    <input type="hidden" name="send_extra" class="send-extra" value="1">
                    <input type="hidden" name="key" value="<?php echo $_SESSION['sf_key'] ?>">
                    <?php //Поле выше для защиты формы от спам-ботов ?>

                    <div class="btn-holder">
                        <button type="submit" class="btn border-gradient">Заказать проектор <div class="agree">Я принимаю условия передачи информации</div></button>
                        <!--<div class="g-recaptcha" id="g-recaptcha"></div>-->
                    </div>

                </form>

            </div>
        </div>

        <!--============================================== text modal 1 -->
        <div class="si-modal text-modal text-modal-1">
            <a href="#" class="si-close"></a>

            <div class="modal-container">

                <div class="modal-form-title align-center">
                    Согласие на обработку персональных данных
                </div>

                <div class="modal-text-block">
                    <p>
                        Настоящим в&nbsp;соответствии с&nbsp;Федеральным законом №152&#8209;ФЗ
                        «О&nbsp;персональных данных» от&nbsp;27.07.2006 года свободно, своей волей и&nbsp;в&nbsp;своём
                        интересе выражаю своё безусловное согласие на&nbsp;обработку моих персональных данных
                        НАЗВАНИЕ КОМПАНИИ,
                        зарегистрированным в&nbsp;соответствии с&nbsp;законодательством&nbsp;РФ по&nbsp;адресу:
                        АДРЕС КОМПАНИИ
                        (далее по&nbsp;тексту&nbsp;- Оператор).
                    </p>

                    <p>
                        Персональные данные&nbsp;- любая информация, относящаяся к&nbsp;определённому
                        или&nbsp;определяемому на&nbsp;основании такой информации физическому лицу.
                    </p>

                    <p>
                        Настоящее Согласие выдано мною на&nbsp;обработку следующих персональных данных:
                    </p>

                    <ul class="marked">
                        <li>
                            Имя;
                        </li>
                        <li>
                            Телефон;
                        </li>
                        <li>
                            E-mail;
                        </li>
                        <li>
                            Комментарий.
                        </li>
                    </ul>

                    <p>
                        Согласие дано Оператору для&nbsp;совершения следующих действий с&nbsp;моими персональными
                        данными с&nbsp;использованием средств автоматизации и/или&nbsp;без&nbsp;использования таких
                        средств: сбор, систематизация, накопление, хранение, уточнение (обновление, изменение),
                        использование, обезличивание, передача третьим лицам для&nbsp;указанных ниже целей,
                        а&nbsp;также осуществление любых иных действий, предусмотренных действующим
                        законодательством&nbsp;РФ, как&nbsp;неавтоматизированными, так&nbsp;и&nbsp;автоматизированными
                        способами.
                    </p>

                    <p>
                        Данное согласие даётся Оператору и&nbsp;третьему лицу(&#8209;ам)
                        ТРЕТЬИ ЛИЦА
                        для&nbsp;обработки моих персональных данных в&nbsp;следующих целях:
                    </p>

                    <ul class="marked">
                        <li>
                            предоставление мне услуг/работ;
                        </li>
                        <li>
                            направление в&nbsp;мой адрес уведомлений, касающихся предоставляемых услуг/работ;
                        </li>
                        <li>
                            подготовка и&nbsp;направление ответов/коммерческих предложений на&nbsp;мои запросы;
                        </li>
                        <li>
                            направление в&nbsp;мой адрес информации, в&nbsp;том числе рекламной,
                            о&nbsp;мероприятиях/товарах/услугах/работах Оператора.
                        </li>
                    </ul>

                    <p>
                        Настоящее согласие действует до&nbsp;момента его&nbsp;отзыва путём направления соответствующего
                        уведомления на&nbsp;электронный адрес
                        <a href="mailto:">ЕМЕЙЛ</a>.
                        В&nbsp;случае отзыва мною согласия на&nbsp;обработку персональных данных Оператор вправе
                        продолжить обработку персональных данных без&nbsp;моего согласия при&nbsp;наличии оснований,
                        указанных в&nbsp;пунктах 2&#8209;11 части&nbsp;1 статьи&nbsp;6, части&nbsp;2 статьи&nbsp;10
                        и&nbsp;части&nbsp;2 статьи&nbsp;11 Федерального закона №152&#8209;ФЗ
                        «О&nbsp;персональных данных» от&nbsp;26.06.2006&nbsp;г.
                    </p>
                </div>

            </div>
        </div>

    </div>

</div>

<script>
    var template_url = '<?php echo SI_RootURL(); ?>';
    //    var template_url = '<?php //echo SI_CurrentPageURL(); ?>//';
</script>


<!-- Inlcude jQuery framework + jQuery migrate -->
<script src="js/jquery-3.4.0.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>

<!-- IE -->
<!--[if IE]>
<script src="js/html5shiv.js"></script> <![endif]-->

<!-- JS Scripts -->
<script src="js/plugins-all.js"></script>
<script src="js/jquery.easing.js"></script>
<script src="js/smooth-scroll-1.4.9.min.js"></script>

<!-- Google Recaptcha -->
<!--<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>-->
<!--<script type="text/javascript">-->
<!--    var recaptcha1,-->
<!--        recaptcha2,-->
<!--        recaptcha3;-->
<!--    var onloadCallback = function () {-->
<!--        recaptcha = grecaptcha.render('g-recaptcha', {-->
<!--            'sitekey': ''-->
<!--        });-->
<!--    };-->
<!--</script>-->

<!-- custom scripts -->
<script src="js/main.js"></script>
<script src="js/share.js"></script>

<?php include('si-engine.php'); ?>

<!--

Digital-agency "Hello, brand!" - http://hello-brand.ru/
Дата создания: 16.03.2016
Версия: 1.0
