<?php

namespace app\models;

use yii\db\ActiveRecord;

class WishType extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%wish_types}}';
    }

    public function rules()
    {
        return [
            ['title', 'required', 'string'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'title' => 'Title',
        ];
    }
}