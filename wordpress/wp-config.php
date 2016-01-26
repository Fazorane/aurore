<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'aurore2');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '*T>]=/v2~8gdq?nBy}(,jyaM 6=,xd/R-`4ENOoDN#TcvtP)tpd:2oc :G(k|@uE');
define('SECURE_AUTH_KEY',  'rv)n|#,^/S}9  XgI,-WhGAj1R4yb<:]Ud(sG2l1 e^!R~axeYWO9T&|m{L8N/m[');
define('LOGGED_IN_KEY',    '6v2tNyazoLB 4+u!lF*:)F8JouY>(8)jEj~ Cmj>@]en$O`f7Mm~IoLbx$X-)4Ia');
define('NONCE_KEY',        '&>r#v3#g?y=e=.,lzi?s  s*Iry*7& tDEWWE x[Chv/#+ZxFhB8|>$]>u#<GL-:');
define('AUTH_SALT',        ':DGHO~G^NIHVX532ZYr_H{ ;DjdWQpc5NwYkgPoLVY.G>x[i8^#p`G;n-FnnE+7+');
define('SECURE_AUTH_SALT', '/4wo4z1-x/TE^kHX.`I,r!|^^--z5Eh8d?8xLHR3)!nW#Mm_K01|}6t12/B-iAqJ');
define('LOGGED_IN_SALT',   '%|xm+A7_4d%B SYx&^_7;-*#H;vUA6ZJ)+5mW@$@|$^Y4I7#,=13P~9>!uJ-AHxG');
define('NONCE_SALT',       '+qV<g!N16>(-q^Mw2}0u+p]!Y=yKE,a3)^n3zH1|N<^+?p`=~^&)y2E{.1|Nv:e>');
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
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');