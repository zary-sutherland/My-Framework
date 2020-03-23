<?php
namespace FRAMEWORKNS;

class questionunenrollModel implements ModelInterface{
    use traitDBConnector;
    public function getAllRecords(){

    }

    public function getRecord($recordIdentifier){

    }

    public function insertRecord($columnInfo, $table){
        
    }

    public function updateRecord(){

    }

    //get the course looking to be unenrolled from
    public function getEnrolled($email){
        $pdo = $this->getPDO();
        $sql = "select course_name,faculty_dept_name,instructor_name,course_image,courses.course_id from courses,course_instructor,faculty_department,faculty_dept_courses,instructors,users,user_courses where (courses.course_id = course_instructor.course_id) and (instructors.instructor_id = course_instructor.instructor_id) and (courses.course_id = faculty_dept_courses.course_id) and (faculty_department.faculty_dept_id = faculty_dept_courses.faculty_dept_id) and (users.email = user_courses.email) and (courses.course_id = user_courses.course_id) and (users.email = :email) and (courses.course_id = :courseid);";

        $stmt = $pdo->prepare($sql);
        $unenrollmentid = Registry::get('unenrollmentid');
        $result = $stmt->execute(['email' => $email, 'courseid'=>$unenrollmentid[0]]);
        $enrolled= $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $enrolled;
    }
    //remove course to unenroll from from db
    public function unenroll($recordIdentifier){
        $pdo = $this->getPDO();
        $sql = "delete from user_courses where email = :email and course_id = :courseid";
        $stmt = $pdo->prepare($sql);
        $result = $stmt->execute(['email' => $recordIdentifier['email'], 'courseid'=> $recordIdentifier['courseid']]);
        return $result;
    }
}

?>