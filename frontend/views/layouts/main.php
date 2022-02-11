<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <?php
    $this->registerJs("
        addEventListener(\"load\", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    ");
    ?>
    <!-- online-fonts -->
    <!-- logo -->
    <link href="//fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
    <!-- titles -->
    <link href="//fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800,800i"
          rel="stylesheet">
    <!-- body -->
    <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
          rel="stylesheet">
    <!-- //online-fonts -->

    <?php $this->head() ?>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<?php $this->beginBody() ?>

<div id="home">

    <!-- navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="main-nav">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Chronicle</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1>
                        <a class="navbar-brand" href="site/index">Chronicle</a>
                    </h1>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse nav-right">
                    <ul class="nav navbar-nav navbar-left cl-effect-15">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden">
                            <a class="page-scroll" href="#page-top"></a>
                        </li>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="about.php">about us</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">shop
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="shop.php">product catalog</a>
                                </li>
                                <li>
                                    <a href="single_product.php">single product</a>
                                </li>
                                <li>
                                    <a href="checkout.php">checkout</a>
                                </li>
                                <li>
                                    <a href="payment.php">Payment</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">footers
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="footer.php">Default</a>
                                </li>
                                <li>
                                    <a href="footer1.php">variant1</a>
                                </li>
                                <li>
                                    <a href="footer2.php">variant2</a>
                                </li>
                                <li>
                                    <a href="footer3.php">variant3</a>
                                </li>
                                <li>
                                    <a href="footer4.php">variant4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.php">Contact us</a>
                        </li>
                        <li>
                            <a href="login.php" title="SignIn & SignUp">
                                <span class="fa fa-user nav-icon" aria-hidden="true"></span>
                            </a>
                        </li>

                    </ul>
                    <!-- search-bar -->
                    <div class="search-bar-agileits">
                        <div class="cd-main-header">
                            <ul class="cd-header-buttons">
                                <li>
                                    <a class="cd-search-trigger" href="#cd-search">
                                        <span></span>
                                    </a>
                                </li>
                            </ul>
                            <!-- cd-header-buttons -->
                        </div>
                        <div id="cd-search" class="cd-search">
                            <form action="#" method="post">
                                <input name="Search" type="search" placeholder="Type and Hit Enter...">
                            </form>
                        </div>
                    </div>
                    <!-- //search-bar ends here -->
                    <!-- shopping cart -->
                    <div class="cart-mainf">
                        <div class="chrcart chrcart2 cart cart box_1">
                            <form action="#" method="post" class="last">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="display" value="1">
                                <button class="top_chr_cart" type="submit" name="submit" value="">
                                    <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- //shopping cart ends here -->
                </div>
                <!-- /.navbar-collapse -->
                <div class="clearfix"></div>
            </div>
            <!-- /.container -->
        </div>
    </nav>
    <!-- //navbar ends here -->

    <?= $content ?>

    <!-- footer-layouts -->
    <div class="addon-sec section">
        <div class="container">
            <h4 class="rad-txt">
                <span class="abtxt1">footer</span>
                <span class="abtext">layouts</span>
            </h4>
            <div class="col-md-3 col-sm-3 col-xs-3 fimg1">
                <a href="footer1.php">
                    <img src="images/f1.png" class="img-responsive" alt="chronicle-image">
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 fimg1">
                <a href="footer2.php">
                    <img src="images/f2.png" class="img-responsive" alt="chronicle-image">
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 fimg1">
                <a href="footer3.php">
                    <img src="images/f3.png" class="img-responsive" alt="chronicle-image">
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 fimg1">
                <a href="footer4.php">
                    <img src="images/f4.png" class="img-responsive" alt="chronicle-image">
                </a>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //footer-layouts -->
    <!-- footer -->
    <div class="footer-bottom section">
        <div class="container">
            <!-- newsletter -->
            <div class="subscribe-main section-w3layouts text-center">
                <h4 class="rad-txt">
                    <span class="abtxt1">keep yourself</span>
                    <span class="abtext">updated</span>
                </h4>
                <h5>subscribe to our newsletter to stay up-to-date with our projects.</h5>
                <div class="subscribe-form">
                    <form action="#" method="post" class="subscribe_form">
                        <div class="email-news">
                            <input type="email" placeholder="Email" required="">
                        </div>
                        <div class="sub-news">
                            <input type="submit" value="subscribe">
                        </div>
                    </form>
                    <div class="clearfix"> </div>
                </div>
                <p>We respect your privacy.No spam ever!</p>
            </div>
            <!-- //newsletter ends here -->
            <!-- footer grids-->
            <div class="footer-cpy">
                <!-- footer-grid1 -->
                <div class="col-md-3 col-sm-6 footer-logo">
                    <h3>
                        <a href="index.php">Chronicle</a>
                    </h3>
                    <h4>about us</h4>
                    <p>Vallis Molestie Arcu Morbi Dapibus Suscipit Ante Sit Efficitur Eu estie Arcu Mor Anestie Ate Vesti.</p>
                </div>
                <!-- //footer-grid1 -->
                <!-- footer-grid2 -->
                <div class="col-md-3 col-sm-6 footer-nav text-center">
                    <h4>navigation</h4>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="about.php">About us</a>
                        </li>
                        <li>
                            <a href="shop.php">shop</a>
                        </li>
                        <li>
                            <a href="contact.php">contact us</a>
                        </li>
                    </ul>
                </div>
                <!-- //footer-grid2 -->
                <!-- footer-grid3 -->
                <div class="col-md-3 col-sm-6 blog-footer">
                    <h4>latest from blog</h4>
                    <div class="blog1">
                        <div class="col-md-3 col-sm-3 col-xs-2 bl1">
                            <a href="#">
                                <img src="images/b1.jpg" alt="" class="img-responsive" />
                            </a>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-10 bl2">
                            <a href="#">Dapibus Suscipit Ante Sit by instagram</a>
                            <p>February 15, 2018</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="blog1">
                        <div class="col-md-3 col-sm-3 col-xs-2 bl1">
                            <a href="#">
                                <img src="images/b2.jpg" alt="" class="img-responsive" />
                            </a>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-10 bl2">
                            <a href="#">Dapibus Suscipit Ante Sit by instagram</a>
                            <p>February 20, 2018</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- //footer-grid3 -->
                <!-- footer-grid4 -->
                <div class="col-md-3 col-sm-6 contact-foot text-right">
                    <h4>contact us</h4>
                    <ul>
                        <li>
                            <span class="fa fa-home"></span>
                            1185 Burlington
                            <br> Canada.
                        </li>
                        <li>
                            <span class="fa fa-phone"></span>
                            +12 345 678
                        </li>
                        <li>
                            <span class="fa fa-envelope"></span>
                            <a href="mailto:info@example.com">mail@chronicle.com</a>
                        </li>
                    </ul>
                </div>
                <!-- //footer-grid4 -->
                <div class="clearfix"></div>
            </div>
            <!-- //footer-grids -->
            <!-- footer social -->
            <div class="footer-social text-center">
                <h4>stay connected</h4>
                <ul>
                    <li>
                        <a href="#">
                            <span class="fa fa-facebook icon_facebook"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-twitter icon_twitter"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-dribbble icon_dribbble"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-google-plus icon_g_plus"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- //footer social -->
        </div>
        <!-- //footer container -->
    </div>
    <!-- //footer -->
    <div class="cpy-right">
        <p>© 2018 Chronicle. All rights reserved | Design by
            <a href="http://w3layouts.com"> W3layouts.</a>
        </p>
    </div>

</div>

<?php
$this->registerJs("
chr.render();

    chr.cart.on('new_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {
            }
        }
    });
");
?>

<?php
$this->registerJs("
    $(document).ready(function () {
        $(\".dropdown\").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).slideDown(\"fast\");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).slideUp(\"fast\");
                $(this).toggleClass('open');
            }
        );
    });
");
?>

<?php
$this->registerJs("
    jQuery(document).ready(function ($) {
        $(\".scroll\").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
");
?>

<?php
$this->registerJs("
    $(document).ready(function () {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
");
?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
