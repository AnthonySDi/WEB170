<?php
/*
Theme Name: Develop This
Author: Anthony Stenberg-Di Geronimo
Author URI: http://anthonydevelopedthis.com
Description: This is a project for a class that is developing Content Management Systems.
Version: 1.0
*/

// the sidebar para widgets
register_sidebar(array('before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>'));

// Register Menus (You'll want these!)
register_nav_menus(array('main-menu' => __('Main Menu') ));

// Because WP isn't smart enough to have this automatically set up. 
add_theme_support('post-thumbnails');

// excerpts
add_post_type_support('page','excerpt');

// title tag dynamic SEO 
function get_title_tag() {
    
    global $post;  // do not forget this because of variable scope!!!

    if(is_front_page()|| is_home()) { // front/blog

        bloginfo('description'); // tagline

    } elseif (is_page() || is_single()) { // page/posting
        
        echo get_the_title($post->ID);
    
    } else { //404/search etc.
        
        bloginfo('description'); // tagline

    }

    if ($post->post_parent) { //your sites parent pages

        echo ' | ';
        echo get_the_title($post->post_parent);

    }

    echo ' | ';
    echo 'Anthony Stenberg-Di Geronimo'; //bloginfo('name'); would pull blog name from the site too
    echo ' | ';
    echo 'Seattle, WA';
}

?>