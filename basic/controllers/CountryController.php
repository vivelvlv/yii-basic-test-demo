<?php
/**
 * Created by PhpStorm.
 * User: vive
 * Date: 2016/11/1
 * Time: 下午6:35
 */

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Country;

class CountryController extends Controller
{
    public function actionIndex()
    {
        $query = Country::find();
        $pagination = new Pagination(["defaultPageSize" => 5,
            'totalCount' => $query->count()]);
        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->renderAjax('index', ['countries' => $countries,
            'pagination' => $pagination]);
    }
}