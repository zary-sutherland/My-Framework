<?php
namespace FRAMEWORKNS;


class Registry implements RegistryInterface{

    protected static $instance = null;
    public function __construct(){}

    public function __clone(){}

    protected static $registryDefaults = array('session'=>null,
							 'validator'=>null,
                             'errorhandler'=>null,
                             'email'=>null,
                             'unenrollmentid'=>null,
                             'role'=>'guest'
                             );
                             
    static public function getRegistrySingleton(){
        if (!isset($_SESSION['registry'])){
            $_SESSION['registry'] = self::$registryDefaults;
            $session = Session::createSession();
            $errorhandler = ErrorHandler::getErrorHandlerSingleton();
            $validator = Validator::getValidatorSingleton();
			self::$instance = $_SESSION['registry'];
        }
        return $_SESSION['registry'];
    }

    static public function add(string $key, $value){
        $key = strtolower($key);
        if(!isset($key)){
            return false;
        }
        if(isset($_SESSION['registry'][$key])){
            return false;
        }

        $_SESSION['registry'][$key] = $value;
        return true;

    }
    static public function set(string $key, $value){
        $key = strtolower($key);
        if (!isset($key)){
            return false;
        }
        $_SESSION['registry'][$key] = $value;
        return true;
    }
    static public function get(string $key){
        $key = strtolower($key);
        if(!isset($key)){
            return false;
        }
        return  $_SESSION['registry'][$key];
    }

}


?>