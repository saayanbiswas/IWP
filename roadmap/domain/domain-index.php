<?php
session_start();
include_once('../../includes/connection.php');
include_once('../../includes/classArticle.php');
include_once('../../includes/classUser.php');
    $article = new Article();
    $articles=$article->fetch_domain($_GET['domain']);
    $user= new User();
     if(isset($_SESSION['login']) && $_SESSION['login']==True){
        $exists=$user->check_fav($articles, $_SESSION['user_id']);
      }else{
        
        $exists=array();
      }
        
?>

<?php require('./navbar.php');?>
      <h1> <?php echo $_GET['domain']?> <h1>
      <ol>
                <?php foreach ($articles as $article){ ?>
                <li>
                    <a href="../../articleView/article.php?id=<?php echo $article['article_id']?>">
                        <?php echo $article['article_title'];?>
                    </a>
                        <?php if(in_array($article['article_id'],$exists))
                               {echo '<a style="color:rgb(255, 174, 0); text-decoration:none;"  href="../../includes/FavBtn.php?func=unfav&domain='.$article['article_domain'].'&id='.$article['article_id'].'")>&#9733</a>';
                                }
                             else
                                {echo '<a style="color:rgb(255, 174, 0); text-decoration:none;" href="../../includes/FavBtn.php?func=fav&domain='.$article['article_domain'].'&id='.$article['article_id'].'")>&#9734</a>';}
                        ?>
                    
                </li>
                <?php } ?>
      </ol>
        <script>
            function BtnUnFav(id)
            {
                const Http= new XMLHttpRequest();
                const url='../../includes/FavBtn.php?id='+id+'&func='+'unfav';
                Http.open("GET",url);
                Http.send();
                cssid='Btn'+id;
                button=document.getElementById(cssid);
                if(button.innerHTML=='&#9734')
                button.innerHTML='&#9733';
                else
                button.innerHTML='&#9734';
            }
            function BtnFav(id)
            {
                const Http= new XMLHttpRequest();
                const url='../../includes/FavBtn.php?id='+id+'&func='+'fav';
                Http.open("GET",url);
                Http.send();
                cssid='Btn'+id;
                button=document.getElementById(cssid);
                
                button.innerHTML='&#9733';
               
            }

        </script>
   
</body>
</html>
