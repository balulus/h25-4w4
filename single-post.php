<?php get_header(); ?>
    <section class="populaire">
        <div class="global">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article>
            <h1><?php the_title(); ?></h1>
            <?php
                if (has_post_thumbnail()) {
                the_post_thumbnail('large'); }
            ?>  
                <div><?php the_content() ?>
                <?php the_category(); ?>
                <?php  $tableau = get_the_category(); 
                ?>
                <p>Statut: <?php the_field('statut') ?></p>

            <?php endwhile; endif; ?>
        </div>
    </section>
    <?php get_footer(); ?>
   
</body>
</html>