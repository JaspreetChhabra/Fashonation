<?php



class checkout extends Controller{
	
	function __construct(){
		parent::__construct();
		
	}
	

	function index()
	{
		$this->view->render("checkoutpage");
	}

}