<?php
class catlog_model extends Model
{
	public function __construct()
	{
		parent::__construct();
		echo "catlog model called";
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

        
}

?>