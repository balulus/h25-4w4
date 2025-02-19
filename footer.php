<footer>
    <div class="piedpage global">
        <section class="piedpage__s1">
        <div class="piedpage__s1__externe">

        <?php wp_nav_menu(array(
            "menu" => "externe",
            "container" => "nav"
        )); ?>
        </div>
        <div class="piedpage__s1__adresse">
        <div class="piecpage__s1__adresse__coord">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, nobis illum. Sequi delectus ullam iste? Blanditiis sint, odio earum ad aut quibusdam corrupti consectetur, distinctio commodi iure atque numquam. Sunt.
        </div>
        <div class="piecpage__s1__adresse__recherche">
        <?php get_search_form(); ?>
        </div>
        </div>
        <div class="piecpage__s1__description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia amet voluptatem ullam. Beatae consequuntur eius quasi aliquam amet impedit, magnam quae ipsam id nobis consequatur delectus natus facere tempora aut.
        </div>
        <section class="piedpage__s2"></section>
        <section class="piedpage__s3"></section>

        </section>
    </div>
</footer>
<?php wp_footer() ?>