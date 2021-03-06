<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>

    <!--<div class="site-contact">
    <h1><?/*= Html::encode($this->title) */?></h1>

    <p>
        If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
    </p>

    <div class="row">
        <div class="col-lg-5">
            <?php /*$form = ActiveForm::begin(['id' => 'contact-form']); */?>

                <?/*= $form->field($model, 'name')->textInput(['autofocus' => true]) */?>

                <?/*= $form->field($model, 'email') */?>

                <?/*= $form->field($model, 'subject') */?>

                <?/*= $form->field($model, 'body')->textarea(['rows' => 6]) */?>

                <?/*= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) */?>

                <div class="form-group">
                    <?/*= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) */?>
                </div>

            <?php /*ActiveForm::end(); */?>
        </div>
    </div>

</div>-->
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
                    <a href="contact.php">contact us</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--//breadcrumbs ends here-->
<!-- contact -->
<div class="section contact" id="contact">
    <div class="container">
        <h4 class="rad-txt text-center">
            <span class="abtxt1">contact</span>
            <span class="abtext">us</span>
        </h4>
        <div class="contact-form">
            <div class="col-md-7">
                <!-- contact form grid -->
                <div class="contact-top1">
                    <h5>send us a note</h5>
                    <form action="#" class="form_w3layouts" method="post">
                        <input type="text" placeholder="First Name" required="">
                        <input type="text" placeholder="Last Name" required="">

                        <input class="email" type="email" placeholder="Email" required="">
                        <textarea placeholder="Message" required=""></textarea>
                        <input type="submit" value="Submit">
                    </form>
                </div>
                <!--  //contact form grid ends here -->
            </div>
            <!-- contact map grid -->
            <div class="col-md-5 map contact-right">
                <div class="contact-top1">
                    <h5>get directions</h5>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555"
                            allowfullscreen></iframe>
                </div>
            </div>
            <!--//contact map grid ends here-->
            <div class="clearfix"></div>
        </div>
        <!-- contact details -->
        <div class="contact-bottom">
            <h6>contact info</h6>
            <!-- contact details left -->
            <div class="col-md-6 col-sm-6">
                <div class="contact-left">
                    <div class="address">
                        <h5>Address:</h5>
                        <p>
                            1185 Maria St
                            <br> Burlington Canada.</p>
                    </div>
                    <div class="address address-mdl">
                        <h5>phone:</h5>
                        <p>
                            +1 234 5678</p>
                        <p>
                            +11 222 333</p>
                    </div>
                </div>
            </div>
            <!-- //contact details left -->
            <!-- contact details right -->
            <div class="col-md-6 col-sm-6">
                <div class="contact-right">
                    <div class="address">
                        <h5>Email:</h5>
                        <p>
                            <a href="mailto:info@example.com">mail@library.com</a>
                        </p>
                        <p>
                            <a href="mailto:info@example.com">mail@chronicle.com</a>
                        </p>
                    </div>
                    <div class="footer-social address  address-mdl">
                        <h5>let's get social</h5>
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
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- //contact-details right -->
            <div class="clearfix"></div>
        </div>
        <!-- //contact details ends here -->
    </div>
</div>
<!-- //contact -->