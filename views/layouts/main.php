<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
$domain = Url::base(true);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/web/favicon.ico" type="image/x-icon">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<header id="top">
    <div class="header-wrap">
        <div class="header-logo"><a href="#top"><img src="/img/logo.png" alt=""></a></div>
        <ul class="header-nav">
            <li><a class="top-link" href="#about">О&nbsp;КОМПАНИИ</a></li>
            <li><a class="top-link" href="#services">УСЛУГИ</a></li>
            <li><a class="top-link" href="#connect">ОБРАТНАЯ&nbsp;СВЯЗЬ</a></li>
            <li><a class="top-link" href="#contacts">КОНТАКТЫ</a></li>
        </ul>
        <div class="tablet-nav">
            <div class="tablet-nav__phone"><a href="tel:+78125653315">+7&nbsp;812&nbsp;565&nbsp;33&nbsp;15</a>
                <p>с 10:00 до 19:00</p></div>
            <div class="tablet-nav__address"><a href="#">Санкт-Петербург</a>
                <p>13 линия В.О., д. 6-8</p></div>
            <div class="tablet-nav__burger"><a id="burger-tablet" href="#"><img src="/img/meat.svg" alt=""></a></div>
        </div>
        <div class="mobile-nav"><a href="tel:+78125653315"><img src="/img/phone-call-white.svg" alt=""> </a><a
                    id="burger" href="#"><img src="/img/meat.svg" alt=""></a></div>
    </div>
    <div class="modal-menu hidden" id="modalHead">
        <div class="modal-menu__body">
            <div class="top-line"></div>
            <div class="menu">
                <ul class="modal-list">
                    <li><a class="modal-link" href="#about"><span>О&nbsp;КОМПАНИИ</span><span
                                    class="menu-arrow">&rarr;</span></a></li>
                    <li><a class="modal-link" href="#services"><span>УСЛУГИ</span><span class="menu-arrow">&rarr;</span></a>
                    </li>
                    <li><a class="modal-link" href="#connect"><span>ОБРАТНАЯ&nbsp;СВЯЗЬ</span><span class="menu-arrow">&rarr;</span></a>
                    </li>
                    <li><a class="modal-link" href="#contacts"><span>КОНТАКТЫ</span><span
                                    class="menu-arrow">&rarr;</span></a></li>
                </ul>
            </div>
        </div>
        <div class="modal-menu__line"><a id="close-modal" href="#"></a></div>
    </div>
</header>
    <main>
        <?= $content ?>
    </main>

<footer>
    <div class="footer-wrap">
        <div class="footer">
            <div class="logo"><a href="#top"><img src="/img/logo.png" alt=""></a></div>
            <ul class="footer-nav">
                <li><a href="#about">О&nbsp;КОМПАНИИ</a></li>
                <li><a href="#services">УСЛУГИ</a></li>
                <li><a href="#connect">ОБРАТНАЯ&nbsp;СВЯЗЬ</a></li>
                <li><a href="#contacts">КОНТАКТЫ</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <h5>ООО &laquo;ИНЖЕНЕРНАЯ КОМПЛЕКТАЦИЯ-
            <wbr>
            КОМПЛЕКСНЫЕ РЕШЕНИЯ&raquo;, 2021
        </h5>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
