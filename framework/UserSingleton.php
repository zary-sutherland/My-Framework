<?php
namespace FRAMEWORKNS;
class UserSingleton {
    protected static $props = array();
    protected static $instance;
    private function __construct() {}
    private function __clone() {}

    public static function getSingletonInstance()
	{
		if(Registry::get('user') == null){

			self::$instance = new UserSingleton();
			Registry::set('user', self::$instance);
		}
		return Registry::get('user');
    }
    
    static public function setProperty($key, $val) {
        self::$props[$key] = $val;
    }

    static public function getProperty($key) {
        return self::$props[$key];
    }
}


?>