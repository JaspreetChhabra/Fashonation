<?php


class registration_model extends Model
{
      
	public function __construct()
	{
		parent::__construct();
		echo "Registration_Model called!";
	}

        public function run()
        {
            //instead of the hardcoded email and pass given write $_POST[""] variables applicable there
            
            echo "Registration model";
            
$statement = $this->db->prepare("insert into fasho_user values (NULL,'".$_POST['username']."','".$_POST['email']."','".$_POST['pass']."','user')");
            //echo "select * from fasho_user where email='".$_POST['mail']."' AND password='".$_POST['password']."'";
           // $statement->execute(array(
           //     ':email'=>$_POST['mail'],
           //     ':password'=>$_POST['password']
           // ));
            $statement->execute();
            
            if (!$statement->execute()) {
                    print_r($statement->errorInfo());
                }
                else
                {   
                    return "Success";
                }
            //$count = $statement->rowCount();
           
            // if($count > 0)
            // {
            //     echo 'Logged In';
            //     header('location: ../home');
            // }
            // else
            // {
            //     echo "/n/nInvalid credentials ";
            // }
            
        }
        
        
}


?>