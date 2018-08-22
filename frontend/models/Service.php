<?php

namespace frontend\models;

use Yii;
use \yii\db\ActiveRecord;

/**
 * This is the model class for table "service".
 *
 * @property int $id
 * @property string $name
 * @property string $content
 * @property string $icon
 */
class Service extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'service';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'content', 'icon'], 'required'],
            [['content'], 'string'],
            [['name', 'icon'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'content' => 'Content',
            'icon' => 'Icon',
        ];
    }
}
