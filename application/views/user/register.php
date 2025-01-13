<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('header'); ?>

<div id="register" class="container m-auto col align-items-center justify-content-center">
    <div class="bloggy-div col-6 m-auto align-items-center justify-content-center">
        <h1 class="m-auto col-8 d-flex justify-content-center">Inscription</h1>
        <form action="/doRegister" method="post" class="m-auto col-8 d-flex flex-column">
            <div class="row justify-content-between mt-3 mb-3">
                <label for="username">Nom d'utilisateur</label>
                <input type="text" name="username" id="username">
            </div>
            <div class="row justify-content-between mt-3 mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="row justify-content-between mt-3 mb-3">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password">
            </div>
            <div class="row justify-content-between mt-3 mb-3">
                <label for="password_confirm">Confirmer le mot de passe</label>
                <input type="password" name="password_confirm" id="password_confirm">
            </div>
            <button type="submit" class="bloggy-btn col-5 align-self-center mt-3 mb-3">S'inscrire</button>
        </form>
        <a href="/login" class="m-auto col-8 d-flex justify-content-center">Déjà un compte ? Connectez-vous</a>
    </div>
</div>