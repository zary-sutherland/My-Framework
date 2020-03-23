<?php
namespace FRAMEWORKNS;

class coursesModel implements ModelInterface{
    use traitDBConnector;
    //select all courses from db
    public function getAllRecords(){
        $pdo = $this->getPDO();
        $sql = "select course_name,faculty_dept_name,instructor_name,course_image,courses.course_id from courses,course_instructor,faculty_department,faculty_dept_courses,instructors where (courses.course_id = course_instructor.course_id) and (instructors.instructor_id = course_instructor.instructor_id) and (courses.course_id = faculty_dept_courses.course_id) and (faculty_department.faculty_dept_id = faculty_dept_courses.faculty_dept_id);";

        $stmt = $pdo->prepare($sql);
        $result = $stmt->execute();
        $courses = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $courses;

    }

    public function getRecord($recordIdentifier){

    }

    //insert course into db
    public function insertRecord($columnInfo, $table){
        $course = $columnInfo['course_id'];
        $email = $columnInfo['Email'];
        $pdo = $this->getPDO();
        $sql = "insert into user_courses values (:email,:course_id)";


        $stmt = $pdo->prepare($sql);
        $result = $stmt->execute(['email' => $email,'course_id' => $course]);
        return $result;
        
    }

    public function updateRecord(){

    }

}

?>