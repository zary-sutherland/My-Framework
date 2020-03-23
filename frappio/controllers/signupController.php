<?php
namespace FRAMEWORKNS;

class signupController extends ControllerAbstract{

    public function __construct()
    {
        $pageinfo = explode('/', $_SERVER['PATH_INFO']);
        //check if page can be viewed
        $this->viewingAllowed(strtolower($pageinfo[1]),'index');
        Registry::get('errorhandler')->addPage('signup');
        $this->createModel('signupModel');
    }
    public function start(){

    }

    //acction to attempt to register user
    public function register(){
        Registry::get('errorhandler')->clearErrors('signup');
        $validator = Registry::get('validator');
        $errorhandler = Registry::get('errorhandler');
        $confirm = false;
        $email = trim($_POST['Email']);
        if (!isset($_POST['FullName'])){
            $errorhandler->setError('signup', 'Full Name is required'); 
        }
        if (!$validator->valueIsString($_POST['FullName'])){
            $errorhandler->setError('signup', 'Full Name is not a string');
        }
        
        if (!isset($_POST['Email'])){
            $errorhandler->setError('signup', 'Email is required'); 
        }
        if (!$validator->valueIsEmailFormat($_POST['Email'])){
            $errorhandler->setError('signup', 'Email is invalid format');
        }

        if(isset($_POST['agree'])){
            if($_POST['agree'] == 'on'){
                if(isset($_POST['Password']) && isset($_POST['confirmPass'])){
                    if (!$validator->valueIsString($_POST['Password']) && !$validator->valueIsString($_POST['Password'])){
                        $errorhandler->setError('signup', 'Passwords must be strings');
                    }
                    else{
                        if($_POST['Password'] === $_POST['confirmPass']){
                            if($validator->validatePassword($_POST['Password']))
                                {
                                    if(empty($errorhandler->getErrors('signup'))){
                                    $confirm = $this->model->insertRecord($_POST,'users');
                                    }
                                }
                                else{
                                    $errorhandler->setError('signup', 'Password should be atleast 8 characters');
                                }
                            }
                            else{
                                $errorhandler->setError('signup', 'Password should match the confirmation password');  
                            }
                        }
                    }
                }
                else{
                    $errorhandler->setError('signup', 'Password or Confirm Password are required');  
                }
            }
            else{
                $errorhandler->setError('signup', 'You must agree to the terms of this website to register');  
            }
            
        if($confirm == true){
            Registry::set('role', 'LoggedIn');
            Registry::set('email', $email);
            header('location: ../Profile');
        }
        else{
            header('location: ../Signup');
        }
    }
}


?>