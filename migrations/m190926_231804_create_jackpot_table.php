<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%jackpot}}`.
 */
class m190926_231804_create_jackpot_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%jackpot}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%jackpot}}');
    }

    public function Up()
    {
        $this->createTable(
            'jackpot',
            [
                'id' => $this->primaryKey(6),
                'id_player ' => $this->int(5),
                'rate' => $this->tinyint(2),
                'jackpot' => $this->float(),
            ]
        );
    }

    public function Down()
    {
        $this->dropTable('jackpot');
    }
}
