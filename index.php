<?php
// define application path
define('TII_PATH_ROOT', dirname(__FILE__));

// define framework path
define('TII_PATH_FRAMEWORK', $_SERVER['DOCUMENT_ROOT'].'/../tiilib');

// include framework
include TII_PATH_FRAMEWORK.'/tii.php';

// set the exception handler
set_exception_handler(array('Tii','ExceptionHandler'));

// initialize the framework with the configuration file of our own.
Tii::Init(TII_PATH_ROOT.'/config.json');


echo Tii::CreateApp('FrontEnd')->Init()->GetHTML();

echo '<hr />', number_format(memory_get_usage());