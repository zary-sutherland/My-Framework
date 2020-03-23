<?php
namespace FRAMEWORKNS;

class indexModel implements ModelInterface{
    use traitDBConnector;
    public function getAllRecords(){

    }

    public function getRecord($recordIdentifier){

    }

    public function insertRecord($columnInfo, $table){
        
    }

    public function updateRecord(){

    }

    //get courses based on popularity
    public function getPopular(){
        $pdo = $this->getPDO();
        $sql = "select course_name,instructor_name,course_image from courses,course_instructor,instructors where (courses.course_id = course_instructor.course_id) and (instructors.instructor_id = course_instructor.instructor_id) order by courses.course_access_count desc limit 8;";

        $stmt = $pdo->prepare($sql);
        $result = $stmt->execute();
        $popular = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $popular;

    }

    //get courses based on recommendation
    public function getRecommended(){
        $pdo = $this->getPDO();
        $sql = "select course_name,instructor_name,course_image from courses,course_instructor,instructors where (courses.course_id = course_instructor.course_id) and (instructors.instructor_id = course_instructor.instructor_id) order by courses.course_recommendation_count desc limit 8;";

        $stmt = $pdo->prepare($sql);
        $result = $stmt->execute();
        $recommended = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $recommended;
    }
}

?>