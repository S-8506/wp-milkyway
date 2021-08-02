<?php
/***
 * 
 * @package milkyway
 */


 function milkyway_enqueue_default_scripts(){

        /**  ADD STYLESHEET HERE */
        // wp_enqueue_style('style-css',get_stylesheet_uri(),[],filemtime(get_template_directory(). '/style.css'),'all');
         
        // using split method way to include css
        wp_register_style('style-css',get_stylesheet_uri(),[],filemtime(get_template_directory(). '/style.css'),'all');
        wp_enqueue_style('style-css');

        // Bootstrap CSS
        wp_register_style('bootstrap-css',get_template_directory_uri().'/assets/src/library/css/bootstrap.min.css',[],false,'all');
        wp_enqueue_style('bootstrap-css');

        /*** ADD JS FILE HERE */
         // include JS in header Section
         wp_enqueue_script('header-js',get_template_directory_uri().'/assets/header-main.js',[],filemtime(get_template_directory(). '/assets/header-main.js'),false);
         
         // include JS in footer Section
         wp_enqueue_script('footer-js',get_template_directory_uri().'/assets/footer-main.js',[],filemtime(get_template_directory(). '/assets/footer-main.js'),true);
       

         // BOOTSTRAP JS 
         wp_enqueue_script('bootstrap-js',get_template_directory_uri().'/assets/src/library/js/bootstrap.min.js',['jquery'],false,true);
       
         /*  wp_enqueue_style('main-css',get_template_directory_uri(). '/main.css',['stylesheet']);*/
 }

 add_action('wp_enqueue_scripts','milkyway_enqueue_default_scripts');


?>