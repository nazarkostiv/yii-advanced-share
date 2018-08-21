<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 21.08.18
 * Time: 13:22
 */

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\AddPostForm;

class PostController extends Controller
{

    public function actionIndex()
    {

        $model = new AddPostForm();

        return $this->render('index', compact('model'));

    }

}