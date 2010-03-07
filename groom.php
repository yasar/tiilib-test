<?php
// define application path
define('TII_PATH_ROOT', dirname(__FILE__));

define('TII_URL_ROOT','');

// define framework path
define('TII_PATH_FRAMEWORK', ($_SERVER['DOCUMENT_ROOT'].'/../tiilib'));

// ideally we will never be in need of refering to this variable !!!
//define('TII_URL_FRAMEWORK','/tiilib');

define('TII_DIR_CACHE', '/cache');

// include framework
include TII_PATH_FRAMEWORK.'/globals.php';
include TII_PATH_FRAMEWORK.'/tii.php';

// set the exception handler
set_exception_handler(array('Tii','ExceptionHandler'));

// initialize the framework with the configuration file of our own.
Tii::Init(TII_PATH_ROOT._.'config.json');


echo Tii::CreateApp('Groom')
    ->Template()
    //->AddScript(TII_PATH_FRAMEWORK."{$_}scripts{$_}jquery-1.4.1.min.js")
    ->Import('jquery')
    ->GetHTML();

echo '<hr />', number_format(memory_get_usage()),' @ ',Tii::Finish();
