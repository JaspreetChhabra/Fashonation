<?php

class Database extends PDO {

              
    function __construct() {
     
     $dbname = 'mysql:dbname=fashonat_main;host=localhost';
     $usr = "jse_root";
     $pass = "jse_root";
     
        parent::__construct($dbname, $usr, $pass);
    }

}