<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class View {

    function __construct() {
    }
    
    public function render($name, $param1 = false)
	{
		
        
			require 'View/header.php';
			require 'View/' . $name . '.php';
//                        call_user_method($name, $param1);
			require 'View/footer.php';	
		
	}

}