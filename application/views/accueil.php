<?php $this->load->view('header'); ?>

<div class="container m-auto mt-5 row justify-content-between">
    <div class="bloggy-div col-6 align-self-center">
        <h1>Restez toujours connecté</h1>
        <p>Bloggy est une plateforme de blog qui vous permet de consulter des articles sur divers sujets. Vous pouvez également créer votre propre blog et partager vos articles avec le monde entier.</p>

        <button class="bloggy-btn mt-3 mb-3">Scroll pour voir les articles</button>
    </div>
    <img src="application/assets/illustration_accueil.jpg" alt="Illustration d'une femme sur un ordinateur" class="img-fluid col-5 ar1 p-0 br-2">
</div>

<div class="container mt-5">
    <h1>Derniers articles</h1>
    <?php foreach ($articles as $article): ?>
        // Call the view for each article
        <?php $this->load->view('articles/ArticleDisplay', ['article' => $article]); ?>
    <?php endforeach; ?>
</div>
