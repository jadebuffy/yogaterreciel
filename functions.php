<?php
    //load css
    //wp_enqueue_style(nom, source, dépendance, numéro de version de fichier, type de média)
    function add_style() {
      if (!is_admin()) {
          wp_enqueue_style('app', get_template_directory_uri() . '/assets/css/app.css', [], false);
        }
      }
      add_action( 'wp_enqueue_scripts', 'add_style' );
    // wp_enqueue_style('app', get_template_directory_uri().'', array(), 1, 'all'); 

    function custom_register_nav_menu(){
      register_nav_menus( array(
          'primary_menu' => 'Menu principal',
      ) );
    }
   add_action( 'after_setup_theme', 'custom_register_nav_menu', 0 );

   remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
    add_action( 'shutdown', function() {
   while ( @ob_end_flush() );
    } );

    //FOOTER MODIFIABLE
    if( function_exists('acf_add_options_page') ) {
    
      acf_add_options_page(array(
          'page_title'    => 'Theme General Settings',
          'menu_title'    => 'Theme Settings',
          'menu_slug'     => 'theme-general-settings',
          'capability'    => 'edit_posts',
          'redirect'      => false
      ));
      
      acf_add_options_sub_page(array(
          'page_title'    => 'Theme Footer Settings',
          'menu_title'    => 'Pied de page',
          'parent_slug'   => 'theme-general-settings',
      ));
      
  }

  
  // Ajouter une taille d'image
  add_image_size( 'gallery-thumb', 1200, 800, true );
  add_image_size( 'slider', 252, 337, true );
    
?>
