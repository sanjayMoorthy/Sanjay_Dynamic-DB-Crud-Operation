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

    public function tablePage(){
        require 'view/createTable.php';
    }

    public function getingDatabase(){
        $allDatabase = $this->userModel->getingAll_database();
        require 'view/createTable.php';
    }
}
