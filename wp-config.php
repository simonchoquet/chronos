<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Le script de création wp-config.php utilise ce fichier lors de l'installation.
 * Vous n'avez pas à utiliser l'interface web, vous pouvez directement
 * renommer ce fichier en "wp-config.php" et remplir les variables à la main.
 * 
 * Ce fichier contient les configurations suivantes :
 * 
 * * réglages MySQL ;
 * * clefs secrètes ;
 * * préfixe de tables de la base de données ;
 * * ABSPATH.
 * 
 * @link https://codex.wordpress.org/Editing_wp-config.php 
 * 
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'db_chronos');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'TDTdu&jDWB-ilXScFX9D8ic#rEi`i7|7l-|#D}t7-ei+z4v==NnC+b}1PFJcg|*?');
define('SECURE_AUTH_KEY',  'aCm5Rn.lr~sElzR{`w|g#3jr3?vQnur5 Qz+tFv]Dfcg_A-k|dRhk7/D$R%C5yHp');
define('LOGGED_IN_KEY',    ':%>RJWIqeR%F;|<xiVNL2I?to+@I7uGDrrMd59Uj}_=LaVg}0eCC+@(?-F(Bu5^_');
define('NONCE_KEY',        'w?wW#`Yb14h[>1,7]yIBdGv-B*>8<U}0[}2uot96S%R:=>;+^J-AUGtp3SE__p~B');
define('AUTH_SALT',        'K?v=|aplOVPf+WJb +#2Wi.!Jd%q8!YZErDH$%%hX1+  =mnvD(M0:/~gDe!}Tj.');
define('SECURE_AUTH_SALT', 'dW+BWd(60ko#tkVGbciG/^]:F>-kYUnjm/C0!7&+IK.3k3x~ExJr0PN/#jT( NC0');
define('LOGGED_IN_SALT',   'kpw{T*<B<iVrV!a.YN[TtOu,ZX+]J]|h+cvg wq^VQGg:dtFcFK0e3bJAD{(eIjg');
define('NONCE_SALT',       '3$_{]gnf*QO?A,V|:g4~Z`7m|s9p#!p F;OdNs(TMeEgE9G;Qb{M+w1qG&?-f+Z:');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode déboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 * 
 * Pour obtenir plus d'information sur les constantes 
 * qui peuvent être utilisée pour le déboguage, consultez le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');