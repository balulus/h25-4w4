<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php echo esc_url( home_url( '/' ) ); ?>">

    <title>Manoir Céleste</title>
    <!-- link rel="stylesheet" href="normalize.css" -->
    <!-- link rel="stylesheet" href="style.css" -->
    <?php wp_head() ?>
</head>
<body>
<header>
    <div class="entete">
        <figure class="entete__logo">
            <?php
            if (function_exists('the_custom_logo')) {
                the_custom_logo();
            }
            ?>
        </figure>
        <div class="entete__navigation">
            <!-- Checkbox pour le menu burger -->
            <input type="checkbox" id="burgerToggle" class="burger-toggle">
            <label for="burgerToggle" class="burger-menu">
                <span class="burger-line"></span>
                <span class="burger-line"></span>
                <span class="burger-line"></span>
            </label>

            <!-- Menu -->
            <?php wp_nav_menu(array(
                'menu' => 'header',
                'container' => 'nav',
                'container_class' => 'entete__menu',
                'menu_class' => 'menu-list'
            )); ?>
        </div> <!-- fin entete__navigation -->
        <?php get_search_form() ?>
    </div>
</header>

