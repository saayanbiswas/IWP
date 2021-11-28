<?php
include_once('../includes/connection.php');
include_once('../includes/classUser.php');
session_start();
$users= new User();
$id=$_POST['Userid'];
$pass=$_POST['Password'];
$email=$_POST['Email'];

$users = new User();

$user= $users->fetch_user($id);

if($user!=NULL)
{
    echo "USER ALREADY EXISTS";
}
else{
    $users->create($id,$pass,$email);
    echo "User account created successfully";
}
?>