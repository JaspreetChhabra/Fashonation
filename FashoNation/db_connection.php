<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of db_connection
 *
 * @author Gaurav
 */
class db_connection {
    
    private $db_obj;
    
    public function __construct(){
        //$this->db_obj = new db_connection();
        $this->get_conn_obj();
    }
    
    public function get_conn_obj(){
        return $this->db_obj;
    }
    
    
    
    
    
    
    //put your code here
}
