<?php
namespace common\widgets;

use yii\base\Widget;
use common\models\Social;

class SocialWidget extends Widget
{
    public function run()
    {
        $social = Social::find()
            ->asArray()
            ->all();

        $result = "<ul class=\"fh5co-social-icons\">";

        foreach ( $social as $item ) {
            $result .= "<li><a href=\"" . $item['url'] . "\"><i class=\"" . $item['icon'] . "\"></i></a></li>";
        }

        $result .= "</ul>";

        return $result;

    }
}