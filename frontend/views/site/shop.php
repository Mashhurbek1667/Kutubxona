<?php

/* @var $this yii\web\View
 *
 * @var $categories [] \common\models\Category
 * @var $languages [] \common\models\Language
 * @var $formats [] \common\models\Format
 * @var $books [] \common\models\Book
 */

use yii\web\View;
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
                    <a href="<?=Yii::$app->homeUrl?>">
                        <i class="glyphicon glyphicon-home"></i>
                    </a>
                </li>
                <li class="btn btn2">
                    <a href="<?=\yii\helpers\Url::to(['site/about'])?>">product catalogue</a>
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
            <div class="left-side" <?= ($categories>7) ? "style=overflow-y:scroll;" : "";?>>
                <h3 class="shopf-sear-headits-sear-head">
                    <?=\common\models\Category:: tableName() ?></h3>
                <ul>
                    <?php foreach ($categories as $category):?>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span"><?=$category->name?></span>
                    </li>
                    <?php endforeach;?>
                </ul>
            </div>
            <!-- // preference -->
            <div class="search-hotel">
                <h3 class="shopf-sear-headits-sear-head">
                    <span><?=\common\models\Author::tableName()?></span> in focus</h3>
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
                    <?php foreach($languages as $language):?>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span"><?=$language->name?></span>
                    </li>
                    <?php endforeach;?>
                </ul>
            </div>
            <!-- //discounts -->
            <!-- Binding -->
            <div class="left-side">
                <h3 class="shopf-sear-headits-sear-head"><?=\common\models\Format::tableName()?></h3>
                <ul>
                    <?php foreach ($formats as $format):?>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span"><?=$format->name?></span>
                    </li>
                    <?php endforeach;?>
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
                    <?php foreach ($books as $book) :
                        switch ($book->star){
                            case 1:
                                $star1="fa fa-star yellow-star";$bool1="true";
                                $star2="fa fa-star gray-star";$bool2="false";
                                $star3="fa fa-star gray-star";$bool3="false";
                                $star4="fa fa-star gray-star";$bool4="false";
                                $star5="fa fa-star gray-star";$bool5="false";
                                break;
                            case 2:
                                $star1="fa fa-star yellow-star";$bool1="true";
                                $star2="fa fa-star yellow-star";$bool2="true";
                                $star3="fa fa-star gray-star";$bool3="false";
                                $star4="fa fa-star gray-star";$bool4="false";
                                $star5="fa fa-star gray-star";$bool5="false";
                                break;
                            case 3:
                                $star1="fa fa-star yellow-star";$bool1="true";
                                $star2="fa fa-star yellow-star";$bool2="true";
                                $star3="fa fa-star gray-star";$bool3="false";
                                $star4="fa fa-star gray-star";$bool4="false";
                                $star5="fa fa-star gray-star";$bool5="false";
                                break;
                            case 4:
                                $star1="fa fa-star yellow-star";$bool1="true";
                                $star2="fa fa-star yellow-star";$bool2="true";
                                $star3="fa fa-star yellow-star";$bool3="true";
                                $star4="fa fa-star gray-star";$bool4="false";
                                $star5="fa fa-star gray-star";$bool5="false";
                                break;
                            case 5:
                                $star1="fa fa-star yellow-star";$bool1="true";
                                $star2="fa fa-star yellow-star";$bool2="true";
                                $star3="fa fa-star yellow-star";$bool3="true";
                                $star4="fa fa-star yellow-star";$bool4="true";
                                $star5="fa fa-star yellow-star";$bool5="true";
                                break;
                            default:
                                $star1="";$bool1="";
                                $star2="";$bool2="";
                                $star3="";$bool3="";
                                $star4="";$bool4="";
                                $star5="";$bool5="";

                    }?>
                    <div class="col-md-3 product-men">
                        <div class="product-chr-info chr">
                            <div class="thumbnail">
                                <a href="<?=\yii\helpers\Url::to(['site/single_product'])?>">
                                    <img src="../images/lib8.jpg" alt="">
                                </a>
                            </div>
                            <div class="caption">
                                <h4><?=$book->name;?></h4>
                                <p>Author</p>
                                <div class="matrlf-mid">
                                    <ul class="rating">
                                        <li>
                                            <a href="#">
                                                <span class="<?=$star1?>" aria-hidden="<?=$bool1?>"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="<?=$star2?>" aria-hidden="<?=$bool2?>"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="<?=$star3?>" aria-hidden="<?=$bool3?>"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="<?=$star4?>" aria-hidden="<?=$bool4?>"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="<?=$star5?>" aria-hidden="<?=$bool5?>"></span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="price-list">
                                        <li><?=$book->price?></li>
                                        <li>$200.00</li>
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
                    <?php endforeach; ?>
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