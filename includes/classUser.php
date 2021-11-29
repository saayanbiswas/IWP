<?php

class User{
    public function fetch_all(){
        global $pdo;
        $query= $pdo->prepare("SELECT * from users");
        $query->execute();

        return($query->fetchAll());
    }

    public function fetch_user($user_id){
        global $pdo;
        $query= $pdo->prepare("SELECT * FROM users WHERE user_id='$user_id'");
        //$query->bindValue(':user_id',$user_id);
        $query->execute();
        return($query->fetch());
    }
    public function create($id, $pass, $email)
    {
        global $pdo;
        $emptyarr=serialize(array());
        $query = $pdo->prepare("INSERT INTO users VALUES('$id','$email','$pass','$emptyarr')");
        $query->execute();
    }

    public function check_fav($articles, $user_id)
    {
        $users= new User();
        $user=$users->fetch_user($user_id);
        $fav= unserialize($user['User_fav']);
        $exists=array();
        foreach ($articles as $article)
        {
            if (in_array($article['article_id'], $fav)) { 
                array_push($exists,$article['article_id']);
            } 
        }
        
        return($exists);
    }
}