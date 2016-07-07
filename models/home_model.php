<?php

session_start();

class home_model extends Model
{
	public function __construct()
	{
		parent::__construct();
		echo "home model called";
	}

        
	public function gethomeData()
	{
		
		if(! isset($_SESSION['session_id'])){
			$_SESSION['session_id'] = date("Y-m-d H:i:s",time());
			$_SESSION['cartCount'] = 0;
			$_SESSION['cart']=array();
			$_SESSION['size']=array();
		}
	}

	public function getPopularProducts()
	{
		$stmt = $this->db->prepare("select * from products LIMIT 4");
		$stmt->execute();
		if($stmt->rowCount() > 0)
		{
		return $stmt->fetchAll();
		}
		else
		{
		return "Error!";
		}
	}


	public function getNewArrivals()
	{
		$stmt = $this->db->prepare("select * from products Order by product_id DESC LIMIT 4");
		$stmt->execute();
		if($stmt->rowCount() > 0)
		{
		return $stmt->fetchAll();
		}
		else
		{
		return "Error!";
		}
	} 


	public function getBestSellers()
	{
		$stmt = $this->db->prepare("select * from products LIMIT 4");
		$stmt->execute();
		if($stmt->rowCount() > 0)
		{
		return $stmt->fetchAll();
		}
		else
		{
		return "Error!";
		}
	} 



	public function getSpecials()
	{
		$stmt = $this->db->prepare("select * from products LIMIT 4");
		$stmt->execute();
		if($stmt->rowCount() > 0)
		{
		return $stmt->fetchAll();
		}
		else
		{
		return "Error!";
		}
	} 
}


?>