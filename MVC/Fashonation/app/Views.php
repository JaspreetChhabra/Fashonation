<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class View {

    function __construct() {
    }
    
    public function render($name, $noInclude = false)
	{
		if ($noInclude == true) {
			require 'View/' . $name . '.php';	
		}
		else {
//			require 'View/header.php';
			require 'View/' . $name . '.php';
//			require 'View/footer.php';	
		}
	}

}