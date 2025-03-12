<?php get_header(); ?>
<?php 
$hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
$hero_background = get_theme_mod('hero_background', ''); 
$hero_couleur = get_theme_mod('hero_couleur', '');
?>
<style>
    .hero__couleur{
        color :  <?php echo $hero_couleur ?>;
    } 
</style>
    <section class="hero" style="background-image: url(<?php echo $hero_background ?>)">
        <div class="hero__contenu global">
            <h1 class="hero__titre"><?php bloginfo('name'); ?></h1>
            <p class="hero__description hero__couleur">
            <?php bloginfo('description'); ?>
            </p>
            <p class="hero__courriel  hero__couleur">
            <?php bloginfo('admin_email'); ?>
            </p>
            <p class="hero__adresse  hero__couleur">
                5800 Sherbrooke-est - Montréal (Québec) H1X 2A2
            </p>
            <p class="hero_auteur  hero__couleur">Auteur : <?php echo $hero_auteur ?></p>
            <div class="hero__icone">
                <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=snapchat&color=000000" width="20" height="20">
            </div>
        </div>
    </section>

    <section class="populaire">
        <div class="global">
            <div class="centrage">
            <?php if (have_posts()) : while (have_posts()) : the_post(); 
            if (in_category("galerie"))  {
                the_content() ;
            }
             else {    ?><div class="carte_liste">
                <?php get_template_part( 'gabarits/carte' ); ?>
            <?php } ?></div>
            <?php endwhile; endif; ?>
        </div>
        </div>
    </section>
    <footer></footer>
    <?php get_footer(); ?>
</body>
</html>