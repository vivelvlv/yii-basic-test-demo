<?php
/**
 * Created by PhpStorm.
 * User: vive
 * Date: 2016/11/1
 * Time: 下午3:58
 */

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    // 配置参数的重要性,前面要求都存在,后面要求email符合email语法规则
    public function rules()
    {
        return [[['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }

}