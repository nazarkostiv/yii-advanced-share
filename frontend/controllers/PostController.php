<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 21.08.18
 * Time: 13:22
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Service;

class PostController extends Controller
{

    public function actionIndex()
    {

        $model = new Service();

        if( $model->load( Yii::$app->request->post() ) and $model->validate() ) {
            return $this->refresh();
        }

        return $this->render( 'index', compact( 'model' ) );

    }

}