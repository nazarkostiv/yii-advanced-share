<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 21.08.18
 * Time: 11:00
 */

namespace frontend\controllers;


use yii\web\Controller;

class BasicController extends Controller
{
//    public $layout = 'basic';

    public function actionIndex()
    {
        $this->layout = 'basic';
        return $this->render('index');
    }
}