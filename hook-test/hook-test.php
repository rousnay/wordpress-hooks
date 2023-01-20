<?php

/**
 * Plugin Name: Hooks Test
 *
 */

// Add text to login screen
function hello_world()
{
    echo 'Hello World';
}
//Example of using add_aciton
add_action('login_header', 'hello_world');

//Modify URL on login screen
function change_headerurl($url)
{
    $url = "https://wittyplex.com";
    return $url;
}
//Example of using add_filter
add_filter('login_headerurl', 'change_headerurl',);
