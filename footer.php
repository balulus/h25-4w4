<?php
$footer_couleur = get_theme_mod('footer_couleur','#000000');
genere_vague($footer_couleur);
?>
<footer style="background-color: <?= $footer_couleur ?>">
    <div class="piedpage global">
        <section class="piedpage__s1">
            <div class="piedpage__s1__externe">
                <?php wp_nav_menu(array(
                    "menu" => "externe",
                    "container" => "nav",
                )); ?>
            </div>
			<div class="footer-col">
  	 			<h4>Adresse et recherche</h4>
  	 			<ul>
  	 				<li><a href="#">3800, Sherbrook est, Montréal, Québec, Canada, H1X 2A2</a></li>
  	 				<li><a href="#">Tel: (514)254-7131</a></li>
  	 			</ul>
				   <?php get_search_form();   ?>

  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Mission de l'exploration du manoir céleste</h4>
  	 			<ul>
  	 				<li>La Mission de l'Exploration du Manoir Céleste est une aventure mystérieuse et fascinante qui s'inscrit souvent dans des récits de fiction, où des aventuriers ou des explorateurs sont envoyés pour découvrir les secrets d'un manoir flottant ou caché dans les cieux.</li>
  	 			</ul>

  	 		</div>
        </section>
        <section class="piedpage__s2"></section>
        <section class="piedpage__s3"></section>


    </div>
</footer>
<?php wp_footer() ?>