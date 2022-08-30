<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace console\controllers;

use common\models\User;
use Yii;
use yii\console\Controller;

/**
 *
 */
class SeedController extends Controller
{
    public function actionIndex()
    {
        $user = new User();
        $user->username = 'admin';
        $user->email = 'admin@alinea.ua';
        $user->status = User::STATUS_ACTIVE;
        $user->setPassword('password');
        $user->generateAuthKey();
        $user->save();
    }
}
