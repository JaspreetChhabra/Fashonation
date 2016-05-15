<?php
class Database
{
    public $db_host;
    public $db_username;
    public $db_pass;
    public $db;
    static $_LINK;
    
      public function __construct() {
                    $db_host = "localhost";
                    $db_username = "root";
                    $db_pass ="";
                    $db = "fashonat_main";
                      $this->connect();  
                }
    
                public function connect(){
                    
                    
                    
                    
                    $con = new mysqli("localhost" ,"root","","fashonat_main");
                    if($con->connect_error)
                    {
                        printf("conn failed".$con->connect_error);
                    }
                    
                    $query="select * from `product_list`";
                    $res = $con->query($query);
                    if($res === false)
                    {
                        printf("conn failed".$con->connect_error);
                    }
                    else
                    {
                        $res->data_seek(0);
                        while ($row = $res->fetch_assoc())
                        {
                            echo $row['product_id'];
                        }
                    }
//                    if(!mysqli_connect_errno())
//                    {
//                        printf("connected");
//                        
//                    }
//                    else
//                    {
//                        printf(mysqli_connect_error());
//                    }
//                    
//                    
//                    if ($result = $con->query("SELECT * FROM product_list")) {
//                    printf($result->num_rows);
//
//                    /* free result set */
//                    $result->close();
//                    }
//                    
                  //  $result = $con->query("select * from product_list");
                    
//                    
//                        $result =mysqli_query($this->con, "select * from product_list");
//                    if(mysqli_num_rows($result) > 0)
//                    {echo "yes";}
//                    else
//                    {echo "No".mysqli_error($result);}
//return $this->con;
                }

                public static function disconnect()
    {
        mysqli_close(self::$_LINK);
    }

}


$dbconnn = new Database();


?>
