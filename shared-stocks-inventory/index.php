<?php
/*
 *Plugin Name:       Shared Stocks Inventory
 *Plugin URI:        https://example.com/plugins/the-basics/
 *Description:       Lets variable products share stock quantity from a single stocks pool
 *Version:           1.0.0
 *Author:            Kris Dev
 *License:           GPL v2 or later
 *License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 *Update URI:        https://example.com/my-plugin/
 */


function echo_new_message(){
	echo 'Birth of new Wordpress Plugin is here';
                                   
};
add_action('init', 'echo_new_message');


