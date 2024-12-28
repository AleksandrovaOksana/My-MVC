<?php
//require_once 'app/A.php';
//require_once 'classes/A.php';

use app\components\TestHelper;
use base\B;

//spl_autoload_register(function ($class) {
////    var_dump($class);
//    $filename=str_replace('\\', DIRECTORY_SEPARATOR, $class). ".php";
////    var_dump($filename);
//    require_once $filename;
////    var_dump("app/{$class}.php");

//});
include '../../vendor/autoload.php';

TestHelper::test();

 new app\A;
 new base\A();
 new base\B();