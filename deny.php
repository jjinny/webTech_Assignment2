<?php
require_once 'ClassUser.php';

$reg_user = new USER();

include('Signup.php');
$uname = $_GET['uname'];
$email = $_GET['email'];
   
   
   $message = "     
      Hello $uname,
      <br /><br />
      Sorry!<br/>
      Youe registration has been denied.<br/>
      ";
      
   $subject = "Registration Denied";
      
   $reg_user->send_mail($email,$message,$subject); 
?>