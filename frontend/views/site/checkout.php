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
                    <a href="index.html">
                        <i class="glyphicon glyphicon-home"></i>
                    </a>
                </li>
                <li class="btn btn2">
                    <a href="shop.html">Product Catalogue</a>
                </li>
                <li class="btn btn3 btn3a">
                    <a href="single_product.html">Single product</a>
                </li>
                <li class="btn btn4">
                    <a href="checkout.html">Checkout</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--//breadcrumbs ends here-->
<!--checkout-->
<div class="innerf-pages section">
    <div class="container">
        <div class="privacy about">
            <h4 class="rad-txt">
                <span class="abtxt1">review</span>
                <span class="abtext">your order</span>
            </h4>

            <div class="checkout-right">
                <h4>Your shopping cart contains:
                    <span>3 Products</span>
                </h4>
                <table class="timetable_sub table-responsive">
                    <thead>
                    <tr>
                        <th>SL No.</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Product Name</th>

                        <th>Price</th>
                        <th>Remove</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="rem1">
                        <td class="invert">1</td>
                        <td class="invert-image">
                            <a href="single_product.html">
                                <img src="../images/lib8.jpg" alt=" " class="img-responsive">
                            </a>
                        </td>
                        <td class="invert">
                            <div class="quantity">
                                <div class="quantity-select">
                                    <div class="entry value-minus">&nbsp;</div>
                                    <div class="entry value">
                                        <span>1</span>
                                    </div>
                                    <div class="entry value-plus active">&nbsp;</div>
                                </div>
                            </div>
                        </td>
                        <td class="invert">Be Creative</td>

                        <td class="invert">$100.00</td>
                        <td class="invert">
                            <div class="rem">
                                <div class="close1"> </div>
                            </div>

                        </td>
                    </tr>
                    <tr class="rem2">
                        <td class="invert">2</td>
                        <td class="invert-image">
                            <a href="single_product.html">
                                <img src="../images/lib3.jpg" alt=" " class="img-responsive">
                            </a>
                        </td>
                        <td class="invert">
                            <div class="quantity">
                                <div class="quantity-select">
                                    <div class="entry value-minus">&nbsp;</div>
                                    <div class="entry value">
                                        <span>1</span>
                                    </div>
                                    <div class="entry value-plus active">&nbsp;</div>
                                </div>
                            </div>
                        </td>
                        <td class="invert">Work From Home</td>

                        <td class="invert">$80.00</td>
                        <td class="invert">
                            <div class="rem">
                                <div class="close2"> </div>
                            </div>

                        </td>
                    </tr>
                    <tr class="rem3">
                        <td class="invert">3</td>
                        <td class="invert-image">
                            <a href="single_product.html">
                                <img src="../images/lib6.jpg" alt=" " class="img-responsive">
                            </a>
                        </td>
                        <td class="invert">
                            <div class="quantity">
                                <div class="quantity-select">
                                    <div class="entry value-minus">&nbsp;</div>
                                    <div class="entry value">
                                        <span>1</span>
                                    </div>
                                    <div class="entry value-plus active">&nbsp;</div>
                                </div>
                            </div>
                        </td>
                        <td class="invert">E-Commerce</td>

                        <td class="invert">$120.00</td>
                        <td class="invert">
                            <div class="rem">
                                <div class="close3"> </div>
                            </div>

                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
            <div class="checkout-left">
                <div class="col-md-4 checkout-left-basket">
                    <h4>Continue to basket</h4>
                    <ul>
                        <li>Be Creative
                            <i>-</i>
                            <span>$100.00 </span>
                        </li>
                        <li>Work From Home
                            <i>-</i>
                            <span>$80.00 </span>
                        </li>
                        <li>E-Commerce
                            <i>-</i>
                            <span>$120.00 </span>
                        </li>
                        <li>Total Service Charges
                            <i>-</i>
                            <span>$55.00</span>
                        </li>
                        <li>Total
                            <i>-</i>
                            <span>$355.00</span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8 address_form">
                    <h4>Billing Address</h4>
                    <form action="payment.html" method="post" class="creditly-card-form shopf-sear-headinfo_form">
                        <div class="creditly-wrapper wrapper">
                            <div class="information-wrapper">
                                <div class="first-row form-group">
                                    <div class="controls">
                                        <label class="control-label">Full name: </label>
                                        <input class="billing-address-name form-control" type="text" name="name" placeholder="Full name">
                                    </div>
                                    <div class="card_number_grids">
                                        <div class="card_number_grid_left">
                                            <div class="controls">
                                                <label class="control-label">Mobile number:</label>
                                                <input class="form-control" type="text" placeholder="Mobile number">
                                            </div>
                                        </div>
                                        <div class="card_number_grid_right">
                                            <div class="controls">
                                                <label class="control-label">Landmark: </label>
                                                <input class="form-control" type="text" placeholder="Landmark">
                                            </div>
                                        </div>
                                        <div class="clear"> </div>
                                    </div>
                                    <div class="controls">
                                        <label class="control-label">Town/City: </label>
                                        <input class="form-control" type="text" placeholder="Town/City">
                                    </div>
                                    <div class="controls">
                                        <label class="control-label">Address type: </label>
                                        <select class="form-control option-fieldf">
                                            <option>Office</option>
                                            <option>Home</option>
                                            <option>Commercial</option>

                                        </select>
                                    </div>
                                </div>
                                <button class="submit check_out">place order</button>
                            </div>
                        </div>
                    </form>

                </div>

                <div class="clearfix"> </div>

            </div>

        </div>

    </div>
</div>
<!--//checkout-->
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
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About us</a>
                    </li>
                    <li>
                        <a href="shop.html">shop</a>
                    </li>
                    <li>
                        <a href="contact.html">contact us</a>
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