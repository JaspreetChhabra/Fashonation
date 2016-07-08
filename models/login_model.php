<?php

$mail = $_POST['mail'];
$pass =  $_POST['password'];
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
            
            $statement = $this->db->prepare("select * from nx9_users where email_id='".$_POST['mail']."' AND password='".$_POST['password']."'");
            //echo "select * from fasho_user where email='".$_POST['mail']."' AND password='".$_POST['password']."'";
           $statement->execute(array(
               ':email'=>$_POST['mail'],
               ':password'=>$_POST['password']
           ));
            $statement->execute();
            
            $count = $statement->rowCount();

           
            if($count > 0)
            {
                $a = $statement->fetchAll(PDO::FETCH_ASSOC);
                foreach ($a as $data) {
                    $_SESSION['user_id'] = $data['user_id'];
                    $_SESSION['user_fname'] = $data['user_name'];
                }
                //echo 'Logged In';
                //echo "ID is ".$_SESSION['user_id'];
                return "Success";
            }
            else
            {
                echo "select * from nx9_users where email_id=".$_POST['mail']." AND password=".$_POST['password'];
            }
            
        }
        
        
}


?>