<?php

/* @var $this yii\web\View
 *
 * @var $visitors [] common\models\Visitor
 * @var $categories [] common\models\Category
 * @var $visitors_count [] common\models\Visitor
 * @var $books_count [] common\models\Book
 * @var $orders_count [] common\models\Order
 *
 */

$this->title = 'index';
?>
<div class="site-index">

    <!-- banner -->
    <div class="banner-bg-agileits">
        <!-- banner-text -->
        <div class="banner-text">
            <div class="container">
                <p class="b-txt">the</p>
                <h2 class="title">
                    Library
                </h2>
                <ul class="banner-txt">
                    <li>share.</li>
                    <li> explore.</li>
                    <li>amplify.</li>
                </ul>
            </div>
        </div>
        <!-- //banner-text -->
    </div>
    <!-- //banner -->
    <!-- about -->
    <div class="about-sec section" id="about">
        <div class="container">
            <!-- about-left-grid -->
            <div class="col-md-7 about-left-grid">
                <div class="inner-about2">
                    <h4>the splendid Central Library</h4>
                    <p>Billed as the largest in the world,and the library's collection holds more than 3 million
                        items.</p>
                    <h5>the library catalogue</h5>
                    <ul class="about-list">
                        <?php foreach ($categories as $model) { ?>
                            <li>
                                <i class="fa fa-play-circle-o" aria-hidden="true"></i><?= $model->name ?>
                            </li>
                        <?php } ?>
                    </ul>
                    <a href="#">view more</a>
                </div>
                <!-- about left bottom - services -->
                <div class="principles-grids principles-grids1">
                    <div class="abt-btm agileits w3layouts aos-init aos-animate">
                        <div class="col-md-6 col-sm-6 agileits elite-services1 w3layouts bottom-gds" data-aos="fade-up">
                            <div class="bott-img agileits w3layouts">
                                <div class="icon-holder agileits w3layouts">
                                    <span class="fa fa-book agileits w3layouts service-icon" aria-hidden="true"></span>
                                </div>
                                <h4 class="mission agileits w3layouts">law library</h4>
                                <div class="description agileits w3layouts">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 agileits elite-services2 w3layouts bottom-gds"
                             data-aos="fade-down">
                            <div class="bott-img bott-img1 agileits w3layouts">
                                <div class="icon-holder agileits w3layouts">
                                    <span class="fa fa-book agileits w3layouts service-icon" aria-hidden="true"></span>
                                </div>
                                <h4 class="mission agileits w3layouts">asian materials</h4>
                                <div class="description agileits w3layouts">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- //about left bottom - services ends here -->
            </div>
            <!-- //about-left-grid ends here-->
            <!-- about-right-grid -->
            <div class="col-md-5 about-right-grid"></div>
            <!-- //about-right-grid ends here -->
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //about ends here -->
    <!-- about bottom -->
    <div class="about-bottom section">
        <div class="container-fluid">
            <h4 class="rad-txt">
                <span class="abtxt1">wonderful</span>
                <span class="abtext"> world of reading</span>
            </h4>
            <!-- about-bottom grid1 -->
            <div class="col-md-6 about-bottom-right">
                <p class="abt-p">Etiam massa quam, efficitur eu ante vestibulum, convallis molestie arcu. Morbi dapibus
                    suscipit ante,
                    sit efficitur eu ante vestibulum, convallis molestie arcu. Morbi dapibus suscipit an amet pulvinar
                    risus.
                </p>
                <div class="col-md-6 col-sm-6 col-xs-6 services-w3ls">
                    <div class="ab1">
                        <div class="col-md-3 col-sm-3 col-xs-3 ab1-icon">
                            <span class="fa fa-book" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-9 ab1-text">
                            <h5>e-books</h5>
                            <p>loremipsum is a dummy text</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="ab1">
                        <div class="col-md-3 col-sm-3 col-xs-3 ab1-icon">
                            <span class="fa fa-book" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-9 ab1-text">
                            <h5>magazines</h5>
                            <p>loremipsum is a dummy text</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="ab1">
                        <div class="col-md-3 col-sm-3 col-xs-3 ab1-icon">
                            <span class="fa fa-book" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-9 ab1-text">
                            <h5>Fiction</h5>
                            <p>loremipsum is a dummy text</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="ab1">
                        <div class="col-md-3 col-sm-3 col-xs-3 ab1-icon">
                            <span class="fa fa-book" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-9 ab1-text">
                            <h5>audio books</h5>
                            <p>loremipsum is a dummy text</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 services-w3ls service2">
                    <div class="ab1">
                        <div class="col-md-3 col-sm-3 col-xs-3 ab1-icon">
                            <span class="fa fa-book" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-9 ab1-text">
                            <h5>Journals</h5>
                            <p>loremipsum is a dummy text</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="ab1">
                        <div class="col-md-3 col-sm-3 col-xs-3 ab1-icon">
                            <span class="fa fa-book" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-9 ab1-text">
                            <h5>e-library</h5>
                            <p>loremipsum is a dummy text</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="ab1">
                        <div class="col-md-3 col-sm-3 col-xs-3 ab1-icon">
                            <span class="fa fa-book" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-9 ab1-text">
                            <h5>magazines</h5>
                            <p>loremipsum is a dummy text</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="ab1">
                        <div class="col-md-3 col-sm-3 col-xs-3 ab1-icon">
                            <span class="fa fa-book" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-9 ab1-text">
                            <h5>Comic Books</h5>
                            <p>loremipsum is a dummy text</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- //about-bottom grid1 ends here -->
            <div class="col-md-6 home-about2">
                <!-- about-bottom grid2 -->
                <div class="col-md-6 col-sm-6 col-xs-6 bg-right"></div>
                <!-- //about-bottom grid2 ends here -->
                <!-- about-bottom grid3 -->
                <div class="col-md-6 col-sm-6 col-xs-6 w3ls-section  stats">
                    <div class="stats-aboutinfo services-main">
                        <div class="agileits_w3layouts-stats-grids text-center">
                            <div class="stats-icon">
                                <span class="fa fa-book" aria-hidden="true"></span>
                            </div>
                            <div class="stats-right">
                                <h6>orders</h6>
                                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0'
                                     data-max='<?=$orders_count?>' data-delay='.5' data-increment="300"><?=$orders_count?>
                                </div>

                            </div>
                            <div class="clearfix"></div>

                        </div>
                        <div class="agileits_w3layouts-stats-grids text-center">
                            <div class="stats-icon">
                                <span class="fa fa-university" aria-hidden="true"></span>
                            </div>
                            <div class="stats-right">
                                <h6>branches</h6>
                                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0'
                                     data-max='1' data-delay='.5' data-increment="50">1
                                </div>

                            </div>
                            <div class="clearfix"></div>


                        </div>
                        <div class="agileits_w3layouts-stats-grids text-center">
                            <div class="stats-icon">
                                <span class="fa fa-laptop" aria-hidden="true"></span>
                            </div>
                            <div class="stats-right">
                                <h6>e-books</h6>
                                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0'
                                     data-max='<?= $books_count ?>' data-delay='.5' data-increment="50"><?= $books_count ?>
                                </div>

                            </div>
                            <div class="clearfix"></div>

                        </div>
                        <div class="agileits_w3layouts-stats-grids text-center">
                            <div class="stats-icon">
                                <span class="fa fa-users" aria-hidden="true"></span>
                            </div>
                            <div class="stats-right">
                                <h6>visitors</h6>
                                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0'
                                     data-max='<?= $visitors_count ?>' data-delay='.5'
                                     data-increment="300"><?= $visitors_count ?>
                                </div>

                            </div>
                            <div class="clearfix"></div>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- //about-bottom grid3 ends here -->
            <!-- //Numscroller -->
            <div class="clearfix"></div>
        </div>
        <!-- //about container ends here-->
    </div>
    <!--//about bottom ends here-->
    <!-- team -->
    <div id="team" class="team section">
        <div class="team-container">
            <div class="team-row">
                <!-- team grid1 -->
                <div class="col-md-5 team-grid-left">
                    <!-- team individual grid -->
                    <div class="col-md-6 col-sm-6 col-xs-6 team-grids">
                        <div class="team-effect">
                            <img src="../images/t3.jpg" alt="img" class="img-responsive">
                            <div class="social-icon">
                                <a href="#" class="social-button twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#" class="social-button facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#" class="social-button google">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h4>John Smith</h4>
                            <span>Designation</span>
                            <p>vallis molestie arcu morbi dapibus suscipit ante sit efficitur eu ante vesti.</p>

                        </div>
                    </div>
                    <!-- //team individual grid -->
                    <!-- team individual grid -->
                    <div class="col-md-6 col-sm-6 col-xs-6 team-grids">
                        <div class="team-text">
                            <h4>Thomson Doe</h4>
                            <span>Designation</span>
                            <p>vallis molestie arcu morbi dapibus suscipit ante sit efficitur eu ante vesti.</p>
                        </div>
                        <div class="team-effect">
                            <img src="../images/t1.jpg" alt="img" class="img-responsive">
                            <div class="social-icon">
                                <a href="#" class="social-button twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#" class="social-button facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#" class="social-button google">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </div>
                        </div>
                        <!-- //team individual grid -->
                    </div>
                </div>
                <!-- //team-grid1 ends here-->
                <!--team-grid2 -->
                <div class="col-md-2 col-sm-2 team-mid-txt text-center">
                    <span>our</span>
                    <h5>t</h5>
                    <h5>e</h5>
                    <h5>a</h5>
                    <h5>m</h5>
                </div>
                <!--//team-grid2 ends here-->
                <!-- team grid3 -->
                <!-- team individual grid -->
                <div class="col-md-5 team-grid-right">
                    <div class="col-md-6 col-sm-6 col-xs-6 team-grids">
                        <div class="team-text">
                            <h4>Smith Kevin</h4>
                            <span>Designation</span>
                            <p>vallis molestie arcu morbi dapibus suscipit ante sit efficitur eu ante vesti.</p>
                        </div>
                        <div class="team-effect">
                            <img src="../images/t2.jpg" alt="img" class="img-responsive">
                            <div class="social-icon">
                                <a href="#" class="social-button twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#" class="social-button facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#" class="social-button google">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- //team individual grid -->
                    <!-- team individual grid -->
                    <div class="col-md-6 col-sm-6 col-xs-6 team-grids">
                        <div class="team-effect">
                            <img src="../images/t4.jpg" alt="img" class="img-responsive">
                            <div class="social-icon">
                                <a href="#" class="social-button twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#" class="social-button facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#" class="social-button google">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h4>Laura Hill</h4>
                            <span>Designation</span>
                            <p>vallis molestie arcu morbi dapibus suscipit ante sit efficitur eu ante vesti.</p>
                        </div>
                    </div>
                    <!-- //team individual grid -->
                    <div class="clearfix"></div>
                </div>
                <!-- //team grid3 -->
                <div class="clearfix"></div>
            </div>
            <!-- //team-row ends here -->
        </div>
        <!-- // team container ends here -->
    </div>
    <!-- //team -->
    <!--testimonials -->
    <div class="reviews section" id="testimonials">
        <div class="container">
            <h4 class="rad-txt">
                <span class="abtxt1">visitors</span>
                <span class="abtext">testimonials</span>
            </h4>
            <div id="Carousel" class="slide carousel">
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <?php
                    $active_class = false;
                    $item_counter = 0;

                    foreach ($visitors as $visitor) : ?>

                    <?php if ($item_counter % 4 == 0) : ?>
                        <div class="item <?= (!$active_class) ? 'active' : '' ?>">
                            <div class="row">
                    <?php endif; ?>

                        <?php if ($item_counter % 4 == 0) : ?>
                            <div class="col-md-6  testi-main">
                                <div class="testi-grids">
                                    <div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
                                        <h6><?=$visitor->fullName?></h6>
                                        <p><?=$visitor->comment?></p>
                                        <h5><?=$visitor->theme?></h5>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3  img-testi">
                                        <img class="img-responsive" src="<?=$visitor->getImage()->getUrl()?>" alt="Visitor's image">
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if ($item_counter % 4 == 1) : ?>
                            <div class="col-md-6  testi-main">
                                <div class="testi-grids t2">
                                    <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                        <img class="img-responsive" src="<?=$visitor->getImage()->getUrl()?>" alt="Visitor's image">
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
                                        <h6><?=$visitor->fullName?></h6>
                                        <p><?=$visitor->comment?></p>
                                        <h5><?=$visitor->theme?></h5>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if ($item_counter % 4 == 2) : ?>
                            <div class="col-md-6  testi-main">
                                <div class="testi-grids">
                                    <div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
                                        <h6><?=$visitor->fullName?></h6>
                                        <p><?=$visitor->comment?></p>
                                        <h5><?=$visitor->theme?></h5>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                        <img class="img-responsive" src="<?=$visitor->getImage()->getUrl()?>" alt="Visitor's image">
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if ($item_counter % 4 == 3) : ?>
                            <div class="col-md-6  testi-main">
                                <div class="testi-grids t2">
                                    <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                        <img class="img-responsive" src="<?=$visitor->getImage()->getUrl()?>" alt="Visitor's image">
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
                                        <h6><?=$visitor->fullName?></h6>
                                        <p><?=$visitor->comment?></p>
                                        <h5><?=$visitor->theme?></h5>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        <?php endif; ?>

                    <?php if (++$item_counter % 4 == 0) : ?>
                            </div>
                            <!--.row-->
                        </div>
                        <!--.item-->
                    <?php endif; ?>

                    <?php
                        $active_class = true;
                        endforeach;
                    ?>

                    <?php if ($item_counter % 4 != 0) : ?>
                            </div>
                            <!--.row-->
                        </div>
                            <!--.item-->
                    <?php endif; ?>
                </div>
                <!--.carousel-inner-->
                <a data-slide="prev" href="#Carousel" class="left carousel-control">???</a>
                <a data-slide="next" href="#Carousel" class="right carousel-control">???</a>
            </div>
    <!-- //testimonials-->
</div>