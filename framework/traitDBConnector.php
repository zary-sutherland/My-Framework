<?php
namespace FRAMEWORKNS;

trait traitDBConnector {
    //connect to the DB and return appropriate PDO
    public function getPDO(){
        $pdo = new \PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS);
        return $pdo;
    }
}
?>