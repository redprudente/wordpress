<?php
/*
 * Plugin Name: Red Web Project
 * Description: Handle the custom functions for the Red Site
 */

 // Remove the admin bar from the front end
add_filter( 'show_admin_bar', '__return_false' );