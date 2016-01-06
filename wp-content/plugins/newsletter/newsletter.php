<?php
/*
Plugin Name: Newsletter_Chronos
Description: Un plugin pour la gestion de la newsletter
Version: 4.0.8
License: GPL2
*/

class Newsletter
{
    public function __construct()
    {
        add_filter('the_title', array($this, 'modify_page_title'), 20) ;

        register_activation_hook(__FILE__, array($this, 'install'));
        register_uninstall_hook(__FILE__, array($this, 'uninstall'));
    }

    public function modify_page_title($title)
    {
        return $title . ' | Newsletter' ;
    }

    public static function install()
    {
        global $wpdb;

        $wpdb->query("CREATE TABLE IF NOT EXISTS {$wpdb->prefix}newsletter_email (id INT AUTO_INCREMENT PRIMARY KEY, email VARCHAR(255) NOT NULL);");
    }

    public static function uninstall()
    {
        global $wpdb;

        $wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}newsletter_email;");
    }
}

new Newsletter();