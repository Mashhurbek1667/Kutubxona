<?php

/* @var $this yii\web\View */

use yii\web\View;

$this->title = 'My Yii Application';
$this->title = 'shop';
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
                    <a href="shop.php">product catalogue</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--//breadcrumbs ends here-->
<!-- Shop -->
<div class="innerf-pages section">
    <div class="container-cart">
        <!-- product left -->
        <div class="side-bar col-md-3">
            <!--preference -->
            <div class="left-side">
                <h3 class="shopf-sear-headits-sear-head">
                    Categories</h3>
                <ul>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">Biographies</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">Fiction</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">Management</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">Business</span>
                    </li>

                </ul>
            </div>
            <!-- // preference -->
            <div class="search-hotel">
                <h3 class="shopf-sear-headits-sear-head">
                    <span>author</span> in focus</h3>
                <form action="#" method="post">
                    <input type="search" placeholder="search here" name="search" required="">
                    <input type="submit" value="Search">
                </form>
            </div>
            <!-- price range -->
            <div class="range">
                <h3 class="shopf-sear-headits-sear-head">
                    <span>Price</span> range</h3>
                <ul class="dropdown-menu6">
                    <li>

                        <div id="slider-range"></div>
                        <input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
                    </li>
                </ul>
            </div>
            <!-- //price range -->
            <!--preference -->
            <div class="left-side">
                <h3 class="shopf-sear-headits-sear-head">
                    <span>latest</span> arrivals</h3>
                <ul>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">last 30 days</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">last 90 days</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">last 150 days</span>
                    </li>

                </ul>
            </div>
            <!-- // preference -->
            <!-- discounts -->
            <div class="left-side">
                <h3 class="shopf-sear-headits-sear-head">Language</h3>
                <ul>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">English</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">Spanish</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">Japanese</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">German</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">Korean</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">Chinese</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">French</span>
                    </li>
                </ul>
            </div>
            <!-- //discounts -->
            <!-- Binding -->
            <div class="left-side">
                <h3 class="shopf-sear-headits-sear-head">Format</h3>
                <ul>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">Hardcover</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">Board Book</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">Bundle</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">Paperback</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">Audio Book</span>
                    </li>
                </ul>
            </div>
            <!-- //Binding -->
            <!-- discounts -->
            <div class="left-side">
                <h3 class="shopf-sear-headits-sear-head">Discount</h3>
                <ul>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">5% - 20%</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">20% - 40%</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">40% - 60%</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">60% or more</span>
                    </li>
                </ul>
            </div>
            <!-- //discounts -->
            <!-- reviews -->
            <div class="customer-rev left-side">
                <h3 class="shopf-sear-headits-sear-head">Customer Review</h3>
                <ul>
                    <li>
                        <a href="#">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <span>5.0</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <span>4.0</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <span>3.5</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <span>3.0</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <span>2.5</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- //reviews -->


        </div>
        <!-- //product left -->
        <!-- product right -->
        <div class="left-ads-display col-md-9">
            <div class="wrapper_top_shop">
                <!-- product-sec1 -->
                <div class="product-sec1">
                    <!-- row1-->
                    <div class="col-md-3 product-men">
                        <div class="product-chr-info chr">
                            <div class="thumbnail">
                                <a href="single_product.html">
                                    <img src="../images/lib8.jpg" alt="">
                                </a>
                            </div>
                            <div class="caption">
                                <h4>be creative</h4>
                                <p>Clayton Barton</p>
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
                                        <li>$ 100.00</li>
                                        <li>
                                            $200.00
                                        </li>
                                    </ul>

                                    <div class="clearfix"> </div>
                                </div>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="chr_item" value="Book1">
                                    <input type="hidden" name="amount" value="100.00">
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
                                <a href="single_product.html">
                                    <img src="../images/lib7.jpg" alt="">
                                </a>
                            </div>
                            <div class="caption">
                                <h4>marketing</h4>
                                <p>Niel Fontine</p>
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
                                        <li>$ 200.00</li>
                                        <li>
                                            $250.00
                                        </li>
                                    </ul>

                                    <div class="clearfix"> </div>
                                </div>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="chr_item" value="Book2">
                                    <input type="hidden" name="amount" value="200.00">
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
                                <a href="single_product.html">
                                    <img src="../images/lib3.jpg" alt="">
                                </a>
                            </div>
                            <div class="caption">
                                <h4>work from home</h4>
                                <p>Jose portilla</p>
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
                                        <li>$ 80.00</li>
                                        <li>
                                            $100.00
                                        </li>
                                    </ul>

                                    <div class="clearfix"> </div>
                                </div>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="chr_item" value="Book3">
                                    <input type="hidden" name="amount" value="80.00">
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
                                <a href="single_product.html">
                                    <img src="../images/lib6.jpg" alt="">
                                </a>
                            </div>
                            <div class="caption">
                                <h4>online business</h4>
                                <p>Clayton Barton</p>
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
                                                <span class="fa fa-star gray-star" aria-hidden="true"></span>
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
                                        <li>$ 120.00</li>
                                        <li>
                                            $130.00
                                        </li>
                                    </ul>

                                    <div class="clearfix"> </div>
                                </div>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="chr_item" value="Book4">
                                    <input type="hidden" name="amount" value="120.00">
                                    <button type="submit" class="chr-cart pchr-cart">Add to cart
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- //row1 -->
                    <!-- row2 -->
                    <div class="col-md-3 product-men women_two">
                        <div class="product-chr-info chr">
                            <div class="thumbnail">
                                <a href="single_product.html">
                                    <img src="../images/lib6.jpg" alt="">
                                </a>
                            </div>
                            <div class="caption">
                                <h4>e-commerce</h4>
                                <p>Chris Haroun</p>
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
                                        <li>$ 125.00</li>
                                        <li>
                                            $165.00
                                        </li>
                                    </ul>

                                    <div class="clearfix"> </div>
                                </div>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="chr_item" value="Book5">
                                    <input type="hidden" name="amount" value="125.00">
                                    <button type="submit" class="chr-cart pchr-cart">Add to cart
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men women_two">
                        <div class="product-chr-info chr">
                            <div class="thumbnail">
                                <a href="single_product.html">
                                    <img src="../images/lib2.jpg" alt="">
                                </a>
                            </div>
                            <div class="caption">
                                <h4>kids</h4>
                                <p>Alex Even</p>
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
                                        <li>$ 70.00</li>
                                        <li>
                                            $100.00
                                        </li>
                                    </ul>

                                    <div class="clearfix"> </div>
                                </div>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="chr_item" value="Book6">
                                    <input type="hidden" name="amount" value="70.00">
                                    <button type="submit" class="chr-cart pchr-cart">Add to cart
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men women_two">
                        <div class="product-chr-info chr">
                            <div class="thumbnail">
                                <a href="single_product.html">
                                    <img src="../images/lib5.jpg" alt="">
                                </a>
                            </div>
                            <div class="caption">
                                <h4>media</h4>
                                <p>Alex Even</p>
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
                                        <li>$ 220.00</li>
                                        <li>
                                            $300.00
                                        </li>
                                    </ul>

                                    <div class="clearfix"> </div>
                                </div>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="chr_item" value="Book7">
                                    <input type="hidden" name="amount" value="220.00">
                                    <button type="submit" class="chr-cart pchr-cart">Add to cart
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men women_two">
                        <div class="product-chr-info chr">
                            <div class="thumbnail">
                                <a href="single_product.html">
                                    <img src="../images/lib4.jpg" alt="">
                                </a>
                            </div>
                            <div class="caption">
                                <h4>membership</h4>
                                <p>Hadilen de</p>
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
                                                <span class="fa fa-star gray-star" aria-hidden="true"></span>
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
                                        <li>$ 210.00</li>
                                        <li>
                                            $300.00
                                        </li>
                                    </ul>

                                    <div class="clearfix"> </div>
                                </div>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="chr_item" value="Book8">
                                    <input type="hidden" name="amount" value="210.00">
                                    <button type="submit" class="chr-cart pchr-cart">Add to cart
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- //row2 -->
                    <!-- row3 -->
                    <div class="col-md-3 product-men">
                        <div class="product-chr-info chr">
                            <div class="thumbnail">
                                <a href="single_product.html">
                                    <img src="../images/lib7.jpg" alt="">
                                </a>
                            </div>
                            <div class="caption">
                                <h4>marketing</h4>
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
                                    <input type="hidden" name="chr_item" value="Book9">
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
                                    <input type="hidden" name="chr_item" value="Book10">
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
                                    <input type="hidden" name="chr_item" value="Book11">
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
                                    <input type="hidden" name="chr_item" value="Book12">
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

                <!-- //product-sec1 -->
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>

    </div>
</div>
<!--// Shop -->
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