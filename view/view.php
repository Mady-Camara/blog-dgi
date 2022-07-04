<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Acceuil</title>
        <link href="view/style.css" rel="stylesheet" />
    </head>
    <body>
        <header>
            <h1>Bienvenu sur le blog dgi</h1>
            <nav>
                <a href="index.php">touts</a>
                <?php
                foreach($categories as $categorie){
                    echo '<a href="index.php?categorie='.htmlspecialchars($categorie->getId()).'&libelle='.htmlspecialchars($categorie->getLibelle()).'">'.$categorie->getLibelle().'</a>';
                }
            ?>
            </nav>
        </header>
                    <h2 style="text-align: center"><?= htmlspecialchars($message) ?></h2>';
                    <?php 
                    if(isset($articles)){
                        foreach($articles as $article){?>
                            <div class="wrapper2">
                                <div class="product-info">
                                    <div class="product-text">';
                                        <h1><?= htmlspecialchars($article->getTitre()) ?></h1>
                                        <h3><?= htmlspecialchars($article->getContenu()) ?></h3>
                                        <div>
                                            <p>Date de publication : <?= htmlspecialchars($article->getDateCreation())?><br>
                                               Date de modification : <?= htmlspecialchars($article->getDateModification())?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                        <?php }
                    }
                    else{ ?>
                        <h1 style="color: red; text-align: center">Aucun article n'a été trouvé</h1>
                        <?php 
                    } ?>
                ?>
    </body>
</html>