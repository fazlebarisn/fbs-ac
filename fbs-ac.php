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

function fbs_ac_contact_form($atts,$content){

    $atts = shortcode_atts(array(
        'email' => get_option('admin_email'),
        'submit' => __('Send Email' , 'fbs'),
    ),$atts);

    ob_start();
    ?>
    <form action="" id="fbs_ac_contact" method="post">
        <p>
            <label for="name">Name</label>
            <input type="text" name="fas_ac_name" value="">
        </p>
        <p>
            <label for="email">Email</label>
            <input type="email" name="fas_ac_email" value="">
        </p>
        <p>
            <label for="subject">Subject</label>
            <input type="text" name="fas_ac_subject" value="">
        </p>
        <p>
            <label for="message">Message</label>
            <textarea name="fbs_ac_message" id="" cols="30" rows="5"></textarea>
        </p>
        <p>
            <input type="submit" name="fas_ac_submit" value="<?php echo esc_attr( $atts['submit'] ); ?>">
        </p>
    </form>
    <?php
    return ob_get_clean();
}
add_shortcode('fbs_contuct' , 'fbs_ac_contact_form');