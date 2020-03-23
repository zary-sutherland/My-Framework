<?php
namespace FRAMEWORKNS;

class Validator extends ValidatorAbstract{

	//create instance of singleton and save to registry if doesnt exist or return singleton in registry
    public static function getValidatorSingleton()
	{
		if(Registry::get('validator') == null)
		{
			self::$instance = new Validator();
			Registry::set('validator', self::$instance);			
		}
		return Registry::get('validator');
	}
}

?>