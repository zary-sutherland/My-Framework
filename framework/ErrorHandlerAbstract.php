<?php
namespace FRAMEWORKNS;

abstract class ErrorHandlerAbstract 
{

	protected $errors = array();	
	protected static $instance = null;
	abstract public static function getErrorHandlerSingleton();
	
    //get array of errors for page
	public function getErrors($page)
	{
		return $this->errors[$page];
    }
    
    public function clearErrors($page){
         $this->errors[$page] = array();
    }
    
    //create an error for page
	public function setError($page, $value)
	{
        if(isset($this->errors[$page])){
		array_push($this->errors[$page],$value);
        return true;
        }
        return false;
		
    }
    
    //add a page to the error handler array
    public function addPage($page){
        if(!isset($this->errors[$page])){
        $this->errors[$page] = array();
        return true;
        }
        return false;
    }
	
	
}