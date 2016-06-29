<?php

class login_model extends Model
{

	public function __construct()
	{
		parent::__construct();
		echo "Login_Model called!";
	}

        public function run()
        {
            //instead of the hardcoded email and pass given write $_POST[""] variables applicable there
            
            echo "login model";
            
            $statement = $this->db->prepare("select * from fasho_user where email= :email AND password = :pass");
            $statement->execute(array(
                ':email'=>"jaspreetchhabra@gmail.com",
                ':pass'=>"abc"
            ));
            
            $count = $statement->rowCount();
            if($count > 0)
            {
                echo 'Logged In';
            }
            else
            {
                echo "Invalid credentials";
            }
            
        }
        
        
}


?>