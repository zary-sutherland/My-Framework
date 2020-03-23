<?php
namespace FRAMEWORKNS;

abstract class ViewAbstract{

    protected $header;
    protected $body;
    protected $footer;
    public function setHeader(string $headerFile){
        if(empty($headerFile)){
            trigger_error("headerfile must be set");
        }
        
        $this->header = $headerFile;
    }

    public function setBody(string $bodyFile){
        if(empty($bodyFile)){
            trigger_error("bodyfile must be set");
        }
        
        $this->body = $bodyFile;
    }

    public function setFooter(string $footerFile){
        if(empty($footerFile)){
            trigger_error("footerfile must be set");
        }
        
        $this->footer = $footerFile;
    }

    public function createModel($modelname){
        if(!isset($modelname)){
            trigger_error('must have a model name');
        }

        $this->model = ModelFactory::createModel($modelname);
    }

    //display appropriate templaye file
    public function display($file){
        $file = TEMPLATE_DIR.DS.$file;
        include($file);
    }

    abstract public function render();
}


?>