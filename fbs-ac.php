<?php
/**
Plugin Name: Fbs Ac
Plugin URI: https://www.chitabd.com/
Description: New plugin to create a address book
Version: 1.0.0
Author: Fazle Bari
Author URI: https://www.chitabd.com/
Licence: GPL Or leater
Text Domain: fbsac
*/

defined('ABSPATH') or die('Nice Try!');

/**
 * The main class
 */

 final class FbsAc{

     public static function init(){

         static $instance = false;

         if( !$instance ){
             $instance = new self();
         }

         return $instance;
     }

 }