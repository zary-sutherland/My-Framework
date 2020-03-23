<?php
namespace FRAMEWORKNS;

abstract class ValidatorAbstract{
    protected static $instance = null;

    abstract static public function getValidatorSingleton();

    //check if string
    public function valueIsString($value){
        if(!is_string($value)){
            trigger_error($value.' must be of type string');
            return false;
        }
        return true;
    }

    //check if numeric
    public function valueIsNumeric($value){
        if(!is_numeric($value)){
            trigger_error($value.' must be numeric');
            return false;
        }
        return true;
    }

    //check if email is in email format
    public function valueIsEmailFormat($value){
        $value = filter_var($value, FILTER_SANITIZE_EMAIL);
        if(!filter_var($value,FILTER_VALIDATE_EMAIL)){
            trigger_error($value.' must be in the email format');
            return false;
        }
        return true;
        
    }

    //trim value for database
    public function formatForDB($value){
        if(!isset($value)){
            trigger_error('data cannot be empty for database');
            return;
        }
        trim($value);
        return $value;
    }

    //check if password is appropriate length
    public function validatePassword($pass){
        if(strlen($pass) < 8){
            return false;
        }
        return true;
    }
}


?>