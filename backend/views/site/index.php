<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="row">
        <div class="col-md-4">
            <div class="card bg-info text-warning" style="width: 18rem;">
                <h3 class="text-center"><?= Yii::t('yii', 'Category') ?></h3>
                <div class="card-body">
                    <p class="card-text text-center"><?= \common\models\Category::find()->count() ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-info text-warning" style="width: 18rem;">
                <h3 class="text-center"><?= Yii::t('yii', 'Publisher') ?></h3>
                <div class="card-body">
                    <p class="card-text text-center"><?= \common\models\Publisher::find()->count() ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-info text-warning" style="width: 18rem;">
                <h3 class="text-center"><?= Yii::t('yii', 'Author') ?></h3>
                <div class="card-body">
                    <p class="card-text text-center"><?= \common\models\Author::find()->count() ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-4">
            <div class="card bg-info text-warning" style="width: 18rem;">
                <h3 class="text-center"><?= Yii::t('yii', 'Format') ?></h3>
                <div class="card-body">
                    <p class="card-text text-center"><?= \common\models\Format::find()->count() ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-info text-warning" style="width: 18rem;">
                <h3 class="text-center"><?= Yii::t('yii', 'Language') ?></h3>
                <div class="card-body">
                    <p class="card-text text-center"><?= \common\models\Language::find()->count() ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-info text-warning" style="width: 18rem;">
                <h3 class="text-center"><?= Yii::t('yii', 'Book') ?></h3>
                <div class="card-body">
                    <p class="card-text text-center"><?= \common\models\Book::find()->count() ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-4">
            <div class="card bg-info text-warning" style="width: 18rem;">
                <h3 class="text-center"><?= Yii::t('yii', 'Order') ?></h3>
                <div class="card-body">
                    <p class="card-text text-center"><?= \common\models\Order::find()->count() ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-info text-warning" style="width: 18rem;">
                <h3 class="text-center"><?= Yii::t('yii', 'OrderItem') ?></h3>
                <div class="card-body">
                    <p class="card-text text-center"><?= \common\models\OrderItem::find()->count() ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-info text-warning" style="width: 18rem;">
                <h3 class="text-center"><?= Yii::t('yii', 'Visitor') ?></h3>
                <div class="card-body">
                    <p class="card-text text-center"><?= \common\models\Visitor::find()->count() ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-4">
            <div class="card bg-info text-warning" style="width: 18rem;">
                <h3 class="text-center"><?= Yii::t('yii', 'User') ?></h3>
                <div class="card-body">
                    <p class="card-text text-center"><?= \common\models\User::find()->count() ?></p>
                </div>
            </div>
        </div>
    </div>

    <a href="/admin/site/faker" class="btn btn-warning mt-5 float-right">Generate fake data</a>

</div>
