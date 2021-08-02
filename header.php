<?php
/***
 *  Header Template
 * 
 * @package: milkyway
 */


?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <?php wp_head(); ?>
    
    
    <title><?php wp_title(); ?></title>

</head>
<body <?php body_class('codenaive-body'); ?> >

<?php 
    
    if(function_exists('wp_body_open')){
        wp_body_open();  // To insert the Script (asynchronous) 
    }
?>
<header>Header</header>