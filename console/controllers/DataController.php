<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace console\controllers;

use common\models\User;
use common\openprocurement\TenderingAPI;
use Yii;
use yii\console\Controller;

/**
 *
 */
class DataController extends Controller
{

    public function __construct($id, $module, $config = [])
    {
        parent::__construct($id, $module, $config);
    }

    public function actionFetch()
    {
        /** @var TenderingAPI $tenderingAPI */
        $tenderingAPI = \Yii::$app->tenderingAPI;
        $pageAmount = 10; // predefined by the task;
        $perPage = 10;
        $tenderingAPI->fetchTenders(1, 10, TenderingAPI::ORDER_DESC);
    }
}
