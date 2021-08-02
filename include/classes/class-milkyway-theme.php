<?php

/**
 *  Bootstrap The Theme
 * 
 * @package Milkyway
 * 
 */


 namespace   MILKYWAY_THEME\Include;

use MILKYWAY_THEME\Include\Traits\Singleton;

class MILKYWAY_THEME{
     use Singleton;

     protected function __construct()
     {
        // wp_die('Hello ');
          // load classes here
         $this->set_hooks();
        
     }

     protected function set_hooks(){
         // actions and filters
     }

 }