<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('header'); ?>

<div id="login" class="container m-auto col align-items-center justify-content-center">
    <div class="bloggy-div col-6 m-auto align-items-center justify-content-center">
        <h1 class="m-auto col-8 d-flex justify-content-center">Connexion</h1>
        <form action="/authenticate" method="post" class="m-auto col-8 d-flex flex-column">
            <div class="row justify-content-between mt-3 mb-3">
                <label for="email" class="col-5">Email</label>
                <input type="email" name="email" id="email" class="col-5">
            </div>
            <div class="row justify-content-between mt-3 mb-3">
                <label for="password" class="col-5">Mot de passe</label>
                <input type="password" name="password" id="password" class="col-5">
            </div>
            <button type="submit" class="bloggy-btn col-5 align-self-center mt-3 mb-3">Se connecter</button>
        </form>
        <a href="/register" class="m-auto col-8 d-flex justify-content-center">Pas encore de compte ? Inscrivez-vous</a>
        <p>
            <?php if ($this->session->flashdata('error')): ?>
                <?php echo $this->session->flashdata('error'); ?>
            <?php endif; ?>
        </p>
    </div>
</div>
