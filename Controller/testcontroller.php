<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class test extends Controller{

    function __construct() {
     parent::__construct();
        
    }
    
    function index()
    {
        // $this->view->gethomeData = $this->model->gethomeData();
        // $this->view->getPopularProducts = $this->model->getPopularProducts();
        // $this->view->getNewArrivals = $this->model->getNewArrivals();
        // $this->view->getSpecials = $this->model->getSpecials();
        // $this->view->getBestSellers = $this->model->getBestSellers();
        $this->view->render("test");
    }
    
}