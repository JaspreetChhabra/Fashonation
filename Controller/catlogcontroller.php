<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class catlog extends Controller{

    function __construct() {
        parent::__construct();
    }

     function index()
    {
        $this->view->getProductInfo = $this->model->getProductInfo();
//        if(!strrchr($result, "Error"))
//        {
              $this->view->render("productcatlog");
//        }
//        else
//        {
//            echo "Some error has occured";
//        }
        
      
    }
//
//    function getProductInfo()
//    {
//        $this->model->run();
//    }
    
//    function run()
//    {
//    	$this->model->run();
//    }

}