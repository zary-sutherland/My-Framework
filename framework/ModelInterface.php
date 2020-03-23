<?php
namespace FRAMEWORKNS;


interface ModelInterface {
    public function getAllRecords();

    public function getRecord(array $recordIdentifier);

    public function insertRecord(array $columnInfo, string $table);

    public function updateRecord();
    
}

?>