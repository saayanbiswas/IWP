<?php
include_once('../includes/connection.php');
include_once('../includes/classArticle.php');

$article = new Article();

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $data= $article->fetch_data($id);

    require('./navbar.php');
?>
        
        <p id="article_domain"><?php echo $data['article_domain']?></p>
        <p id="article_title"><?php echo $data['article_title']?></p>

            <div class="article">
               
                <?php echo $data['article_content'];?>
                
            </div>
        </body>
        </html> 
        <?php
    }

    else{
        header('Location: index.php?id='.$id);
        exit();
    }

?>
