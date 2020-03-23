<?php
namespace FRAMEWORKNS;

class loginModel implements ModelInterface{
    use traitDBConnector;
    public function getAllRecords(){

    }

    public function getRecord($recordIdentifier){
        $email = $recordIdentifier['Email'];
        $password = $recordIdentifier['Password'];
        $pdo = $this->getPDO();
        $sql = "select email,name from users where email=:email and password = :password";

        $stmt = $pdo->prepare($sql);
        $result = $stmt->execute(['email' => $email, 'password' => $password]);
        $data = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $data;
    }

    public function insertRecord($columnInfo, $table){
        
    }

    public function updateRecord(){

    }

}

?>