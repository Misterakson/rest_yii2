<?php

namespace frontend\modules\rest;

use yii\base\Module as BaseMod;

class Module extends BaseMod
{

    public $controllerNamespace = 'frontend\modules\rest\controllers';

    public function init()
    {
        parent::init();
        // ... остальной инициализирующий код ...
    }
}