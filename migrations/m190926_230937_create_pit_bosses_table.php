<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%pit_bosses}}`.
 */
class m190926_230937_create_pit_bosses_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pit_bosses}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%pit_bosses}}');
    }

    public function Up()
    {
        $this->createTable(
            'pit_bosses',
            [
                'id' => $this->primaryKey(),
                'name' => $this->varchar(30),
                'login' => $this->varchar(15)->notNull(),
                'pass' => $this->varchar(15)->notNull(),
            ]
        );
    }

    public function Down()
    {
        $this->dropTable('pit_bosses');
    }
}
