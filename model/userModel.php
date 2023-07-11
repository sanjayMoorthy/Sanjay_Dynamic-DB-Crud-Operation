<?php

require 'connection.php';

class userModel extends DB
{

    public function creatingDatabase($dbName){
        $db_name = $dbName['createDb'];
        $this->db->query("CREATE DATABASE $db_name");
    }

    public function getingAll_database(){
        $alldatabases = $this->db->prepare("SHOW DATABASES");
        $alldatabases->execute();
        $databases = $alldatabases->fetchAll(PDO::FETCH_OBJ);
        return $databases;
    }

    public function createTable_name ($dataBaseName,$table_name){
        // print_r($dataBaseName);
        // $database_name = $data['databases'];
        // $table_name = $data['tableName'];

        // print_r($dataBaseName);

        $this->db->query("
        USE $dataBaseName;
        CREATE TABLE $table_name (
        id int auto_increment,
        created_at timestamp,
        updated_at timestamp,
        primary key (id)) ");


    }

    public function addTable_column($database_name,$table_name,$colunName,$datatypes){
        // print_r($colunName);
        $this->db->query("
        USE $database_name;
        ALTER TABLE $table_name ADD COLUMN $colunName $datatypes AFTER id;");


    }

    public function getTables($dbName){
        return $this->db->query("SHOW TABLES FROM $dbName")->fetchAll(PDO::FETCH_OBJ);
    }



}
