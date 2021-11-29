<?php
include_once('../includes/connection.php');
include_once('../includes/classUser.php');
session_start();
$users= new User();
$id=$_POST['Userid'];
$pass=$_POST['Password'];
$email=$_POST['Email'];

$users = new User();
require('./navbar.php');
$user= $users->fetch_user($id);
if($user!=NULL && $user['User_password']==$pass && $user['User_email']==$email){?>
    <center><h1 style="color:Orange">Existing User, Please Login instead of Signup</h1></center>
<?php
}
else if($user!=NULL){?>
    <center><h1 style="color:brown">User ID already Exists</h1></center>
<?php
}
else{
    $users->create($id,$pass,$email);?>

    <center><h1 style="color:green">Account Creation Successful</h1></center>
<?php
}
?>
