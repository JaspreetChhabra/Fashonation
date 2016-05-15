<?php

$mail = $_GET['u_mail'];
$pass = $_GET['pwd'];

include_once './classes/User.php';

$login_object = new User();

$a = $login_object ->login_user($mail, $pass);

echo $a;
    

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

