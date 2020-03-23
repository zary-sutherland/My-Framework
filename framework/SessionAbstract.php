<?php
namespace FRAMEWORKNS;

abstract class SessionAbstract{

    abstract public static function createSession();

	//kill the session
    public static function endSession()
	{
		session_unset();
		session_destroy();
	}
}

?>