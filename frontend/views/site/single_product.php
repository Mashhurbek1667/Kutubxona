<?php

/* @var $this yii\web\View */

use yii\web\View;

$this->title = 'My Yii Application';
$this->title = 'single_product';
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
                    <a href="shop.php">Product Catalogue</a>
                </li>
                <li class="btn btn3">
                    <a href="single_product.php">Single product</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--//breadcrumbs ends here-->
<!-- Single -->
<div class="innerf-pages section">
    <div class="container">
        <div class="col-md-4 single-right-left ">
            <div class="grid images_3_of_2">
                <div class="flexslider1">
                    <ul class="slides">
                        <li data-thumb="images/s1.jpg">
                            <div class="thumb-image">
                                <img src="../images/lib8.jpg" data-imagezoom="true" alt=" " class="img-responsive"> </div>
                        </li>
                        <li data-thumb="images/s2.jpg">
                            <div class="thumb-image">
                                <img src="../images/s2.jpg" data-imagezoom="true" alt=" " class="img-responsive"> </div>
                        </li>
                        <li data-thumb="images/s3.png">
                            <div class="thumb-image">
                                <img src="../images/s3.png" data-imagezoom="true" alt=" " class="img-responsive"> </div>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>

        </div>
        <div class="col-md-8 single-right-left simpleCart_shelfItem">
            <h3>Be Creative
                <span>Hardcover – Feb 2018</span>
            </h3>
            <p>by
                <a href="#">Clayton Barton</a>
            </p>
            <div class="caption">

                <ul class="rating-single">
                    <li>
                        <a href="#">
                            <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                        </a>
                    </li>
                </ul>
                <div class="clearfix"> </div>
                <h6>
                    $100.00</h6>
            </div>
            <div class="desc_single">
                <h5>Description</h5>
                <p>Pellentesque quis orci sapien. Phasellus at libero in nunc egestas tincidunt. In dictum arcu purus, ultricies tincidunt
                    urna vehicula at. Aenean iaculis urna nec libero scelerisque, ac ullamcorper neque porta.</p>
            </div>
            <div class="occasional">
                <h5>Specifications</h5>
                <ul class="single_specific">
                    <li>
                        <span>language :</span> english</li>
                    <li>
                        <span>format :</span> Hardcover</li>
                    <li>
                        <span>publisher :</span> Lorempipsum</li>
                    <li>
                        <span>edition :</span> february 2018</li>
                    <li>
                        <span>pages :</span> 765</li>
                </ul>

            </div>
            <div class="color-quality">
                <div class="color-quality-right">
                    <h5>Also Formats avaiable in:</h5>
                    <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                        <option value="null">paper back &nbsp;$90.00</option>
                        <option value="null">Audio Book &nbsp;$200.00</option>
                    </select>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="description">
                <h5>Check delivery, payment options and charges at your location</h5>
                <form action="#" method="post">
                    <input type="text" value="Enter pincode" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter pincode';}"
                           required="">
                    <input type="submit" value="Check">
                </form>
            </div>
            <div class="occasion-cart">
                <div class="chr single-item single_page_b">
                    <form action="#" method="post">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="add" value="1">
                        <input type="hidden" name="chr_item" value="Single book">
                        <input type="hidden" name="amount" value="100.00">
                        <button type="submit" class="chr-cart pchr-cart">
                            <i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                    </form>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- /new_arrivals -->
<div class="section singlep_btm">
    <div class="container">
        <div class="new_arrivals">
            <h4 class="rad-txt">
                <span class="abtxt1">featured</span>
                <span class="abtext"> products</span>
            </h4>
            <!-- row3 -->
            <div class="col-md-3 product-men">
                <div class="product-chr-info chr">
                    <div class="thumbnail">
                        <a href="single_product.php">
                            <img src="../images/lib7.jpg" alt="">
                        </a>
                    </div>
                    <div class="caption">
                        <h4>Marketing</h4>
                        <p>Scott Harris</p>
                        <div class="matrlf-mid">
                            <ul class="rating">
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star gray-star" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star gray-star" aria-hidden="true"></span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="price-list">
                                <li>$ 180.00</li>
                                <li>
                                    $220.00
                                </li>
                            </ul>

                            <div class="clearfix"> </div>
                        </div>
                        <form action="#" method="post">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="add" value="1">
                            <input type="hidden" name="chr_item" value="Book1">
                            <input type="hidden" name="amount" value="180.00">
                            <button type="submit" class="chr-cart pchr-cart">Add to cart
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>
                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-men">
                <div class="product-chr-info chr">
                    <div class="thumbnail">
                        <a href="single_product.php">
                            <img src="../images/lib1.jpg" alt="">
                        </a>
                    </div>
                    <div class="caption">
                        <h4>online business</h4>
                        <p>Scott Harris</p>
                        <div class="matrlf-mid">
                            <ul class="rating">
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="price-list">
                                <li>$ 330.00</li>
                                <li>
                                    $560.00
                                </li>
                            </ul>

                            <div class="clearfix"> </div>
                        </div>
                        <form action="#" method="post">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="add" value="1">
                            <input type="hidden" name="chr_item" value="Book2">
                            <input type="hidden" name="amount" value="330.00">
                            <button type="submit" class="chr-cart pchr-cart">Add to cart
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>
                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-men">
                <div class="product-chr-info chr">
                    <div class="thumbnail">
                        <a href="single_product.php">
                            <img src="../images/lib2.jpg" alt="">
                        </a>
                    </div>
                    <div class="caption">
                        <h4>kids</h4>
                        <p>Cordebard</p>
                        <div class="matrlf-mid">
                            <ul class="rating">
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star gray-star" aria-hidden="true"></span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="price-list">
                                <li>$ 280.00</li>
                                <li>
                                    $500.00
                                </li>
                            </ul>

                            <div class="clearfix"> </div>
                        </div>
                        <form action="#" method="post">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="add" value="1">
                            <input type="hidden" name="chr_item" value="Book3">
                            <input type="hidden" name="amount" value="280.00">
                            <button type="submit" class="chr-cart pchr-cart">Add to cart
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>
                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-men">
                <div class="product-chr-info chr">
                    <div class="thumbnail">
                        <a href="single_product.php">
                            <img src="../images/lib3.jpg" alt="">
                        </a>
                    </div>
                    <div class="caption">
                        <h4>work from home</h4>
                        <p>Cordebard</p>
                        <div class="matrlf-mid">
                            <ul class="rating">
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="price-list">
                                <li>$ 140.00</li>
                                <li>
                                    $200.00
                                </li>
                            </ul>

                            <div class="clearfix"> </div>
                        </div>
                        <form action="#" method="post">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="add" value="1">
                            <input type="hidden" name="chr_item" value="Book4">
                            <input type="hidden" name="amount" value="140.00">
                            <button type="submit" class="chr-cart pchr-cart">Add to cart
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>
                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                        </form>
                    </div>
                </div>
            </div>
            <!-- //row3 -->
            <div class="clearfix"></div>
        </div>
        <!--//new_arrivals-->
        <div class="clearfix"></div>

    </div>
</div>
<!--// Single -->
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
                    <a href="index.html">Chronicle</a>
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
                            <img src="../images/b1.jpg" alt="" class="img-responsive" />
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
                            <img src="../images/b2.jpg" alt="" class="img-responsive" />
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
