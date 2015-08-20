<?php

// change the following paths if necessary
$yii='/opt/lampp/htdocs/qa/page.jsp';
//$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
//defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
//defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);

header(Location:'https://www.calcatraz.com/calculator/api?c=3%2B3');

//Yii::createWebApplication($config)->run();
?>
