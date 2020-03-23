<?php
namespace FRAMEWORKNS;

class profileModel implements ModelInterface{
    use traitDBConnector;
    public function getAllRecords(){

    }

    public function getRecord($recordIdentifier){

    }

    public function insertRecord($columnInfo, $table){
        
    }

    public function updateRecord(){

    }

    //get students enrolled courses
    public function getEnrolled($email){
        $pdo = $this->getPDO();
        $sql = "select course_name,faculty_dept_name,instructor_name,course_image,courses.course_id from courses,course_instructor,faculty_department,faculty_dept_courses,instructors,users,user_courses where (courses.course_id = course_instructor.course_id) and (instructors.instructor_id = course_instructor.instructor_id) and (courses.course_id = faculty_dept_courses.course_id) and (faculty_department.faculty_dept_id = faculty_dept_courses.faculty_dept_id) and (users.email = user_courses.email) and (courses.course_id = user_courses.course_id) and (users.email = :email);";

        $stmt = $pdo->prepare($sql);
        $result = $stmt->execute(['email' => $email]);
        $enrolled= $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $enrolled;
    }
}

?>