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
		if($param1 == false)
		{
			require 'View/header.php';
			require 'View/' . $name . '.php';
    		require 'View/footer.php';	
		
		}
        else
        {
        		require 'View/' . $name . '.php';
    	
        }
		
	}

}