<?php

namespace backend\controllers;

use common\models\Author;
use common\models\Book;
use common\models\Category;
use common\models\Format;
use common\models\Language;
use common\models\LoginFormAdmin;
use common\models\Order;
use common\models\OrderItem;
use common\models\Publisher;
use common\models\User;
use common\models\Visitor;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\Response;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'faker'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string|Response
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $this->layout = 'blank';

        $model = new LoginFormAdmin();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * yii faker
     */
    public function actionFaker()
    {
        /**
         * get faker object as $faker
         */
        $faker = \Faker\Factory::create('ru_RU');

        /**
         * Create Category - 100
         */
        /*for ($i = 1; $i <= 100; $i++) {
            $object = new Category();
            $object->name = $faker->text(20);
            $object->status = random_int(0,1);
            while (!$object->save()){
                $object->name = $faker->text(20);
            }
            unset($object);
        }*/

        /**
         * Create Publisher - 100
         */
       /* for ($i = 1; $i <= 100; $i++) {
            $object = new Publisher();
            $object->name = $faker->company;
            $object->address = $faker->address;
            $object->status = random_int(0,1);
            while (!$object->save()){
                $object->name = $faker->company;
            }
            unset($object);
        }*/

        /**
         * Create Author - 100
         */
        /*for ($i = 1; $i <= 100; $i++) {
            $object = new Author();
            $object->name = $faker->name;
            $object->status = random_int(0,1);
            while (!$object->save()){
                $object->name = $faker->name;
            }
            unset($object);
        }*/

        /**
         * Create Format - 100
         */
        /*for ($i = 1; $i <= 100; $i++) {
            $object = new Format();
            $object->name = $faker->text(10) . ' book';
            $object->status = random_int(0,1);
            while (!$object->save()){
                $object->name = $faker->text(10) . ' book';
            }
            unset($object);
        }*/

        /**
         * Create Language - 100
         */
        /*for ($i = 1; $i <= 100; $i++) {
            $object = new Language();
            $object->name = $faker->country;
            $object->status = random_int(0,1);
            while (!$object->save()){
                $object->name = $faker->countryISOAlpha3;
            }
            unset($object);
        }*/

        /**
         * Create Book - 1000
         */
        /*for ($i = 1; $i <= 1000; $i++) {
            $object = new Book();
            $object->name = $faker->text(20);
            $object->star = random_int(0,5);
            $object->price = random_int(5000, 5000000);
            $object->discount = random_int(0, 99);
            $object->description = $faker->text(200);
            $object->published = $faker->date;
            $object->page_count = random_int(1,5000);
            $object->author_id = random_int(1,100);
            $object->language_id = random_int(1,100);
            $object->format_id = random_int(1,100);
            $object->publisher_id = random_int(1,100);
            $object->category_id = random_int(1,100);
            $object->status = random_int(0,1);
            while (!$object->save()){
                $object->name =$faker->text(20);
            }
            unset($object);
        }*/

        /**
         * Create User - 30
         */
        /*for ($i = 1; $i <= 30; $i++) {
            $object = new User();
            $object->username = "user" . $i;
            $object->generateAuthKey();
            $object->setPassword("user" . $i);
            $object->email = $faker->email;
            $object->status = [0, 9, 10][array_rand([0, 9, 10], 1)];
            $object->generateEmailVerificationToken();
            $object->is_admin = 0;
            while (!$object->save()) {
                $object->email = $faker->email;
            }
            unset($object);
        }*/

        /**
         * Shunda sal xato kalkulyatsiya bo. Manimcha PHP da katta sonlarni kopaytirishda muammo!!!!!!!!!!!!!!!!!!!!!!!!!
         * Create Order - 50
         */
        /*for ($i = 1; $i <= 50; $i++) {
            $object = new Order();
            $object->fullName = $faker->name;
            $object->phone = $faker->phoneNumber;
            $object->country = $faker->country;
            $object->province = $faker->text(15);
            $object->region = $faker->text(15);
            $object->address = $faker->address;
            $object->zip_code = $faker->postcode;
            $object->user_id = random_int(2, 31);
            $object->status = random_int(0, 4);

            $object->save();


            $maxOrderCount = random_int(1, 15);*/
            /**
             * Create Order Item
             */
            /*for ($j = 1; $j <= $maxOrderCount; $j++) {
                $orderItem = new OrderItem();
                $orderItemBook = Book::findOne(random_int(1, 1000));

                $orderItem->price = (float)$orderItemBook->price * (1.0 - $orderItemBook->discount / 100.0);
                $orderItem->count = random_int(1, 20);
                $orderItem->order_id = $object->id;
                $orderItem->book_id = $orderItemBook->id;
                $orderItem->save();

                $object->total_price += $orderItem->price * $orderItem->count;
                $object->save(false);

                unset($orderItem);
                unset($orderItemBook);
            }

            unset($object);
        }*/

        /**
         * Create Visitor - 16 (4x4)
         */
        /*for ($i = 1; $i <= 16; $i++) {
            $object = new Visitor();
            $object->fullName = $faker->name;
            $object->comment = $faker->text(200);
            $object->theme = $faker->text(15);
            $object->status = random_int(0, 1);
            while (!$object->save()){
                $object->fullName = $faker->name;
            }
            unset($object);
        }*/


        return $this->goHome();
    }
}
