<?php
include_once('../../includes/connection.php');
include_once('../../includes/classArticle.php');
    $article = new Article();
    $articles=$article->fetch_domain('Back-End-Development');
?>

<?php require('./navbar.php');?>
      <h1> Back-End-Development <h1>
      <ol>
                <?php foreach ($articles as $article){ ?>
                <li>
                    <a href="../../articleView/article.php?id=<?php echo $article['article_id']?>">
                        <?php echo $article['article_title'];?>
                    </a>
                    <?php if(in_array($article['article_id'],$exists))
                               {echo '&#9733';}
                             else
                                {echo '&#9734';}
                        ?>
                </li>
                <?php } ?>
      </ol>
      
   
</body>
</html>