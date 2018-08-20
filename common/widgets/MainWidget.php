<?php

namespace common\widgets;

use yii\base\Widget;
use common\models\Main;

class MainWidget extends Widget
{
    public $slug;

    public function run()
    {
        $model = Main::findOne([
            'slug' => $this->slug
        ]);

        return $model['content'];
    }
}