<?php

namespace app\repositories;

use app\models\User;

class UserRepository
{
    //

    public function getUserById(int $id)
    {
        $user = User::find()->where(['id' => $id])->one();

        return $user;
    }
}
