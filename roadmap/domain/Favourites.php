<?php
session_start();
include_once('../../includes/connection.php');
include_once('../../includes/classArticle.php');
include_once('../../includes/classUser.php');
require('./navbar.php');
if(isset($_SESSION['login']) && $_SESSION['login']==True){

    echo "<h1> Favourites </h1>";
    $articles = new Article();
    
    $users=new User();
    $user=$users->fetch_user($_SESSION['user_id']);
    $fav=unserialize($user['User_fav']);?>
    <ol>
                <?php foreach($fav as $a_id){ $article=$articles->fetch_data($a_id) ?>
                <li>
                    <a href="../../articleView/article.php?id=<?php echo $article['article_id']?>">
                        <?php echo $article['article_title'];?>
                    </a>
                    <?php echo '<a style="color:rgb(255, 174, 0); text-decoration:none;"  href="../../includes/FavBtn.php?func=unfav&domain=Favourites&id='.$article['article_id'].'")>&#9733</a>';?>
                    
                </li>
                <?php }?>
      </ol>
<?php }else{
    echo "<h1 style='color:red;'>You shouldn't be here</h1>"; 
}?>
</body>
</html>

