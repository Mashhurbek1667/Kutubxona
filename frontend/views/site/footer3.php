<?php

/* @var $this yii\web\View */

use yii\web\View;

$this->title = 'My Yii Application';
?>
<!-- banner -->
<div class="banner-bg-inner">
    <!-- banner-text -->
    <div class="banner-text-inner">
        <div class="container">
            <h2 class="title-inner">
                world of reading
            </h2>

        </div>
    </div>
    <!-- //banner-text -->
</div>
<!-- //banner -->
<!-- breadcrumbs -->
<div class="crumbs text-center">
    <div class="container">
        <div class="row">
            <ul class="btn-group btn-breadcrumb bc-list">
                <li class="btn btn1">
                    <a href="index.php">
                        <i class="glyphicon glyphicon-home"></i>
                    </a>
                </li>
                <li class="btn btn2">
                    <a href="footer.php">Default Footer</a>
                </li>
                <li class="btn btn3">
                    <a href="footer3.php">Variant 3</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--//breadcrumbs ends here-->
<!--/footer-bottom-->
<div class="footerv3-w3ls">
    <h4 class="rad-txt text-center">
        <span class="abtxt1">elegant</span>
        <span class="abtext">footer layouts</span>
    </h4>
    <!-- footerv3-top -->
    <div class="footerv3-top">
        <div class="container">
            <div class="col-md-3 col-sm-6 footv3-left">
                <h3>About Us</h3>
                <h4>
                    <a href="index.php">chronicle</a>
                </h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard.</p>
            </div>
            <div class="col-md-3 col-sm-6 footv3-left">
                <h3>Get In Touch</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>

                <div class="fv3-contact">
                    <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                    <p>90 Street, City, State 34789.</p>
                </div>
                <div class="fv3-contact">
                    <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                    <p>+456 123 7890</p>
                    <div class="fv3-contact">
                    </div>
                    <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                    <p>
                        <a href="mailto:example@email.com">info@example.com</a>
                    </p>
                </div>
                <div class="clearfix"></div>

            </div>
            <div class="col-md-3 col-sm-6 footv3-left">
                <h3>Latest releases</h3>
                <ul>
                    <li>
                        <a href="#">
                            <img src="../images/lt1.jpg" alt="" class="img-responsive">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="../images/lt4.jpg" alt="" class="img-responsive">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="../images/lt3.jpg" alt="" class="img-responsive">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="../images/lt6.jpg" alt="" class="img-responsive">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="../images/lt5.jpg" alt="" class="img-responsive">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="../images/lt2.jpg" alt="" class="img-responsive">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="../images/lt3.jpg" alt="" class="img-responsive">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="../images/lt6.jpg" alt="" class="img-responsive">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="../images/lt6.jpg" alt="" class="img-responsive">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 footv3-left">
                <h3>Subscribe</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and Lorem Ipsum has </p>
                <form action="#" method="post">
                    <input type="text" value="Your Email" name="email" onfocus="<?php $this->registerJs("this.value = '';"); $this->registerJs("onblur=\"if (this.value == '') {this.value = 'Your Email';}\">");?>
                    <input type="submit" value="Subscribe">
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- /footerv3-top -->
</div>
