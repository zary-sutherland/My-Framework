<?php
namespace FRAMEWORKNS;

class streamsModel implements ModelInterface{
    use traitDBConnector;
    //get all streams from db
    public function getAllRecords(){
        $pdo = $this->getPDO();
        $sql = "select stream_name,instructor_name,stream_image from streams,stream_instructor,instructors where (streams.stream_id = stream_instructor.stream_id) and (instructors.instructor_id = stream_instructor.instructor_id);";

        $stmt = $pdo->prepare($sql);
        $result = $stmt->execute();
        $streams = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $streams;
    }

    public function getRecord($recordIdentifier){

    }

    public function insertRecord($columnInfo, $table){
        
    }

    public function updateRecord(){

    }
}

?>