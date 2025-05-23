<?php
/**
 * Template Name: Template Pays
 */
get_header(); ?>






<div id="intro-section" class="intro container">
  <h1 class="intro-title">Les plus beaux pays</h1>
  <p class="intro-text">
  Plongez au cœur de l’aventure et laissez-vous emporter par l’appel du large ! Notre planète regorge de destinations incroyables, chacune promettant une expérience unique et mémorable. Que vous rêviez de plages idylliques baignées de soleil, de sommets majestueux invitant à la randonnée, de villes vibrantes d’histoire et de modernité, ou de rencontres culturelles authentiques, il y a un pays fait pour vous.
  </p>
</div>

<?php
$haut_couleur = get_theme_mod('haut_couleur','#005077');
haut_genere_vague($haut_couleur);
?>



<!-- ////////////////////////////////////////////////  section rest-api -->
<section class="destination">
    <h2 class="destination__titre">Choisissez une destination</h2>

    <ul class="categorie__ul">
        <?php
        $parent_category = get_category_by_slug('pays-cat');
        $categories = get_categories(array(
            'child_of' => $parent_category->term_id,
            'hide_empty' => false,
        ));

        foreach ($categories as $category) {
            echo '<li class="categorie__ul__li" data-category_id="' . esc_attr($category->term_id) . '">' . esc_html($category->name) . '</li>';
        }
        ?>
    </ul>

    <h2 class="destination__titre">Endroit touristique dans ce pays</h2>
    <div class="destination__list">
    </div>
</section>

<script src="<?php echo get_template_directory_uri(); ?>/js/pays.js"></script>

<?php get_footer(); ?>
