
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
    <link rel="stylesheet" href="application/assets/css/bloggy.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
                            <?php if (isset($_SESSION['user'])): ?>
                                <li><a href="profile">Profil</a></li>
                            <?php else: ?>
                                <li><a href="login">Connexion</a></li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
</body>




