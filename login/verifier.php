 <?php
include_once('../includes/connection.php');
include_once('../includes/classUser.php');
session_start();

$id=$_POST['Userid'];
$pass=$_POST['Password'];
$users = new User();

$user= $users->fetch_user($id);

if($user!=NULL && $pass==$user['User_password'])
{
    $_SESSION['user_id'] = $user['User_id'];
    $_SESSION['login']=True;
    header('Location:../home/home.php');
}
else{
    require('./navbar.php');?>

    <center><h1 style="color:red">Invalid USERNAME or PASSWORD</h1></center>
<?php
}
?>

    

