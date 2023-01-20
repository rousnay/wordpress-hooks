<?php

/**
 * Plugin Name: Hooks Test
 *
 */

// Adds a welcome messages
function hello_world()
{
    if (is_admin()) {
        echo 'Welcome to Admin panel';
    } else {
        echo 'Hello World';
    }
}
//Example of using add_aciton
add_action('login_header', 'hello_world');
add_action('admin_notices', 'hello_world');

//Modify URL on login screen
function change_headerurl($url)
{
    $url = "https://wittyplex.com";
    return $url;
}
//Example of using add_filter
add_filter('login_headerurl', 'change_headerurl',);
