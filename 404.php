<?php
get_header(); // Charge l'en-tête du site

// Récupère l'image d'arrière-plan depuis le Customizer
$background_image = get_theme_mod('background_image_404', 'url_de_defaut.jpg');

// Récupère le texte d'erreur depuis le Customizer
$error_text = get_theme_mod('custom_error_text', 'Désolé, la page que vous cherchez n\'existe pas.');

// Afficher l'arrière-plan personnalisé et le texte d'erreur
?>
<div class="error-404" style="background-image: url('<?php echo esc_url($background_image); ?>');">
    <div class="container">
        <h1><?php echo esc_html($error_text); ?></h1>
        <a href="<?php echo esc_url(home_url()); ?>" class="btn-return-home">Retour à l'accueil</a>
    </div>

    <div class="related-posts">
        <h2>Articles liés à 404</h2>
        <?php
        // Affiche les articles avec le tag '404'
        $args = array(
            'tag' => '404',
            'posts_per_page' => 5,
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) :
            echo '<ul>';
            while ($query->have_posts()) : $query->the_post();
                echo '<li><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
            endwhile;
            echo '</ul>';
        else :
            echo '<p>Aucun article trouvé.</p>';
        endif;
        wp_reset_postdata();
        ?>
    </div>
</div>

<?php
get_footer(); // Charge le pied de page du site
?>
