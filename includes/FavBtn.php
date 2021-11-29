<?php
session_start();
include_once('./connection.php');
include_once('./classArticle.php');
include_once('./classUser.php');

if(isset($_SESSION['login']) && $_SESSION['login']==True){

    $users=new User();
    $user=$users->fetch_user($_SESSION['user_id']);
    $userid=$user['User_id'];

    if($_GET['func']=='fav')
    {
        $fav=unserialize($user['User_fav']);
        if(!in_array($_GET['id'],$fav))
        {
            array_push($fav,$_GET['id']);
            $stringarr=serialize($fav);
            global $pdo;
            $query=$pdo->prepare("UPDATE Users SET User_fav='$stringarr' WHERE User_id='$userid'");
            $query->execute();
        }
    }
    else if($_GET['func']=='unfav')
    {
        $fav=unserialize($user['User_fav']);
        if(in_array($_GET['id'],$fav))
        {
            $index=array_search($_GET['id'],$fav);
            unset($fav[$index]);
            $stringarr=serialize($fav);
            global $pdo;
            $query=$pdo->prepare("UPDATE Users SET User_fav='$stringarr' WHERE User_id='$userid'");
            $query->execute();
        }
    }

    if(!($_GET['domain']=='Favourites'))
    header('Location:../roadmap/domain/domain-index.php?domain='.$_GET['domain']);
    else
    header('Location:../roadmap/domain/Favourites.php');
}
else{
    echo "Login to use this feature";
}
?>