<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\web\View;

$this->title = 'checkout';
$this->params['breadcrumbs'][] = $this->title;
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
