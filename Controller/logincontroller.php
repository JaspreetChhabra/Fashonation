<?php

class login extends Controller {

     function __construct() {
     parent::__construct();
        echo "Login controller called";
    }
    
    function index()
    {
        $this->model->run();
    }

    function run()
    {
        $this->model->run();
    }
    


}

