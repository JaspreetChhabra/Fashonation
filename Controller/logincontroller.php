<?php

class login extends Controller {

     function __construct() {
     parent::__construct();
        echo "Login controller called";
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

