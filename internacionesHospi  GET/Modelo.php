<?php

class Modelo{
    protected $db;

    public function __construct($db){
        $this->db =  new PDO('mysql:host=localhost;dbname=db_hospital;charset=utf8', 'root', '');
    }
}