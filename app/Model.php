<?php

class Model
{
	public function __construct()
	{
		echo "Model class called";
		//database connection to be done here
                $this->db = new Database();
                
	}
}


?>