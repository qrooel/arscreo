<?php
// some test2
echo <<<CLI
======================================
 .. Lib_Shell .. .. .. .. .. .. .. ..
======================================
CLI;

// determine default env for prompts

// error reporting
error_reporting(E_ALL | E_STRICT);
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);

// konfiguracja lokalizacji
date_default_timezone_set('Europe/Warsaw');
//setlocale(LC_ALL, 'polish');
setlocale(LC_CTYPE, 'pl_PL.UTF-8');

mb_internal_encoding('UTF-8');
iconv_set_encoding('input_encoding', 'UTF-8');
iconv_set_encoding('output_encoding', 'UTF-8');
iconv_set_encoding('internal_encoding', 'UTF-8');

set_include_path(
  get_include_path() . PATH_SEPARATOR . '../phpshell/'  
);

$yii=dirname(__FILE__).'/../yii_root/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config);

require_once '../phpshell/helpers.php';
require_once '../phpshell/php-shell-cmd.php';

