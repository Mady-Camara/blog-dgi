<?php
require_once('../persistence/article.php');

function mesArticles(){
    return getArticles();
}

function mesArticlesParCategorie($categorie){
    return getArticlesByCategorie($categorie);
}

?>