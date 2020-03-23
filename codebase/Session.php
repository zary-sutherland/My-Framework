<?php
namespace FRAMEWORKNS;
class Session extends SessionAbstract{

    //create instance of singleton and save to registry if doesnt exist or return singleton in registry
    public static function createSession(){
        if(Registry::get('session') == null){
            Registry::set('session',session_id());
        }
        return Registry::get('session');
    }
}

?>