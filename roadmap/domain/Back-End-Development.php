<?php
include_once('../../includes/connection.php');
include_once('../../includes/classArticle.php');
    $article = new Article();
    $articles=$article->fetch_domain('Back-End-Development');
?>

<?php require('../navbar.php');?>
      <h1> Back-End-Development <h1>
      <ol>
                <?php foreach ($articles as $article){ ?>
                <li>
                    <a href="../../articleView/article.php?id=<?php echo $article['article_id']?>">
                        <?php echo $article['article_title'];?>
                    </a>
                </li>
                <?php } ?>
      </ol>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>