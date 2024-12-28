<?php

//use myfrm\Db;

session_start();

//require_once __DIR__ . '/../vendor/autoload.php';

require dirname(__DIR__) . '/config/config.php';
require_once __DIR__ .'/bootstrap.php';
require CORE .'/funcs.php';
require CORE. '/classes/DB.php';

$db=\myfrm\App::getContainer();
dump($db);

die;

$db_config = require CONFIG. '/db.php';

$db = (Db::getInstance())->getConnection($db_config);


require CORE .'/router.php';



