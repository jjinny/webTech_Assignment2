<?php
session_start();
require_once 'ClassUser.php';
$user = new USER();

if(!$user->is_logged_in())
{
 $user->redirect('Index.php');
}

if($user->is_logged_in()!="")
{
 $user->logout(); 
 $user->redirect('Index.php');
}
?>