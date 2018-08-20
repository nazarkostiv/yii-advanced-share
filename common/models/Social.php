<?php

namespace common\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "social".
 *
 * @property int $id
 * @property string $name
 * @property string $url
 * @property string $icon
 */
class Social extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'social';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'icon'], 'required'],
            [['name', 'url', 'icon'], 'string', 'max' => 255],
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
            'url' => 'Url',
            'icon' => 'Icon',
        ];
    }
}
