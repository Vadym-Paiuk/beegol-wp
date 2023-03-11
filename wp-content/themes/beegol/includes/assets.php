<?php
    add_action( 'wp_enqueue_scripts', 'beegol_assets' );
    
    function beegol_assets(){
        //CSS
        wp_enqueue_style( 'kovalaw-styles', get_template_directory_uri() . '/assets/css/app.min.css' );
        
        //JS
        wp_enqueue_script( 'kovalaw-scripts', get_template_directory_uri() . '/assets/js/app.min.js', array( 'jquery' ) );
    }