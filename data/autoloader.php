<?php

namespace FRAMEWORKNS;
function my_autoloader($classname)
{
	$classname = str_replace("FRAMEWORKNS".DIRECTORY_SEPARATOR,"",$classname);

	$directorys= array(
		CONTROLLER_DIR . DIRECTORY_SEPARATOR . $classname . '.php',
		MODEL_DIR . DIRECTORY_SEPARATOR . $classname . '.php',
		VIEW_DIR . DIRECTORY_SEPARATOR . $classname . '.php',
		FRAMEWORK_DIR . DIRECTORY_SEPARATOR . $classname . '.php',
	 	CODEBASE_DIR. DIRECTORY_SEPARATOR . $classname . '.php',
    );

    foreach ($directorys as $file) {
    	if (file_exists($file)) {
    		require_once($file);
			return;
    	}
    }
}


spl_autoload_register('FRAMEWORKNS\my_autoloader');


?>