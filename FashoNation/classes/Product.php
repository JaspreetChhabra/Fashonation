<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Product
 *
 * @author Gaurav
 */

class Product {
    //put your code here
    
    public function getAllProducts(){
        $all_products = mysqli_query($this->con, "select * from product_list");
        return $all_products;
    }
    
    
    public function getImage($id){
        $pattern = mysqli_fetch_assoc(mysqli_query($this->con, "select pattern_id from product_patterns where product_id=$id"));
        $image = mysqli_fetch_assoc(mysqli_query($this->con, "select image1_url from product_pattern_images where pattern_id=".$pattern['patternid']));
        return $image;
    }
    
}
