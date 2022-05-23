<?php
    include './utils/connectBdd.php';
    include './model/model_article.php';
    include './view/view_show_all_articles.php';

    $article = new Article(null,null,null);

    $tab = $article->showAllArticle($bdd);

    // var_dump($tab);

    foreach($tab as $value){
        echo '<article>
            article n°'.$value->id_art.'</br>
            Titre : '.$value->nom_art.'</br>
            '.$value->content_art.'
        </article></br>';
    }