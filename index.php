<?php
define('APP',realpath('./app/'));

define('BASE_PATH',str_replace('\\','/',realpath(dirname(__FILE__).'/'))."/");
require_once BASE_PATH."vendor/autoload.php";

$captcha = new Admin\Index();
$captcha->Index();
 ?>
