<?php
namespace FRAMEWORKNS;

class loginController extends ControllerAbstract{
    public function __construct()
    {
        $pageinfo = explode('/', $_SERVER['PATH_INFO']);
        //check if page can be viewed
        $this->viewingAllowed(strtolower($pageinfo[1]),'index');
        Registry::get('errorhandler')->addPage('login');
        $this->createModel('loginModel');
    }
    public function start(){
    }

    //function for attempting signin
    public function signin(){
        Registry::get('errorhandler')->clearErrors('login');
        $data = $this->model->getRecord($_POST);
        if(empty($data)){
            Registry::get('errorhandler')->setError('login', 'Email or Password Incorrect');
            header('location: ../login');
        }
        else{
            Registry::set('role', 'LoggedIn');
            Registry::set('email',$data[0]['email']);
            Registry::get('errorhandler')->clearErrors('login');
            header('location: ../Profile');
        }
    }
}


?>