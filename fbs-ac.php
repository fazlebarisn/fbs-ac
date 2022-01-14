<?php
/**
 * @package KbsPlugin
*/

/*
Plugin Name: Fbs Ac
Plugin URI: https://www.chitabd.com/
Description: New plugin to do something
Version: 1.0.0
Author: Fazle Bari
Author URI: https://www.chitabd.com/
Licence: GPL Or leater
Text Domain: fbs
*/

/*
This is a free plugin
*/

defined('ABSPATH') or die('Nice Try!');

function fbs_user_contact_methods($methods){
    $methods['twitter'] = __('Twitter' , 'fbs');
    $methods['facebook'] = __('Facebook' , 'fbs');
    return $methods;
}

add_filter('user_contactmethods','fbs_user_contact_methods');

function fbs_author_contact_info($content){

    global $post;

    $author_id = $post->post_author;
    $author = get_user_by( 'id' , $author_id );
    //var_dump($author_name);
    $twitter = get_user_meta($author->ID,'twitter',true);
    $facebook = get_user_meta($author->ID,'facebook',true);
    $bio = get_user_meta($author->ID,'description',true);

    ob_start();

    ?>
        <div>
            Twitter : <?php echo $twitter ?><br>
            Facebook : <?php echo $facebook ?><br>
            Bio : <?php echo $bio ?>
        </div>
    <?php

    $author_info = ob_get_clean();

    return $content . $author_info;
}

add_filter('the_content','fbs_author_contact_info');