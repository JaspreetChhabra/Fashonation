<?php
session_start();

class cart_model extends Model
{
      
	public function __construct()
	{
		parent::__construct();
		//echo "cart_Model called!";
	}

    public function getCartProducts()
	{
		$stmt = $this->db->prepare("select user_cart.cart_id,user_cart.user_id, user_cart.product_id,user_cart.product_qty,product_list.product_name,product_list.product_cost from user_cart INNER JOIN product_list ON user_cart.product_id=product_list.product_id where user_id=107");
                $stmt->execute();
                if($stmt->rowCount() > 0)
                {
                   //$_SESSION['name'] = date("Y-m-d H:i:s",time());
                    return $stmt->fetchAll();

                }
                else
                {
                    return "Error!";
                }
	}

    public function addToCart1($data){

        $inputData = base64_decode($data);
        $inputData1 = explode(",",$inputData);
        $flag = 1;

        if(!$_SESSION['cart']){
            array_push($_SESSION['cart'],base64_decode($data));
            return 0;
        }
        else{

            foreach ($_SESSION['cart'] as $value) {
                
                $decodedData1 = explode(",",$value);

                if($inputData1[0] == $decodedData1[0]){
                    return 1;
                }
                else{
                    $flag = 0;
                }
            }

            if($flag == 0){
                array_push($_SESSION['cart'],base64_decode($data));
                return 0;
            }

        
        }

    }

    public function returnCartSession(){
        return 1;
    }

    public function deleteCartItem($id){

        if (($key = array_search(intval($id), $_SESSION['cart'])) !== false) {
            unset($_SESSION['cart'][$key]);
            return intval($id);
        }
        else{
            return 0;
        }
    }
}

?>
