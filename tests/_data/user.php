<?php

return [
    [
        'id' => '100',
        'username' => 'admin',
        'password_hash' => Yii::$app->security->generatePasswordHash('admin'),
        'auth_key' => 'test100key',
    ],
    [
        'username' => 'demo',
        'password_hash' => Yii::$app->security->generatePasswordHash('demo'),
    ],    
];
