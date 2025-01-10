
<?php
// Le Header contiendra un logo associé au nom du site, une bare de recherche et 3 liens: Articles, éditeur et connexion/compte
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Bloggy</title>
    <link rel="stylesheet" href="application/assets/css/bootstrap-grid.min.css">

    <style type="text/css">
        html {
            background-color: var(--primary-color);
        }
        
        :root {
            --primary-color: #101728;
        }

        body {
            margin: 0;
            padding: 0;
        }

        header {
            background-color: var(--primary-color);
            color: white;
            position: fixed;
            display: flex;
            padding: 0;
            width: 100%;
        }

        header a {
            color: white;
            text-decoration: none;
        }

        header ul {
            padding: 0;
        }

        header li {
            list-style-type: none;
            margin: 0 10px;
        }

        .logo {
            display: flex;
            border-radius: 50%;
            width: 25%;
            color: white;
        }
        
    </style>

</head>

<body>
    <header class="flex-row">
        <div class="container">
            <div class="row justify-content-between">
                <div class="row col-2 align-self-center justify-content-between">
                    <a href="/" class="row align-items-center"> 
                        <img src="application/assets/logo.png" alt="Logo du site" class="logo">
                        Bloggy
                    </a>
                </div>
                <div class="col-4 align-self-center">
                    <form action="<?php echo site_url('articles/search'); ?>" method="post" class="row justify-content-between m-auto">
                        <input type="text" name="search" placeholder="Rechercher un article">
                        <button type="submit">Rechercher</button>
                    </form>
                </div>
                <div class="col-3 align-self-center">
                    <nav>
                        <ul class="row justify-content-between">
                            <li><a href="<?php echo site_url('articles'); ?>">Articles</a></li>
                            <li><a href="<?php echo site_url('admin'); ?>">Editeur</a></li>
                            <li><a href="<?php echo site_url('users/login'); ?>">Connexion</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
</body>




