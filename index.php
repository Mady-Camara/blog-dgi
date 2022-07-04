<?php
require('./Model/article.php');
require('./Model/categorie.php');
$categories = getCategories();
if(isset($_GET['categorie'])){
    $articles = getArticlesByCategorie($_GET['categorie']);
    $message = "Articles de la catégorie ".$_GET['libelle'];
}
else{
    $articles = getArticles();
    $message = "Tous les articles";
}

require('view/view.php');

?>