<?php

class registration extends Controller {

     function __construct() {
     parent::__construct();
        echo "Registration controller called";
    }
    
    function index()
    {
        $ans = $this->model->run();
        if($ans == "Success"){
			$_SESSION['registered'] = "registered";
        	
        	header('Location:'.url.'/home');
        }

    }
    

}

