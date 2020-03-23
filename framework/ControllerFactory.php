<?php
namespace FRAMEWORKNS;
class controllerFactory{

    //check if controller exists and instantiate one
    public static function createController($controllerName){

        if(file_exists(CONTROLLER_DIR.DS.$controllerName.'.php')){
            if(class_exists('FRAMEWORKNS'.DS.$controllerName)){
                $class = new \ReflectionClass('FRAMEWORKNS'.DS.$controllerName);

                return $class->newInstance();
        }
        trigger_error("Controller Does not exist");
    }
}
}
?>