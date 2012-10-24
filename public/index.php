<?php
//hola soy rodolfo desde en netbeans
//hola soy rodrigo, esta es una prueba
//Hola soy francisco
//Hola soy Felipe
//Hola soy Rodrigo, y esta es otra prueba

// change the following paths if necessary
$yii=dirname(__FILE__).'/common/lib/Yii/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();
