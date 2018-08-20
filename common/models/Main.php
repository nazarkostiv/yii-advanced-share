<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "main".
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $content
 */
class Main extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'main';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'slug', 'content'], 'required'],
            [['content'], 'string'],
            [['name', 'slug'], 'string', 'max' => 255],
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
            'slug' => 'Slug',
            'content' => 'Content',
        ];
    }
}
