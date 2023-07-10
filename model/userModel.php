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
}
