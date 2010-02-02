<?php
// define application path
define('TII_PATH_ROOT', dirname(__FILE__));

define('TII_URL_ROOT','');

// define framework path
define('TII_PATH_FRAMEWORK', $_SERVER['DOCUMENT_ROOT'].'/../tiilib');

define('TII_URL_FRAMEWORK','/tiilib');

define('TII_DIR_CACHE', '/cache');

// include framework
include TII_PATH_FRAMEWORK.'/tii.php';

// set the exception handler
set_exception_handler(array('Tii','ExceptionHandler'));

// initialize the framework with the configuration file of our own.
Tii::Init(TII_PATH_ROOT.'/config.json');


echo Tii::CreateApp('FrontEnd')
    ->Template()
    ->AddScript(TII_PATH_FRAMEWORK.'/scripts/jquery-1.4.1.min.js')
    ->GetHTML();

echo '<hr />', number_format(memory_get_usage());
