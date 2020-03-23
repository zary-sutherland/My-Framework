<?php
namespace FRAMEWORKNS;

class ErrorHandler extends ErrorHandlerAbstract{
	protected $errors = array('validator'=>array());
	
	//create instance of singleton and save to registry if doesnt exist or return singleton in registry
	public static function getErrorHandlerSingleton()
	{
		if(Registry::get('errorhandler') == null)
		{
			self::$instance = new ErrorHandler();
			Registry::set('errorhandler', self::$instance);			
		}
		return Registry::get('errorhandler');
	}
}


?>