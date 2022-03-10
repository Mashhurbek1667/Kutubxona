<?php

/* @var $this yii\web\View
 *
 * @var $books [] common\models\Book
 *
 */

use yii\web\View;

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
                    <a href="<?=Yii::$app->homeUrl?>">
                        <i class="glyphicon glyphicon-home"></i>
                    </a>
                </li>
                <li class="btn btn2">
                    <a href="shop.php">Product Catalogue</a>
                </li>
                <li class="btn btn3">
                    <a href="<?=\yii\helpers\Url::to(['site/single_product'])?>">Single product</a>
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
        <?php foreach ($books as $book) : ?>
        <div class="col-md-8 single-right-left simpleCart_shelfItem">
            <h3>Be Creative
                <span>Hardcover – Feb 2018</span>
            </h3>
            <p>by
                <a href="#"><?=$book->author->name?></a>
            </p>
            <div class="caption">

                <ul class="rating-single">
                    <?php for ($star = 1; $star <= $book->star; $star++): ?>
                        <li>
                            <a href="#">
                                <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                            </a>
                        </li>
                    <?php endfor; ?>

                    <?php for ($star = $book->star + 1; $star <= 5; $star++): ?>
                        <li>
                            <a href="#">
                                <span class="fa fa-star gray-star" aria-hidden="true"></span>
                            </a>
                        </li>
                    <?php endfor; ?>
                </ul>
                <div class="clearfix"> </div>
                <h6><?=$book->price?></h6>
            </div>
            <div class="desc_single">
                <h5>Description</h5>
                <p><?=$book->description?></p>
            </div>
            <div class="occasional">
                <h5>Specifications</h5>
                <ul class="single_specific">
                    <li>
                        <span>language :</span> <?=$book->language->name?></li>
                    <li>
                        <span>format :</span> <?=$book->format->name?></li>
                    <li>
                        <span>publisher :</span> <?=$book->publisher->name?></li>
                    <li>
                        <span>edition :</span> february 2018</li>
                    <li>
                        <span>pages :</span> <?=$book->page_count?></li>
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
        <?php endforeach;?>
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
