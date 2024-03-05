<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'Planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!j]b$p&<yU|Nbm5rM}z#MR$`sk=h(HKPrh@<T~#i3Vf=/+9+,]BiTj5]tWe}Z{E0' );
define( 'SECURE_AUTH_KEY',  'qLqU)Jr1;P&6S4XoiB]wlbv,SRJt9;0XcHAmEFZ;))Da64O;Jp5CCNSAOS.?fK6E' );
define( 'LOGGED_IN_KEY',    '`}q=z6~Bj2e4>rJG+snWw{1?3yz,_4Rse*B2llojE#u(ckk*JTE#&wRp}w9~Y7o<' );
define( 'NONCE_KEY',        'aFa?Wcx1YAc rxX1r@V)Ix7m/D-,+L-1Ozh:oSEtoSrt2m-&GmR!3*/zf^JPLteN' );
define( 'AUTH_SALT',        'z@i9b%V5s1`;WNE$,{&tS+eK^}e;$-!}{wz@CL!6CBGFH4b{a=xJu]LIm!_u]8rE' );
define( 'SECURE_AUTH_SALT', 'x`q?uhSg8m}-F8C!uy;-W~gZRgW1N~<UYxAffCyuY}9vW!txUv/O*So&w4Z0{uL%' );
define( 'LOGGED_IN_SALT',   '<_Qgu6wqY?Gb~P!_o>F8r~lWJA1gwa(mo6]u4W8Awv&`0`2QZ,Wv<q:=>)[5s@6c' );
define( 'NONCE_SALT',       't&[j,1Q4w..E@rGOCgE0A:=]-I;UmFc|S`jsH|Pq@%;wK~E>!!0/L.F1oFprWi,3' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
