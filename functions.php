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
?>
