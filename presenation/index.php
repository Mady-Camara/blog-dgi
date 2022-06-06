<?php
    /*-------------------------------------------------------------------------
    ###   Que la force du code soit avec vous 🧘🏾‍♂️
    -------------------------------------------------------------------------*/
    require_once '../controleur/article.php';
    require_once '../controleur/categorie.php';
    $categories = mesCategories();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Acceuil</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1>Bienvenu sur le blog dgi</h1>
            <nav>
            <?php
                echo '<a href="index.php">touts</a>';
                foreach($categories as $categorie){
                    echo '<a href="index.php?categorie='.$categorie->getId().'">'.$categorie->getLibelle().'</a>';
                }
            ?>
            </nav>
        </header>
                
                <?php
                    if(isset($_GET['categorie'])){
                        $articles = mesArticlesParCategorie($_GET['categorie']);
                        $message = "Articles de la catégorie ".$_GET['categorie'];
                    }
                    else{
                        $articles = mesArticles();
                        $message = "Tous les articles";
                    }
                    echo '<h2 style="text-align: center">'.$message.'</h2>';
                    if(isset($articles)){
                        foreach($articles as $article){
                            echo '<div class="wrapper2">
                                <div class="product-info">
                                <div class="product-text">';
                            echo '<h1>'.$article->getTitre().'</h1>';
                            echo '<h3>'.$article->getContenu().'</h3>';
                            echo  '<div><p>Date de publication : '.$article->getDateCreation();
                            echo '<br>Date de modification : '.$article->getDateModification().'</p>';
                            echo '</div></div></div></div>';
                        }
                    }
                    else{
                        echo '<h1 style="color: red; text-align: center">Aucun article n\'a été trouvé</h1>';
                    }
                ?>
    </body>
</html>