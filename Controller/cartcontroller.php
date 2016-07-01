<?php

class cart extends Controller {

     function __construct() {
     parent::__construct();
        //echo "cart controller called";
    }
    
    function index()
    {
    	 $this->view->getCartProducts = $this->model->getCartProducts();
		 $this->view->render("cart");
    }

    function addToCart($data = null)
    {
    	if($data == null)
    	{
    		$this->view->addToCart1 = null;
    	}
    	else
    	{  
    		$this->view->addToCart1 = $this->model->addToCart1($data);	
    	}

    	
    	$this->view->render("ajaxcart",true);
    }

    function returnCartSession()
    {
        
            $this->view->returnCartSession = $this->model->returnCartSession();  
        
        
        $this->view->render("ajaxDropdownCart",true);
    }
    

    function deleteCartItem($id = null)
    {
        // $id = $this->input->post('id');
        if($id == null)
        {
            $this->view->itemId = null;
        }
        else
        {  
            $this->view->itemId = $this->model->deleteCartItem($id);  
        }

        
        $this->view->render("ajaxDeleteCart",true);
    }    
}
?>
