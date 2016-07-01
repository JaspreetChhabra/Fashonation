<?php
class catlog_model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

        
	public function getProductInfo()
	{
		$stmt = $this->db->prepare("select product_name,product_id,product_mrp,product_selling_price from products");
                //$stmt->execute();
                if (!$stmt->execute()) {
				    print_r($stmt->errorInfo());
				}
				else
				{
					if($stmt->rowCount() > 0)
	                {
	                	echo "Success!!!";
	                    return $stmt->fetchAll(PDO::FETCH_ASSOC);

	                }
	                else
	                {
	                	echo "Fail!!";
	                    return "Error!";
	                }	
				}
                
	}

    public function getBrands()
    {
    	$stmt = $this->db->prepare("SELECT brand_id,totalproducts,brandname FROM product_designer_brand");
    	if(!$stmt->execute())
    	{
    		print_r($stmt->errorInfo());
    	}
    	else
    	{
    		if($stmt->rowCount() > 0)
    		{
    			return $stmt->fetchAll(PDO::FETCH_ASSOC);
    		}
    		else
    		{
    			return "Error";
    		}
    	}
    } 


    public function getProductFromBand($id)
   	{
   		$stmt = $this->db->prepare("SELECT product_id,product_name,product_mrp,product_selling_price FROM products where brand_id = ".$id);
   		if($stmt->execute())
    	{
    		if($stmt->rowCount() > 0)
    		{
    			return $stmt->fetchAll(PDO::FETCH_ASSOC);
    		}
    		else
    		{
    			return "Error";
    		}
    	}
    	else
    	{
    		return "Error";
    		//print_r($stmt->errorInfo());
    	}
    	
   	}

    public function getDesignerInfo($id){
        
        $stmt = $this->db->prepare("SELECT brand_id,brandimg,brandname from product_designer_brand where brand_id=".$id);
        if($stmt->execute())
        {
            if($stmt->rowCount() > 0)
            {
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
            else
            {
                return "Error";
            }
        }
        else
        {
            return "Error"; 
        }



    }



}

?>