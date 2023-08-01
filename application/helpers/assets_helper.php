<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('load_top')){
   function load_top(){

       require_once(APPPATH."views/includes/top.php");
   }
}

if ( ! function_exists('load_footer')){
   function load_footer(){

       require_once(APPPATH."views/includes/footer.php");
   }
}


if ( ! function_exists('load_main_top')){
   function load_main_top(){

       require_once(APPPATH."views/includes/main_top.php");
   }
}


if ( ! function_exists('load_mixed_top')){
   function load_mixed_top(){

       require_once(APPPATH."views/includes/mixed_top.php");
   }
}



if ( ! function_exists('load_sidebar')){
   function load_sidebar(){

       require_once(APPPATH."views/includes/sidebar.php");
   }
}


if ( ! function_exists('load_header')){
   function load_header(){

       require_once(APPPATH."views/includes/header.php");
   }
}