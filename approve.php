<?php
require_once 'ClassUser.php';

$reg_user = new USER();

include('Signup.php');
$uname = $_GET['uname'];
$email = $_GET['email'];
$code = $_GET['code'];
$id = $_GET['id'];
   
   $message = "     
      Hello $uname,
      <br /><br />
      Congratulations!<br/>
      The admin has alrealy approved your registration, please click following link to login<br/>
      <br /><br />
      <a href='http://localhost:8021/a2/verify.php?id=$id&code=$code'>Click HERE to Activate :)</a>
      <br /><br />
      Thanks！";
      
   $subject = "Registration Approved";
      
   $reg_user->send_mail($email,$message,$subject); 
?>