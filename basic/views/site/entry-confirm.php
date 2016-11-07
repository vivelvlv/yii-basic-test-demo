<?php
/**
 * Created by PhpStorm.
 * User: vive
 * Date: 2016/11/1
 * Time: 下午4:09
 */
use yii\helpers\Html;
?>

<p>You have entered the following infor:</p>

<ul>
    <li><lable>Name</lable>:<?= Html::encode($model->name)?>
    <li><lable>Email</lable>:<?= Html::encode($model->email)?>
</ul>
