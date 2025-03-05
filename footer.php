<footer>
    <div class="piedpage global">
        <section class="piedpage__s1">
            <div class="piedpage__s1__externe">
                <h3>Liens sur le voyages</h3>
                <?php wp_nav_menu(array(
                    "menu" => "externe",
                    "container" => "nav",
                )); ?>
            </div>
            <div class="piedpage__s1__adresse">
                <h3>Adresse et recherche</h3>
                <div class="piedpage__s1__adresse__coord">
                3800, Sherbrook est, Montréal, Québec, Canada, H1X 2A2
                Tel: (514)254-7131
            </div>
                <div class="piedpage__s1__adresse__recherche">
                    <?php get_search_form();   ?>
                </div>
            </div>
            <div class="piedpage__s1__description">
                <h3>Mission du club</h3>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat vero explicabo iure sit enim, ea ducimus nesciunt inventore impedit blanditiis unde omnis facere, deleniti eligendi fuga molestias dolor eveniet laborum!
            </div>
        </section>
        <section class="piedpage__s2"></section>
        <section class="piedpage__s3"></section>


    </div>
</footer>
<?php wp_footer() ?>