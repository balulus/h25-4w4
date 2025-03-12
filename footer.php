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
  	 		</div>
  	 		<div class="footer-col">
               <?php get_search_form();   ?>
  	 		</div>
  	 	</div>
  	 </div>
</footer>
<?php wp_footer() ?>