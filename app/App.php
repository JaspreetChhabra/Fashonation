<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class App {
    
    private $controller = "home";
    private $method = "index";
    private $params = [];
    
    function __construct() {
        //echo "Welcome to this page your url is :".$_GET['url'];
        $this->init();
    }

    function init() {

        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = filter_var(rtrim($url, '/'), FILTER_SANITIZE_URL) ;
        $url = explode('/', $url);
        // print_r($url);
        //print_r($url);

//        if (empty($url[0])) {
//            require 'Controller/home.php';
//            $this->controller = new $this->controller;
//            $this->controller->$this->method;
//            return false;
//        }
            $file = 'Controller/' . $url[0] . 'controller.php';
            if (file_exists($file)) {
                $this->controller = $url[0];
            }
            elseif(!empty($url[0]))
            {
                $this->controller = "error";
            }
            require_once 'Controller/' . $this->controller . 'controller.php';
            $this->controller = new $this->controller;
            $this->controller->loadModel($url[0]);        
            unset($url[0]);
            

        
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        
        $this->params = $url ? array_values($url) : [];
        call_user_func_array([$this->controller,  $this->method], $this->params);
        
        
//        if (isset($url[2])) {
//			if (method_exists($this->controller, $url[1])) {
//				$this->controller->{$url[1]}($url[2]);
//			} else {
//				$this->error();
//                                return false;
//			}
//		} else {
//			if (isset($url[1])) {
//				if (method_exists($this->controller, $url[1])) {
//					$this->controller->{$url[1]}();
//				} else {
//					$this->error();
//                                        return false;
//				}
//			} 
//		}
    }
    
//    function error() {
//    require_once 'Controller/errorcontroller.php';
//    $this->controller = new errcontroller();
//    $this->controller->index();
//    return false;
//    }
}


