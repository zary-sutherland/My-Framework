<?php

define('DS',DIRECTORY_SEPARATOR);

define('APP_ROOT', 'C:'.DS.'xampp2'.DS.'htdocs'.DS.'package'); //the application root directory

define('URL_ROOT_DIR', 'http://localhost/Frameworks');

define('URI_ROOT', '../../Frameworks/CMS/');
define('URI_ROOT_PATH', '/Frameworks/CMS/');
define('FRAMEWORK_DIR', APP_ROOT.DS.'framework');
define('DATA_DIR',APP_ROOT.DS.'data');
define('TEMPLATE_DIR', APP_ROOT.DS.'tpl');
define('FRAPPIO_DIR', APP_ROOT.DS.'frappio');
define('CODEBASE_DIR', APP_ROOT.DS.'codebase');

define('MODEL_DIR', FRAPPIO_DIR.DS.'models');
define('CONTROLLER_DIR', FRAPPIO_DIR.DS.'controllers');
define('VIEW_DIR', FRAPPIO_DIR.DS.'views');

define('IMAGES_DIR', URI_ROOT.DS.'images');
define('CSS_DIR', URI_ROOT.DS.'css');
define('JS_DIR', URI_ROOT.DS.'js');
define('FONTS_DIR',URI_ROOT.DS.'fonts');

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','mooc');

define('PERMISSION_READ', 1);
?>