<?php

/* @var $this yii\web\View */

use yii\web\View;

$this->title = 'My Yii Application';

$this->title = 'footer1';
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
                    <a href="footer1.php">Variant 1</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--//breadcrumbs ends here-->
<!-- newsletter -->
<div class="footerv1-start">
    <h4 class="rad-txt text-center">
        <span class="abtxt1">elegant</span>
        <span class="abtext">footer layouts</span>
    </h4>
    <div class="newsletter">
        <div class="container">
            <div class="col-md-6 w3agile_newsletter_left">
                <h3>Newsletter</h3>
                <p>subscribe to our email list.We"ll keep you informed of new releases and updates</p>
            </div>
            <div class="col-md-6 w3agile_newsletter_right">
                <form action="#" method="post">
                    <input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                    <input type="submit" value="" />
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //newsletter -->
<!-- footer -->
<div class="w3_footerv1 section">
    <div class="container">
        <div class="w3_footerv1_grids">
            <div class="col-md-3 col-sm-6 col-xs-6 w3_footerv1_grid">
                <h3>Contact</h3>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                <ul class="address">
                    <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1185 Burlington
                        <span>Canada.</span></li>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6  w3_footerv1_grid">
                <h3>Information</h3>
                <ul class="info">
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="about.php">management team</a></li>
                    <li><a href="index.php">self publish</a></li>
                    <li><a href="#">free app's</a></li>
                    <li><a href="contact.php">get help</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6  w3_footerv1_grid">
                <h3>Category</h3>
                <ul class="info">
                    <li><a href="shop.php">Biography</a></li>
                    <li><a href="shop.php">Fiction </a></li>
                    <li><a href="shop.php">Literature</a></li>
                    <li><a href="shop.php">Business</a></li>
                    <li><a href="shop.php">Finance</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 w3_footerv1_grid">
                <h3>trending now</h3>
                <ul class="info">
                    <li><a href="shop.php">audio books</a></li>
                    <li><a href="shop.php">e-books</a></li>
                </ul>
                <h4>Follow Us</h4>
                <div class="agileits_social_button">
                    <ul>
                        <li><a href="#" class="facebook"> </a></li>
                        <li><a href="#" class="twitter"> </a></li>
                        <li><a href="#" class="google"> </a></li>
                        <li><a href="#" class="pinterest"> </a></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //footer -->
