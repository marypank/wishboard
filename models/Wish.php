<?php

namespace app\models;

use yii\db\ActiveRecord;

class Wish extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%wishes}}';
    }
}