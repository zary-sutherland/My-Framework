<?php

namespace FRAMEWORKNS;

class Router extends RouterAbstract{

    protected $routeInfo;
    //automatically call the function to transform uri into its controller/action/params
    public function __construct(string $URI, string $role = "guest"){
        $this->routeInfo = $this->transformURI($URI,$role);
    }

    public function get_routeInfo(){
        return $this->routeInfo;
    }
    
}

?>