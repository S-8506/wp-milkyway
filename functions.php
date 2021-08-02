<?php
/***
 * 
 * @package milkyway
 */


 function milkyway_enqueue_default_scripts(){
         wp_enqueue_style('stylesheet',get_stylesheet_uri(),[],filemtime(get_template_directory(). '/style.css'),'all');
       
       
         /*  wp_enqueue_style('main-css',get_template_directory_uri(). '/main.css',['stylesheet']);*/
 }

 add_action('wp_enqueue_scripts','milkyway_enqueue_default_scripts');


?>