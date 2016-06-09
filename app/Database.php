<?php

class Database extends PDO {

              
    function __construct() {
     
     $dbname = 'mysql:dbname=fashonat_main;host=localhost';
     $usr = "root";
     $pass = "";
     
        parent::__construct($dbname, $usr, $pass);
    }

}