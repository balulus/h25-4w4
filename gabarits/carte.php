<?php
/**
 * Template-part carte
 */
?>
<article class="carte carte--grande">
  <figure class="carte__image">
  <?php
        if (has_post_thumbnail()) {
        the_post_thumbnail('thumbnail'); }
    ?>      
</figure>
  <div class="carte__contenu">
      
    <h4 class="carte__titre"><?php the_title(); ?></h4>
    <p class="carte__description"><?php echo wp_trim_words(get_the_content(),10, " ... " ); ?></p>
    <a class="carte__bouton carte__bouton--actif" href="<?php the_permalink() ?>">suite ...</a>
    <p>Statut : <?php // the_field('statut'); ?> </p>
    <div class="carte__category"><?php  the_category();  ?></div>
  </div>
</article>