<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author Gaurav
 */
class User {
    
    
     private $db_host = "localhost";
            private $db_username = "root";
            private $db_pass ="";
            private $db = "fashonat_main";
    
    public $con;
    
    
    public function __construct() {
        $this->con = mysqli_connect($this->db_host , $this->db_username , $this->db_pass,$this->db);
                }
                
                
    public function login_user($email_id,$password)
            {
        
//			$md1 = md5($password);
//                        $md2 = md5($md1);
        
$md2 = $password;
                        //echo "select * from user where U_mail='$email_id' and u_pass = '$md2'";
                $login = mysqli_query($this->con,"select * from fasho_user where email='$email_id' and password = '$md2'");
                    
                if(mysqli_num_rows($login) == 1)
                {
                    $data = mysqli_fetch_assoc($login);
                    session_start();
                    $_SESSION['uID'] = $data['user_id'];
                    $_SESSION['u_name'] = $data['username'];
                    return "Success";
                    //Database::disconnect();

                }
                else
                {
                    return "fail".mysqli_error();
                    //Database::disconnect();
                }
            }            
    //put your code here
            
}

//
//$login_object = new User();
//
//$login_object->login_user("gaurav.majmudar94@gmail.com" , "gaurav");

