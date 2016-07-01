<?php

session_start();

class test_model extends Model
{
	public function __construct()
	{
		parent::__construct();
		echo "test model called";
	}

 	       
}

?>