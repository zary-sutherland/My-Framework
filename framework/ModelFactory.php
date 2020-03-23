<?php
namespace FRAMEWORKNS;
class ModelFactory{

     //check if model exists and instantiate one
    public static function createModel($modelName){

        if(file_exists(MODEL_DIR.DS.$modelName.'.php')){
            if(class_exists('FRAMEWORKNS'.DS.$modelName)){
                $class = new \ReflectionClass('FRAMEWORKNS'.DS.$modelName);
                return $class->newInstance();
            }
        }
        trigger_error("Model Does not exist");
    }
}

?>