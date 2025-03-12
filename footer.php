<footer>
    <div class="piedpage_global">
  	 	<div class="piedpage__s1">
  	 		<div class="footer-col">
  	 			<h4>Liens sur le voyages</h4>
  	 			<ul>
                   <?php wp_nav_menu(array(
                    "menu" => "externe",
                    "container" => "nav",
                )); ?>
  	 			</ul>
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
  	 	</div>
  	 </div>
</footer>
<?php wp_footer() ?>