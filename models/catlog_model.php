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
		$stmt = $this->db->prepare("select * from product_list");
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