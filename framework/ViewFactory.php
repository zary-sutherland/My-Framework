<?php
namespace FRAMEWORKNS;
class ViewFactory{

    //check if view exists and instantiate one
    public static function createView($viewName){

        if(file_exists(VIEW_DIR.DS.$viewName.'.php')){
            if(class_exists('FRAMEWORKNS'.DS.$viewName)){
                $class = new \ReflectionClass('FRAMEWORKNS'.DS.$viewName);
                return $class->newInstance();
            }
        }
        trigger_error("View Does not exist");
    }
}

?>