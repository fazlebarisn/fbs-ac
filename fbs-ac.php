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

    /**
     * defien plugin version
     */
    const version = "1.0.0";

    /**
     * class constructor
     */
    private function __construct()
    {
        $this->defineConstants();
    }

    /**
     * initilize a singileton 
     *
     * @return \FbsAc class
     */
     public static function init(){

         static $instance = false;

         if( !$instance ){
             $instance = new self();
         }

         return $instance;
     }

     public function defineConstants(){
         define( 'FBS_AC_VERSION' , self::version );
         define( 'FBS_AC_FILE' , __FILE__ );
         define( 'FBS_AC_PATH' , __DIR__ );
         define( 'FBS_AC_URL' , plugins_url( '' , FBS_AC_FILE ) );
         define( 'FBS_AC_ASSETS' , FBS_AC_URL . '/assets' );
     }

 }

 /**
  * Initializes the main plugin
  *
  * @return \FbsAc class
  */
 function fbsAc(){
     return FbsAc::init();
 }

 // kick-off the plugin
 fbsAc();

 //var_dump( fbsAc());