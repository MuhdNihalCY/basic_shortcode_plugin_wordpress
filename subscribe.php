<?php 
/*
Plugin Name: Subscriptionss
Plugin URI: https://example.com
Description: A very basic test plugin for subscriptions link
Version: 1.0
Author: Nihal
Author URI: https://example.com
License: GPL2
*/ 
function subscribe_link_att($atts) {
    $default = array(
        'link' => '#',
        'title' => '#',
    );
    $a = shortcode_atts($default, $atts);
    return '<a rel="nofollow" class="subs-link" href="'.$a["link"].'">'.$a["title"].'</a>';
}
add_shortcode('subscribe', 'subscribe_link_att');

function enqueue_custom_styles() {
    // Get the URL of the plugin directory
    $dir_url = plugins_url('style.css',__FILE__);

    // Enqueue your custom stylesheet
    wp_enqueue_style('style', $dir_url);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');