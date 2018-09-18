<?php

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
define('SITE_ROOT', DS . 'xampp' . DS . 'htdocs' . DS . 'Demo' . DS . 'hk-test');
defined('SRC_PATH') ? null : define('SRC_PATH', SITE_ROOT.DS.'server'.DS);


require_once("new_config.php");
require_once("database.php");
require_once("about.php"); //test object

require_once("db_object.php");
  require_once("user.php");
  require_once("ocena.php");
  require_once("macka.php");
  


?>