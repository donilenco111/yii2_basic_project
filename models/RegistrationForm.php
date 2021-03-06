<?php
namespace app\models;

use Yii;
use yii\base\Model;
use app\models\User;


class RegistrationForm extends Model
{
    public $username;
    public $password;

    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            [['username'], 'unique', 'targetClass' => User::class],
        ];
    }



    public function registrateUser()
    {
        $newUser = new User();
        $newUser['username'] = $this->username;
        $newUser['password_hash'] = Yii::$app->security->generatePasswordHash($this->password);
        $newUser['auth_key'] = '0';

        if ($this->validate()) {
            if($newUser->save()) {
                return true;
            } else {
                return false;
            }
        }
    }
}


