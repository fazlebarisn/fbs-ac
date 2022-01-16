<?php

namespace Fbs\Ac\Admin;

class Menu{

    public function __construct()
    {
        add_action( 'admin_menu' , [ $this , 'adminMenu'] );
    }

    /**
     * Add menu in wordpress dashboard menu
     *
     * @return void
     */
    public function adminMenu(){
        add_menu_page( __('Fbs Ac' , 'fbsac' ) , __('Academy' , 'fbsac') , 'manage_options' , 'fbs-ac' , [$this , 'pluginPage'] , 'dashicons-welcome-learn-more' );
    }

    public function pluginPage(){
        echo "hyyy";
    }
}