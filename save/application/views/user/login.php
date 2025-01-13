<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div>
    <h1>Connexion</h1>
    <form action="/authenticate" method="post">
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password">
        </div>
        <button>Se connecter</button>
    </form>
    <a href="/register">Pas encore de compte ? Inscrivez-vous</a>
</div>
