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
        $this->view->getBrands = $this->model->getBrands();
//        if(!strrchr($result, "Error"))
//        {
              $this->view->render("productcatlog");
//        }
//        else
//        {
//            echo "Some error has occured";
//        }
        
      
    }

    function getProductFromBrand($id = null)
    {
    	if($id == null)
    	{
    		$this->view->getProductFromBand = null;
    	}
    	else
    	{
    	$this->view->getProductFromBand = $this->model->getProductFromBand($id);	
    	}
    	
    	$this->view->render("getProductBrand",true);
    }

     function viewDesigners($id = null){
        

        if($id == null)
        {
            $this->view->getDesignerInfo = null;
             $this->view->render("404");
        }
        else
        {
        $this->view->getDesignerInfo = $this->model->getDesignerInfo($id);    
        $this->view->render("shopbydesigner");
        }
        
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