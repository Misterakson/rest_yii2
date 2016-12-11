<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "todo".
 *
 * @property integer $id
 * @property string $todo
 * @property integer $status
 * @property string $created_date
 */
class Todo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'todo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['created_date'], 'safe'],
            [['todo'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'todo' => 'Todo',
            'status' => 'Status',
            'created_date' => 'Created Date',
        ];
    }
}
