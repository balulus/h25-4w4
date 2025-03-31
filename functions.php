<?php

function theme_tp_customize_register($wp_customize) {
  // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
  //Création d'une nouvelle section dans le customizer
  $wp_customize->add_section('hero_section', array(
    'title' => __('Section Hero', 'theme_tp'),
    'priority' => 30,
));
/////////////////////// ajjout de la donnée
$wp_customize->add_setting('hero_auteur', array(
  'default' => __('Valerie Therrien', 'theme_tp'),
  'sanitize_callback' => 'sanitize_text_field'
));
/////////////////////// ajout du controle de la donnée
$wp_customize->add_control('hero_auteur', array(
  'label' => __('Hero Title', 'theme_tp'),
  'section' => 'hero_section',
  'type' => 'text',
));
/////////////////////////// Ajout de la données image en background
$wp_customize->add_setting('hero_background', array(
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
));
/////////////////////////// Ajout du controle de la donnée
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
  'label' => __('Image en arrière-plan', 'theme_tp'),
  'section' => 'hero_section',
)));
/////////////////////////// Ajout de la données hero couleur
$wp_customize->add_setting('hero_couleur', array(
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
));
/////////////////////////// Ajout du controle de la donnée
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_couleur', array(
  'label' => __('Couleur du texte', 'theme_tp'),
  'section' => 'hero_section',
)));


}

add_action('customize_register', 'theme_tp_customize_register');

function mon_theme_supports() {

  add_theme_support('title-tag');
  add_theme_support('menus');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo', array(
    'height'      => 250,
    'width'       => 250,
    'flex-height' => true,
    'flex-width'  => true,
));

}
add_action( 'after_setup_theme', 'mon_theme_supports' );


function theme_4w4_enqueue_styles() { 
wp_enqueue_style('normalize', get_template_directory_uri() . '/normalize.css');  
wp_enqueue_style('mon-style-style', get_stylesheet_uri()); 
} 
/* 
*/
add_action('wp_enqueue_scripts', 'theme_4w4_enqueue_styles');

/**
 * Modifie la requete principale de WordPress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas ci nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */

function modifie_requete_principal( $query ) {
    if ( $query->is_home() && $query->is_main_query() && ! is_admin() ) {
      $query->set( 'category_name', 'populaire' );
      $query->set( 'orderby', 'title' );
      $query->set( 'order', 'ASC' );
      }
     }
     add_action( 'pre_get_posts', 'modifie_requete_principal' );

function my_customizer_settings($wp_customize) {
    // Ajouter une section "Page 404"
    $wp_customize->add_section('404_page_section', array(
        'title' => __('Page 404', 'text_domain'),
        'priority' => 30,
    ));

    // Paramètre pour l'image d'arrière-plan
    $wp_customize->add_setting('background_image_404', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'background_image_404_control', array(
        'label' => __('Image de fond pour la page 404', 'text_domain'),
        'section' => '404_page_section',
        'settings' => 'background_image_404',
    )));

    // Les textes
    $wp_customize->add_setting('custom_error_text', array(
        'default' => __('', 'text_domain'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('custom_error_text_control', array(
        'label' => __('Texte d\'erreur', 'text_domain'),
        'section' => '404_page_section',
        'settings' => 'custom_error_text',
        'type' => 'text',
    ));
    $wp_customize->add_setting('custom_paragraph_text', array(
      'default' => __('', 'text_domain'),
      'transport' => 'refresh',
  ));

  $wp_customize->add_control('custom_paragraph_text_control', array(
      'label' => __('Texte du paragraphe', 'text_domain'),
      'section' => '404_page_section',
      'settings' => 'custom_paragraph_text',
      'type' => 'text',
  ));
}

add_action('customize_register', 'my_customizer_settings');

?>
