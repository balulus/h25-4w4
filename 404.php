<?php
get_header();

// Pour le customizer
$background_image = get_theme_mod('background_image_404', '.jpg');
$error_text = get_theme_mod('custom_error_text', '');
$paragraph_text = get_theme_mod('custom_paragraph_text', '');

// Afficher l'arrière-plan personnalisé et le texte d'erreur
?>
<div class="error-404" style="background-image: url('<?php echo esc_url($background_image); ?>');">
    <div class="container">
        <div class="content-wrapper">
            <h1><?php echo esc_html($error_text); ?></h1>
            <div class="content-wrapper">
            </div>

            <p><?php echo esc_html($paragraph_text); ?></p> 
        </div>

        <div class="related-posts">
        <div class="content-wrapper">

            <?php
            // Affiche les articles avec le tag '404'
            $args = array(
                'category_name' => '404', // Utilise le "slug" de la catégorie 404
                'posts_per_page' => 4,
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) :
                echo '<ul>';
                while ($query->have_posts()) : $query->the_post();
                    echo '<li><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
                endwhile;
                echo '</ul>';
            endif;
            wp_reset_postdata();
            ?>
                    </div>

        </div>
    </div>
</div>


<?php
get_footer();
?>
