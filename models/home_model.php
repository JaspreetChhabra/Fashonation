<?php



class home_model extends Model
{
	public function __construct()
	{
		parent::__construct();
		echo "home model called";
	}

        
	public function gethomeData()
	{
		session_start();
		
		$_SESSION['session_id'] = date("Y-m-d H:i:s",time());

		$_SESSION['cart']=array();
		array_push($_SESSION['cart'], "123,45");

	}

        
}

?>