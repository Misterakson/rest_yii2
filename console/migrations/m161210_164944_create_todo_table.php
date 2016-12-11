<?php

use yii\db\Migration;

/**
 * Handles the creation of table `todo`.
 */
class m161210_164944_create_todo_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('todo', [
            'id' => $this->primaryKey(),
            'todo' => $this->string(),
            'status' => $this->integer(),
            'created_date' => $this->date(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('todo');
    }
}
