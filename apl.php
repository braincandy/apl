<?php

define('APL_LIBRARY_ROOT', dirname(__FILE__));
define('APL_CLASS_DIR', APL_LIBRARY_ROOT . '/classes');

include "constants.php";

set_include_path(get_include_path() . PATH_SEPARATOR . APL_CLASS_DIR);

function attempt_autoload($class) {
  $class = str_replace('\\', '/', $class);
  if (file_exists(APL_CLASS_DIR . '/' . $class . '.class')) {
    include(APL_CLASS_DIR . '/' . $class . '.class');
  }
  elseif (file_exists(APL_CLASS_DIR . '/' . $class . '.iface')) {
    include(APL_CLASS_DIR . '/' . $class . '.iface');
  }
}

spl_autoload_register('attempt_autoload');

include "configure.php";
