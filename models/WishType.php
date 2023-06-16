<?php

namespace app\models;

use DateTime;
use yii\db\ActiveRecord;

class WishType extends ActiveRecord
{
    //
    public int $id;
    public string $title;
    public DateTime $createdAt;
    public DateTime $updatedAt;

    public static function tableName()
    {
        return 'wish_types';
    }

    //
}
