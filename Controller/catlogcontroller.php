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

function getFilteredPrice($range1 , $range2)
{
   
       $this->view->getProductFromBand  =  $this->model->getFilteredPriceInfo($range1,$range2); 
       print_r($this->view->getProductFromBand);
       // $this->view->render("getProductBrand",true);
}

    function getFilteredProducts($id , $value = null)
    {
        
       if($value == null)
       {
        $this->view->getProductFromBand  =  $this->model->getFilteredProductInfo($id,0);         
       }
       else
       {
        $this->view->getProductFromBand  =  $this->model->getFilteredProductInfo($id,$value); 
       }

      // $this->view->getProductFromBand  =  $this->model->getFilteredProductInfo($id,$value); 
       $this->view->render("getProductBrand",true);
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


    function productDetails($id = null){
        

        if($id == null)
        {
            $this->view->fetchProductDetails = null;
             $this->view->render("404");
        }
        else
        {
        $this->view->fetchProductDetails = $this->model->fetchProductDetails($id);    
        $this->view->render("productDeatils");
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