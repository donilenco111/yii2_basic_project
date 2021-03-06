<?php

use yii\db\Migration;

/**
 * Class m210306_020959_alter_user_table
 */
class m210306_020959_alter_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('user', 'auth_key', 'string');
        
        $this->createIndex('index_username', 'user', 'username', true);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('user', 'auth_key', 'string not null');
        
        $this->dropIndex('index_username', 'user');
    }

}
