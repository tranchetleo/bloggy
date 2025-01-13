<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="">
    <img src="<?= $article['id'] ?>" alt="">
    <div class="row">
        <p><?= $article['date'] ?></p>
        <p><?= $article['views'] ?></p>
    </div>
    <h3><?= $article['name'] ?></h3>
    <p><?= $article['user_id'] ?></p>
</div>

