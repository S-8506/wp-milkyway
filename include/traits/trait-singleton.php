<?php
/***
 *  
 * 
 * @package: milkyway
 */

 namespace MILKYWAY_THEME\Include\Helpers;

 trait Singleton{

    public function __construct(){

    }
    public function __clone(){

    }

    final public static function get_instance(){

        static $instance = [];

        $called_class = get_called_class();

        if(!isset($instance[$called_class])){
            $instance[$called_class] = new $called_class();

            do_action( sprintf('milkyway_codenaive_theme_singleton_init%s'));

        }

        return $instance[$called_class];

    }
 }

?>