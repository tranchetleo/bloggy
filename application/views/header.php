
<?php
// Le Header contiendra un logo associé au nom du site, une bare de recherche et 3 liens: Articles, éditeur et connexion/compte
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Bloggy</title>
    <link rel="icon" href="application/assets/logo.png">
    <link rel="stylesheet" href="application/assets/css/bootstrap-grid.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style type="text/css">
        html {
            background-color: var(--primary-color);
            font-family: 'Kanit-bold', sans-serif;
            color : white;
        }
        
        :root {
            --primary-color: #101728;
        }

        body {
            margin: 0;
            padding: 0;
            padding-top: 100px;
        }

        header {
            background-color: var(--primary-color);
            color: white;
            position: fixed;
            top: 0;
            display: flex;
            padding: 0;
            width: 100%;
            z-index: 1000;
        }

        header a {
            color: white;
            text-decoration: none;
            font-weight: bold;
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

        .ar1 {
            object-fit: cover;
            aspect-ratio: 1/1;
        }

        .br-1 {
            border-radius: 1em;
        }

        .br-2 {
            border-radius: 2em;
        }
        
    </style>

</head>

<body>
    <header class="flex-row">
        <div class="container pt-3 pb-3">
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




