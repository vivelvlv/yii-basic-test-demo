<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "woshishui".
 *
 * @property integer $name_id
 * @property integer $name_number
 */
class woshishishuiModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'woshishui';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_id', 'name_number'], 'required'],
            [['name_id', 'name_number'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name_id' => 'Name ID',
            'name_number' => 'Name Number',
        ];
    }
}
