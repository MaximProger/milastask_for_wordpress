<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300i,400,500,500i,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/41064ceb63.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/style.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/slick/slick-theme.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Milastask</title>
</head>
<body>

    <header class="header" id="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__logo">
                    <img src="<?php bloginfo('template_directory') ?>/images/logo.png" alt="logo">
				</div>
				
				
				
				<?php wp_nav_menu( $args ) ?>
				

                <button class="burger" id="navToggle">
                    <i class="fas fa-bars" aria-hidden="true"></i>
                </button>
            </div>
        </div>
    </header>