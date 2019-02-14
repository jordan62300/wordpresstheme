<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title><?php wp_title(); ?></title>
        <link rel="shortcut icon" type="image/png" href="<?= get_stylesheet_directory_uri(); ?>/img/icons8-bulle.svg" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php wp_head(); ?>
    </head>
    <body>
    <div class="logo-sm">
        <img alt="image" src="<?= get_stylesheet_directory_uri(); ?>/images/logo.png/">
    </div>

    <nav class="nav">
            <div class="logo">
                    <img alt="image" src="<?= get_stylesheet_directory_uri(); ?>/images/logo.png" width=80%/>
                </div>
        <ul class="menu">
            
            <li><a href="index.html"><span class="current">Accueil</span></a></li>
            <li><a href="nouveaute.html">Nouveauté</a></li>
            <li><a href="Article.html">Article</a></li>
            <li><a href="contact.html">Contacts</a></li>
            
            <li><a href="inscription.html">S'inscrire</a></li>
            <li><a href="connexion.html">Se connecter</a></li>
        
        </ul>
</nav>



   

