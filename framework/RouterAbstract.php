<?php
namespace FRAMEWORKNS;

abstract class RouterAbstract{
protected $model;
protected $view;
protected $controller;
protected $routeAction;
protected $routeParams = array();

abstract public function __construct(string $URI, string $role);

//determine if the URI has an appropriate route and setup the controller/action/params
public function transformURI(string $URI,string $role){

    $URI = strtolower($URI);
    $routeData = explode('/', $URI);
    array_shift($routeData);
    
    foreach($routeData as $key=>$value){
        $routeData[$key] = ltrim($value,'/');
    }
    $requestedPage = $routeData[0];
    array_shift($routeData);

    if(isset($routeData[0])){
        $this->routeAction = $routeData[0];
        array_shift($routeData);
    
        if(!empty($routeData)){
            foreach($routeData as $key=>$value){
            $this->routeParams[$key] = $value;
            }
        }
        else{
            $this->routeParams = null;
        }
    }
    else{
        $this->routeAction = null;
    }

    $routeArray = parse_ini_file(DATA_DIR.DS."routes.ini");
    
        if(array_key_exists($requestedPage,$routeArray)){
            $this->controller = $routeArray[$requestedPage];
        

        $val = array(
            'page'=> $requestedPage,
            'controller'=>$this->controller,
            'action'=>$this->routeAction,
            'params'=>$this->routeParams
        );
        return $val;
        }
        $val = array(
            'page'=> $requestedPage,
            'controller'=>"404page",
            'action'=>$this->routeAction,
            'params'=>$this->routeParams
        );
        return $val;

}
}

?>