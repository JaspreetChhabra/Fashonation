<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of productHandler
 *
 * @author Gaurav
 */
include_once './db_connection.php';
include_once './classes/Database.php';


class productHandler {
private $ob;
private $con;
 public function __construct() {
 
     $this->ob = new db_connection();
     $this->con = $this->ob->get_conn_obj();
     
     
 }




    
     public function getAllProducts(){
         $con = new mysqli("localhost" ,"root","","fashonat_main");
         $q = "select * from product_list";
          $all_products = $con->query($q);
        return $all_products;
    }
    
    
    public function getImage($id){
        $con = new mysqli("localhost" ,"root","","fashonat_main");
         $q = "select pattern_id from product_patterns where product_id=$id";
         $pattern = $con->query($q);
         $img = $pattern->fetch_assoc();
         
         
      $pid = $img['pattern_id'];
        $q1 = "select * from product_pattern_images where pattern_id=$pid";
        //echo $q1;
         $image1 = $con->query($q1);
        $image = $image1->fetch_assoc();
         //echo "Image is ".$image['image1_url'];
         
         
        return $image;
    }
    //put your code here
}
