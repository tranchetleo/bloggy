<?php $this->load->view('header'); ?>

<div class="container mt-5">
    <h1>Liste des articles</h1>
    <?php foreach ($articles as $article): ?>
        <h2><?= $article['name'] ?></h2>
        <p><?= substr($article['content'], 0, 100) ?>...</p>
        <a href="<?= site_url('articles/view/' . $article['id']) ?>">Lire la suite</a>
    <?php endforeach; ?>
</div>

<?php $this->load->view('footer'); ?>