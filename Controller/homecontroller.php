<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Home extends Controller{

    function __construct() {
     parent::__construct();
        
    }
    
    function index()
    {
        $this->view->gethomeData = $this->model->gethomeData();
        $this->view->render("home");
    }
    
    function run()
    {
        $this->model->run();

    }
    
    

}