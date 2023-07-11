<?php

require 'model/userModel.php';

class userController {
    private $userModel;

    public function __construct() {
        $this->userModel = new userModel();
    }

    public function homePage(){
        require "view/homePage.php";
    }

    public function DatabasePage(){
        require 'view/createDB.php';
    }

    public function creatingDatabase($databaseName){
        $database =  $this->userModel->creatingDatabase($databaseName);
        header('location:/');
    }

    public function getingDatabase(){
        $allDatabase = $this->userModel->getingAll_database();
        require 'view/createTable.php';
    }

    public function createTable($data){
        $database_name = $data['databases'];
        $table_name = $data['tableName'];
        // $rowName = $data['columnName'];
        // $dataTypes = $data['datatypes'];

        // print_r($data);
        $table = $this->userModel->createTable_name($database_name,$table_name);

        $datalength = count($data['columnName']);
        for($i=0;$i<$datalength;$i++){
            $this->userModel->addTable_column($database_name,$table_name,$data['columnName'][$i],$data['datatypes'][$i]);
        }

        header('location:/');
        
    }

    public function getTables($getvalue){
        if($getvalue){
            $values = $this->userModel->getTables($getvalue['databese']);
            $val = $values[0];
            require 'view/addRow.php';
        }
        else{
            $allDatabase = $this->userModel->getingAll_database();
            require 'view/addRow.php';
        }
    }


}

