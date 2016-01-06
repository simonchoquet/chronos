<?php
/*
Plugin Name: Artiste
Description: Un plugin pour la gestion des artistes et de la programmation
Version: 0.1
License: GPL2
*/

class Artiste
{
    public function __construct()
    {

        add_action('admin_menu', array($this, 'add_admin_menu'));

        include_once plugin_dir_path( __FILE__ ).'prog.php';
        new Prog();

        register_activation_hook(__FILE__, array($this, 'install'));
        register_uninstall_hook(__FILE__, array($this, 'uninstall'));
    }

    public function add_admin_menu()
    {
        add_menu_page('Gestion des artistes', 'Artiste', 'manage_options', 'artiste', array($this, 'menu_html'), 'dashicons-playlist-audio');
    }

    public function menu_html()
    {
        global $wpdb;

        if (isset($_POST['name']) &&
            isset($_POST['description']) &&
            isset($_POST['p_i']) &&
            isset($_POST['p_t']) &&
            isset($_POST['p_f']) &&
            isset($_POST['p_s']) &&
            isset($_POST['p_y']) &&
            isset($_POST['e_y']) &&
            isset($_POST['e_s']) &&
            isset($_POST['image']) &&
            isset($_POST['scene']) &&
            isset($_POST['day']) &&
            isset($_POST['time'])) {

            $wpdb->insert("{$wpdb->prefix}artiste",
                array('name' => $_POST['name'],
                    'description' => $_POST['description'],
                    'facebook_page' => $_POST['p_f'],
                    'twitter_page' => $_POST['p_t'],
                    'youtube_page' => $_POST['p_y'],
                    'soundcloud_page' => $_POST['p_s'],
                    'instagram_page' => $_POST['p_i'],
                    'youtube_link' => $_POST['e_y'],
                    'soundcloud_link' => $_POST['e_s'],
                    'image_url' => $_POST['image'],
                    'scene' => $_POST['scene'],
                    'passage_day' => $_POST['day'],
                    'passage_time' => $_POST['time']
                )
            );
        }

        echo '<h1>'.get_admin_page_title().'</h1>';
        ?>
        <div class="row">
            <div class="col-xs-4">
                <form method="post" action="">
                    <h2>Ajouter un artiste</h2>
                    <label>Nom</label>
                    <input type="text" name="name"/><br>
                    <label>Scène</label>
                    <select name="scene">
                        <option value="0">Scène A</option>
                        <option value="1">Scène B</option>
                    </select><br>
                    <label>Jour de passage</label>
                    <select name="day">
                        <option value="0">Samedi</option>
                        <option value="1">Dimanche</option>
                    </select><br>
                    <label>Heure de passage</label>
                    <input type="text" name="time" placeholder="hh:mm"/><br>
                    <label>URL image</label>
                    <input type="text" name="image"/><br>
                    <label>Description</label>
                    <input type="text" name="description"/><br>
                    <label>Page Youtube</label>
                    <input type="text" name="p_y"/><br>
                    <label>Page Soundcloud</label>
                    <input type="text" name="p_s"/><br>
                    <label>Page Twitter</label>
                    <input type="text" name="p_t"/><br>
                    <label>Page Instagram</label>
                    <input type="text" name="p_i"/><br>
                    <label>Page Facebook</label>
                    <input type="text" name="p_f"/><br>
                    <label>Exemple Soundcloud</label>
                    <input type="text" name="e_s"/><br>
                    <label>Exemple Youtube</label>
                    <input type="text" name="e_y"/>
                    <?php submit_button('Ajouter'); ?>
                </form>
            </div>
            <div class="col-xs-6">
                <h2>Liste des artistes</h2>
                <table class="table table-responsive">
                    <tr>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Page Instagram</th>
                        <th>Page Twitter</th>
                        <th>Page Facebook</th>
                        <th>Page Youtube</th>
                        <th>Page Soundcloud</th>
                        <th>Exemple Soundcloud</th>
                        <th>Exemple Youtube</th>
                    </tr>

        <?php

        $row = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}artiste");

        foreach($row as $var) {
            echo '<tr>';
            echo '<td>' . $var->name .
                '</td><td>' . $var->description .
                '</td><td><a target="_blank" href="' . $var->instagram_page .
                '">lien</a></td><td><a target="_blank" href="' . $var->twitter_page .
                '">lien</a></td><td><a target="_blank" href="' . $var->facebook_page .
                '">lien</a></td><td><a target="_blank" href="' . $var->instagram_page .
                '">lien</a></td><td><a target="_blank" href="' . $var->soundcloud_page .
                '">lien</a></td><td>' . $var->soundcloud_link .
                '</td><td>' . $var->youtube_link . '</td>';
            echo '</tr>';
        }
        ?>
                </table>
            </div>
        </div>
        <hr>
        <?php
    }

    public static function install()
    {
        global $wpdb;

        $wpdb->query("
            CREATE TABLE IF NOT EXISTS {$wpdb->prefix}artiste (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL,
            description TEXT NOT NULL,
            youtube_link TEXT,
            soundcloud_link TEXT,
            facebook_page TEXT,
            twitter_page TEXT,
            instagram_page TEXT,
            youtube_page TEXT,
            soundcloud_page TEXT,
            image_url TEXT,
            passage_time TIME,
            passage_day BOOLEAN,
            scene BOOLEAN);
        ");
    }

    public static function uninstall()
    {
        global $wpdb;

        $wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}artiste;");
    }

}

new Artiste();