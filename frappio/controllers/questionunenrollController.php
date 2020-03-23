<?php
namespace FRAMEWORKNS;

class questionunenrollController extends ControllerAbstract{

    public function __construct()
    {
        $pageinfo = explode('/', $_SERVER['PATH_INFO']);
        //check if page can be viewed
        $this->viewingAllowed(strtolower($pageinfo[1]),'index');
        $this->createModel('questionunenrollModel');
    }
    public function start(){

    }
    //pass id of course to be unenrolled from to registry
    public function unenrollsetup($unenrollmentid){
        Registry::set('unenrollmentid',$unenrollmentid);
        header('Location: ../../questionunenroll');
    }

    //unenroll from appropriate class;
    public function unenroll($params){
        if(isset($params[1])){
            if($params[1] == 'ok'){
                $identifier = ['email'=> Registry::get('email'), 'courseid' => $params[0]];
                $result =  $this->model->unenroll($identifier);
            }
            if($result){
                Registry::set('unenrollmentid', null);
                header('Location: ../../../unenrollconfirmed');
            }
            else{
                Registry::set('unenrollmentid', null);
                header('Location: ../../../questionunenroll');
            }
        }
    }
}


?>