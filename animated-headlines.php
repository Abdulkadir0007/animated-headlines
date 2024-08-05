<?php 
/**
 * @package Akismet
 */
/**
 * Plugin Name: Animated Headlines
 * Plugin URI: https://wordpress.org/plugins/animated-headlines
 * Description: Animated Headlines Plugin helping Your Headin Animated Heading 
 * Version: 1.0.0
 *Requires at least: 5.8
 *Requires PHP: 5.6.20
 *Author: Abdul Kadir
 *Author URI: https://mabdulkadir.com
 *License: GPLv2 or later
 *Text Domain: anihed
 */ 

//includ css

function anihed_enqueue(){
    wp_enqueue_style('anihed-style',plugins_url('_inc/anihed.css',__file__));
    wp_enqueue_style('anihed-css',plugins_url('_inc/css/jquery.animatedheadline.css',__file__));
}
add_action('wp_enqueue_scripts','anihed_enqueue');


//includ css

function anihed_script(){
    wp_enqueue_script('jQuery');
    wp_enqueue_script('anihed-script',plugins_url('_inc/js/jquery.animatedheadline.js',__file__),array(),'1.0.0',true);
}
add_action('wp_enqueue_scripts','anihed_script');



require_once("animated.php");
require_once("custom.php");
require_once("shortcode.php");



?>

