<?php
namespace FRAMEWORKNS;

class signupModel implements ModelInterface{
    use traitDBConnector;
    public function getAllRecords(){

    }

    public function getRecord($recordIdentifier){
    }

    //insert new user into db
    public function insertRecord($columnInfo, $table){
        $name = $columnInfo['FullName'];
        $email = $columnInfo['Email'];
        $password = $columnInfo['Password'];
        $pdo = $this->getPDO();
        $sql = "insert into users values (:name,:email,:password)";


        $stmt = $pdo->prepare($sql);
        $result = $stmt->execute(['name'=> $name, 'email' => $email, 'password' => $password]);
        return $result;
    }

    public function updateRecord(){

    }

}

?>