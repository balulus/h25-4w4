<?php
/**
 * Génére une liste de sous-catégories
 * @param string $parent_slug Le slug de la catégorie parente
 */
function categories_liste($parent_slug){
    // Récupérer la catégorie parente à partir de son slug
    $parent_category = get_category_by_slug($parent_slug);
    // Vérifier si la catégorie parente existe
    if ($parent_category) {
        $parent_id = $parent_category->term_id;
        // Récupérer les sous-catégories de "destination"
        $sous_categories = get_categories(array(
            'parent' => $parent_id, // Filtrer par le parent "destination"
            'hide_empty' => true, // Ne pas afficher les catégories vides
    ));

        // Vérifier s'il y a des sous-catégories
        if (!empty($sous_categories)) {
            echo '<ul class="categorie__ul">';
        foreach ($sous_categories as $categorie) {
            // Afficher le nom de chaque sous-catégorie
            echo '<li  data-category_id="' . esc_html($categorie->term_id) . '" class="categorie__ul__li">' . esc_html($categorie->name) . '</li>';
        }
        echo '</ul>';
        }
    }
}

/**
 * Génere une ou plusieurs vague svg
 */
function genere_vague($couleur){?>
   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#5000ca" fill-opacity="1" d="M0,64L80,101.3C160,139,320,213,480,240C640,267,800,245,960,213.3C1120,181,1280,139,1360,117.3L1440,96L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
</svg>

<?php }

function haut_genere_vague($couleur){?>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#d0aeff" fill-opacity="1" d="M0,0L34.3,42.7C68.6,85,137,171,206,213.3C274.3,256,343,256,411,261.3C480,267,549,277,617,261.3C685.7,245,754,203,823,154.7C891.4,107,960,53,1029,69.3C1097.1,85,1166,171,1234,176C1302.9,181,1371,107,1406,69.3L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
</svg>
 
 <?php }