<?php
/***
 * 
 * @package milkyway
 */


 function milkyway_enqueue_default_scripts(){

        /**  ADD STYLESHEET HERE */
         wp_enqueue_style('style-css',get_stylesheet_uri(),[],filemtime(get_template_directory(). '/style.css'),'all');
         


        /*** ADD JS FILE HERE */
         // include JS in header Section
         wp_enqueue_script('header-js',get_template_directory_uri().'/assets/header-main.js',[],filemtime(get_template_directory(). '/assets/header-main.js'),false);
         
         // include JS in footer Section
         wp_enqueue_script('footer-js',get_template_directory_uri().'/assets/footer-main.js',[],filemtime(get_template_directory(). '/assets/footer-main.js'),true);
       
         /*  wp_enqueue_style('main-css',get_template_directory_uri(). '/main.css',['stylesheet']);*/
 }

 add_action('wp_enqueue_scripts','milkyway_enqueue_default_scripts');


?>