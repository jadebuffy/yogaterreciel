<?php
    //load css
    //wp_enqueue_style(nom, source, dépendance, numéro de version de fichier, type de média)
    function add_style() {
        wp_enqueue_style('app', get_template_directory_uri() . '../assets/css/app.css', false);
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

  
  // Ajouter une taille d'image
  add_image_size( 'gallery-thumb', 1200, 800, true );
    
?>
