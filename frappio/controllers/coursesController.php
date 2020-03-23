<?php
namespace FRAMEWORKNS;

class coursesController extends ControllerAbstract{

    public function __construct()
    {
        $pageinfo = explode('/', $_SERVER['PATH_INFO']);
        //check if page can be viewed
        $this->viewingAllowed(strtolower($pageinfo[1]),'index');
        Registry::get('errorhandler')->addPage('courses');
        $this->createModel('coursesModel');
    }
    public function start(){

    }

    //function for attempting to enroll student
    public function enroll($courseid){
        Registry::get('errorhandler')->clearErrors('courses');
        $email = Registry::get('email');
        $validator  = Registry::get('validator');
        $courseidval = $validator->formatForDB($courseid[0]);
        $check1 = $validator->valueIsString($courseidval);
        $email = $validator->formatForDB($email);
        $check2 = $validator->valueIsEmailFormat($email);
        if($check1 && $check2){
        $enrollmentInfo = ['course_id' => $courseidval, 'Email'=> $email];
        $confirm = $this->model->insertRecord($enrollmentInfo,'user_courses');
        }

        if($confirm == true){
            Registry::get('errorhandler')->clearErrors('courses');
            header('location: ../../Profile');
        }
        else{
            Registry::get('errorhandler')->setError('courses', 'Could not register for that course');
            header('location: ../../Courses');
        }
    }
}


?>